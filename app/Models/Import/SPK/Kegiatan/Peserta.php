<?php

namespace App\Models\Import\SPK\Kegiatan;

use App\Models\SPK\Kegiatan\Peserta as KegiatanPeserta;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelUserActivity\Traits\Loggable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;
use Cviebrock\EloquentSluggable\Sluggable;

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use PhpOffice\PhpSpreadsheet\Worksheet\PageSetup;

class Peserta extends Model
{
    use HasFactory, Loggable, Sluggable;

    protected $fillable = [
        'id',
        'nama',
        'slug',
        'file',
        'count',
    ];

    protected $primaryKey = 'id';
    protected $table = 'import_peserta';
    const tableName = 'import_peserta';
    const excelFolder = 'assets/import/peserta';

    protected $tableHeader = [
        'No',
        'Foto KTP',
        'NIK',
        'Nama',
        'No Whatsapp',
        'Email',
        'Tempat Lahir',
        'Tanggal Lahir',
        'Jenis Kelamin',
        'Agama',
        'Pendidikan Terakhir',
        'Alamat Ktp',
        'Kota',
        'Kecamatan',
        'Kelurahan',
        'Alamat Domisili',
        'Instagram',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama'
            ]
        ];
    }

    public function items()
    {
        return $this->hasMany(KegiatanPeserta::class, 'import_id', 'id');
    }

    public function fileUrl()
    {
        $file = $this->attributes['file'];
        return url(static::excelFolder . '/' . $file);
    }

    public static function datatable(Request $request): mixed
    {
        $query = [];
        $base_url_excel_folder = url(str_replace('./', '', static::excelFolder)) . '/';
        // import
        $table = self::tableName;

        // excel
        $c_excel_link = 'excel_link';
        $query[$c_excel_link] = <<<SQL
            (concat('$base_url_excel_folder', $table.file))
        SQL;
        $query["{$c_excel_link}_alias"] = $c_excel_link;
        // ========================================================================================================
        // select raw as alias
        $sraa = function (string $col) use ($query): string {
            return $query[$col] . ' as ' . $query[$col . '_alias'];
        };

        $model_filter = [$c_excel_link];

        $to_db_raw = array_map(function ($a) use ($sraa) {
            return DB::raw($sraa($a));
        }, $model_filter);
        // ========================================================================================================


        // Select =====================================================================================================
        $model = self::select(array_merge([
            DB::raw("$table.*"),
        ], $to_db_raw));

        // Filter =====================================================================================================
        // filter check
        $f_c = function (string $param) use ($request): mixed {
            $filter = $request->filter;
            return isset($filter[$param]) ? $filter[$param] : false;
        };

        // filter ini menurut data model filter
        $f = [];
        // loop filter
        foreach ($f as $v) {
            if ($f_c($v) !== false) {
                $model->whereRaw("{$query[$v]}='{$f_c($v)}'");
            }
        }

        // filter custom
        $filters = [];
        foreach ($filters as  $f) {
            if ($f_c($f) !== false) {
                $model->whereRaw("$table.$f='{$f_c($f)}'");
            }
        }
        // ========================================================================================================


        // ========================================================================================================
        $datatable = Datatables::of($model)->addIndexColumn();

        // search
        // ========================================================================================================
        $query_filter = $query;
        $datatable->filter(function ($query) use ($model_filter, $query_filter, $table) {
            $search = request('search');
            $search = isset($search['value']) ? $search['value'] : null;
            if ((is_null($search) || $search == '') && count($model_filter) > 0) return false;

            // tambah pencarian
            $static = new static();
            $search_add = $static->fillable;
            $search_add = array_map(function ($v) use ($table) {
                return "$table.$v";
            }, $search_add);
            $search_arr = array_merge($model_filter, $search_add);


            // pake or where
            $search_str = "(";
            foreach ($search_arr as $k => $v) {
                $or = (($k + 1) < count($search_arr)) ? 'or' : '';
                $column = isset($query_filter[$v]) ? $query_filter[$v] : $v;
                $search_str .= "$column like '%$search%' $or ";
            }

            $search_str .= ")";
            $query->whereRaw($search_str);
        });

        // create datatable
        return $datatable->make(true);
    }

    public static function import(Request $request, Peserta $model)
    {
        // setup
        $folder = static::excelFolder;
        $excel = null;
        $error = null;
        $start = 2;
        $file_excel = '';

        try {
            if ($file = $request->file('file')) {
                // $name = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                $excel = date('Ymdhis-') . $model->slug  .  '.' .  $file->getClientOriginalExtension();
                $file->move("$folder", $excel);
                $file_excel = "./$folder/$excel";

                $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($file_excel);
                $workSheet = $spreadsheet->getActiveSheet();
                $array_from_excel = $workSheet->toArray();
            }
        } catch (\Throwable $th) {
            $error = $th;
            delete_file($file_excel);
        }
        if (is_null($excel)) {
            return [
                'status' => false,
                'error' => response()->json(['message' => 'File Not found', 'error' => $error], 400),
                'excel' => $file_excel
            ];
        }


        $drawing = $workSheet->getDrawingCollection()[1];
        $drawing = static::getDrawingByName('Picture 2', $workSheet->getDrawingCollection());

        $imageContents = '';
        $zipReader = fopen($drawing->getPath(), 'r');
        while (!feof($zipReader)) {
            $imageContents .= fread($zipReader, 1024);
        }
        fclose($zipReader);
        $extension = $drawing->getExtension();
        $base_64 = base64_encode($imageContents);

        // move to folder
        $path = public_path(static::excelFolder);
        $name = 'ktp-' . date('Y-m-d-His') . random_int(10, 99) . '.' . $extension;
        $file_name = "$path/$name";

        $result = file_put_contents($file_name, $imageContents);
        dd($result);

        dd($base_64);
        $count = 0;
        foreach ($array_from_excel as $i => $v) {
            if ($i < $start) continue;
            // cek
            $kode = $v[1];
            $cek = KegiatanPeserta::where('kode', $kode)->count();
            if ($cek > 0) return [
                'status' => false,
                'error' => response()->json(['message' => "Kode $kode Sudah di gunakan, Silahkan cek data nomor {$v[0]}"], 400),
                'excel' => $file_excel
            ];
            $peserta = new KegiatanPeserta();
            $peserta->kode = $kode;
            $peserta->nama = $v[2];
            $peserta->jml_lulus = $v[3];
            $peserta->import_id = $model->id;
            $peserta->save();
            $count++;
        }

        $model->count = $count;
        $model->file = $excel;
        $model->save();
        return ['status' => true];
    }

    public static function format(Request $request)
    {
        // data body
        // $details = [];
        $bulan_array = [
            1 => 'Januari',
            2 => 'February',
            3 => 'Maret',
            4 => 'April',
            5 => 'Mei',
            6 => 'Juni',
            7 => 'Juli',
            8 => 'Agustus',
            9 => 'September',
            10 => 'Oktober',
            11 => 'November',
            12 => 'Desember',
        ];
        $today_m = (int)Date("m");
        $today_d = (int)Date("d");
        $today_y = (int)Date("Y");

        $date = $today_d . " " . $bulan_array[$today_m] . " " . $today_y;

        // poin-poin header disini
        $static = new static();
        $headers = $static->tableHeader;

        // laporan baru
        $row = 1;
        $col_start = "A";
        $col_end = chr(64 + count($headers));
        $title_excel = "Formulir Import Peserta";
        // Header excel ================================================================================================
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Dokumen Properti
        $spreadsheet->getProperties()
            ->setCreator("Administrator")
            ->setLastModifiedBy("Administrator")
            ->setTitle($title_excel)
            ->setSubject("Administrator")
            ->setDescription("LIst Company $date")
            ->setKeywords("Laporan, Report")
            ->setCategory("Laporan, Report");

        // set default font
        $spreadsheet->getDefaultStyle()->getFont()->setName('Calibri');
        $spreadsheet->getDefaultStyle()->getFont()->setSize(11);

        // header 2 ====================================================================================================
        $row += 1;
        $sheet->mergeCells($col_start . $row . ":" . $col_end . $row)
            ->setCellValue("A$row", "Formulir Import Peserta");
        $sheet->getStyle($col_start . $row . ":" . $col_end . $row)->applyFromArray([
            "font" => [
                "bold" => true,
                "size" => 13
            ],
            "alignment" => [
                "horizontal" => Alignment::HORIZONTAL_CENTER,
            ],
        ]);

        // Tabel =======================================================================================================
        // Tabel Header
        $row += 2;
        $styleArray = [
            'font' => [
                'bold' => true,
            ],
            'alignment' => [
                'horizontal' => Alignment::HORIZONTAL_CENTER,
            ],
            'borders' => [
                'allBorders' => [
                    'borderStyle' => Border::BORDER_THIN,
                ],
            ],
            'fill' => [
                'fillType' => Fill::FILL_SOLID,
                'startColor' => [
                    'rgb' => '93C5FD',
                ]
            ],
        ];
        $sheet->getStyle($col_start . $row . ":" . $col_end . $row)->applyFromArray($styleArray);
        $row++;
        $styleArray['fill']['startColor']['rgb'] = 'E5E7EB';
        $sheet->getStyle($col_start . $row . ":" . $col_end . $row)->applyFromArray($styleArray);

        // apply header
        for ($i = 0; $i < count($headers); $i++) {
            $sheet->setCellValue(chr(65 + $i) . ($row - 1), $headers[$i]);
            $sheet->setCellValue(chr(65 + $i) . $row, ($i + 1));
        }

        // tabel body
        $styleArray = [
            'borders' => [
                'allBorders' => [
                    'borderStyle' => Border::BORDER_THIN,
                    'color' => ['argb' => '000000'],
                ],
            ],
            "alignment" => [
                'wrapText' => TRUE,
                'vertical' => Alignment::VERTICAL_TOP
            ]
        ];
        $start_tabel = $row + 1;
        // foreach ($details as $detail) {
        //     $c = 0;
        //     $row++;
        //     $detail = (object)$detail;
        //     $sheet->setCellValue(chr(65 + $c) . "$row", ($row - 5));
        //     $sheet->setCellValue(chr(65 + ++$c) . "$row", $detail->nama);
        //     $sheet->setCellValue(chr(65 + ++$c) . "$row", $detail->dari);
        //     $sheet->setCellValue(chr(65 + ++$c) . "$row", $detail->sampai);
        //     $sheet->setCellValue(chr(65 + ++$c) . "$row", $detail->keterangan);
        //     $sheet->setCellValue(chr(65 + ++$c) . "$row", $detail->status_str);
        // }
        // format
        // nomor center
        $sheet->getStyle($col_start . $start_tabel . ":" . $col_start . $row)
            ->getAlignment()
            ->setHorizontal(Alignment::HORIZONTAL_CENTER);
        // border all data
        $sheet->getStyle($col_start . $start_tabel . ":" . $col_end . $row)
            ->applyFromArray($styleArray);

        $spreadsheet->getActiveSheet()->getStyle('B' . $start_tabel . ":B" . $row)->getNumberFormat()
            ->setFormatCode('0');


        // function for width column
        function w($width)
        {
            return 0.71 + $width;
        }

        // set width column
        for ($i = 65; $i < (65 + count($headers)); $i++) {
            $spreadsheet->getActiveSheet()->getColumnDimension(chr($i))->setAutoSize(true);
        }

        // set  printing area
        $spreadsheet->getActiveSheet()->getPageSetup()->setPrintArea($col_start . '1:' . $col_end . $row);
        $spreadsheet->getActiveSheet()->getPageSetup()
            ->setOrientation(PageSetup::ORIENTATION_PORTRAIT);
        $spreadsheet->getActiveSheet()->getPageSetup()
            ->setPaperSize(PageSetup::PAPERSIZE_A4);

        // margin
        $spreadsheet->getActiveSheet()->getPageMargins()->setTop(1);
        $spreadsheet->getActiveSheet()->getPageMargins()->setRight(0);
        $spreadsheet->getActiveSheet()->getPageMargins()->setLeft(0);
        $spreadsheet->getActiveSheet()->getPageMargins()->setBottom(0);

        // page center on
        $spreadsheet->getActiveSheet()->getPageSetup()->setHorizontalCentered(true);
        $spreadsheet->getActiveSheet()->getPageSetup()->setVerticalCentered(false);

        // simpan langsung
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $title_excel . '.xlsx"');
        header('Cache-Control: max-age=0');
        $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
        $writer->save('php://output');
        exit;
        die;
    }

    public static function export(Request $request)
    {
        // data body
        $details = KegiatanPeserta::orderBy('nama')->get();
        $bulan_array = [
            1 => 'Januari',
            2 => 'February',
            3 => 'Maret',
            4 => 'April',
            5 => 'Mei',
            6 => 'Juni',
            7 => 'Juli',
            8 => 'Agustus',
            9 => 'September',
            10 => 'Oktober',
            11 => 'November',
            12 => 'Desember',
        ];
        $today_m = (int)Date("m");
        $today_d = (int)Date("d");
        $today_y = (int)Date("Y");

        $date = $today_d . " " . $bulan_array[$today_m] . " " . $today_y;

        // poin-poin header disini
        $static = new static();
        $headers = $static->tableHeader;

        // laporan baru
        $row = 1;
        $col_start = "A";
        $col_end = chr(64 + count($headers));
        $title_excel = "Export Semua Data Peserta";
        // Header excel ================================================================================================
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Dokumen Properti
        $spreadsheet->getProperties()
            ->setCreator("Administrator")
            ->setLastModifiedBy("Administrator")
            ->setTitle($title_excel)
            ->setSubject("Administrator")
            ->setDescription("LIst Company $date")
            ->setKeywords("Laporan, Report")
            ->setCategory("Laporan, Report");

        // set default font
        $spreadsheet->getDefaultStyle()->getFont()->setName('Calibri');
        $spreadsheet->getDefaultStyle()->getFont()->setSize(11);

        // header 2 ====================================================================================================
        $row += 1;
        $sheet->mergeCells($col_start . $row . ":" . $col_end . $row)
            ->setCellValue("A$row", "Export Semua Data Peserta");
        $sheet->getStyle($col_start . $row . ":" . $col_end . $row)->applyFromArray([
            "font" => [
                "bold" => true,
                "size" => 13
            ],
            "alignment" => [
                "horizontal" => Alignment::HORIZONTAL_CENTER,
            ],
        ]);

        // Tabel =======================================================================================================
        // Tabel Header
        $row += 2;
        $styleArray = [
            'font' => [
                'bold' => true,
            ],
            'alignment' => [
                'horizontal' => Alignment::HORIZONTAL_CENTER,
            ],
            'borders' => [
                'allBorders' => [
                    'borderStyle' => Border::BORDER_THIN,
                ],
            ],
            'fill' => [
                'fillType' => Fill::FILL_SOLID,
                'startColor' => [
                    'rgb' => '93C5FD',
                ]
            ],
        ];
        $sheet->getStyle($col_start . $row . ":" . $col_end . $row)->applyFromArray($styleArray);
        $row++;
        $styleArray['fill']['startColor']['rgb'] = 'E5E7EB';
        $sheet->getStyle($col_start . $row . ":" . $col_end . $row)->applyFromArray($styleArray);

        // apply header
        for ($i = 0; $i < count($headers); $i++) {
            $sheet->setCellValue(chr(65 + $i) . ($row - 1), $headers[$i]);
            $sheet->setCellValue(chr(65 + $i) . $row, ($i + 1));
        }

        // tabel body
        $styleArray = [
            'borders' => [
                'allBorders' => [
                    'borderStyle' => Border::BORDER_THIN,
                    'color' => ['argb' => '000000'],
                ],
            ],
            "alignment" => [
                'wrapText' => TRUE,
                'vertical' => Alignment::VERTICAL_TOP
            ]
        ];
        $start_tabel = $row + 1;
        foreach ($details as $detail) {
            $c = 0;
            $row++;
            $detail = (object)$detail;
            $sheet->setCellValue(chr(65 + $c) . "$row", ($row - 5));

            if ($detail->ktp != null) {
                // ktp image
                $imagePath = $detail->ktpFile();
                $drawing = new Drawing();
                $drawing->setName($detail->ktp);
                $drawing->setDescription("Foto KTP {$detail->nama}");
                $drawing->setPath($imagePath);
                $drawing->setWidthAndHeight(static::excelImageWidht(5), static::excelImageWidht(3));

                $cellKtp = chr(65 + ++$c) . "$row";

                // ktp wkwk
                $sheet->setCellValue($cellKtp, $detail->ktp);
                $drawing->setCoordinates($cellKtp);
                $drawing->setWorksheet($sheet);

                // set height
                $rowDimension = $sheet->getRowDimension($row);
                $rowDimension->setRowHeight(100);
            } else {
                ++$c;
            }

            $sheet->setCellValue(chr(65 + ++$c) . "$row", $detail->nik);
            $sheet->setCellValue(chr(65 + ++$c) . "$row", $detail->nama);
            $sheet->setCellValue(chr(65 + ++$c) . "$row", $detail->no_whatsapp);
            $sheet->setCellValue(chr(65 + ++$c) . "$row", $detail->email);
            $sheet->setCellValue(chr(65 + ++$c) . "$row", $detail->tempat_lahir);
            $sheet->setCellValue(chr(65 + ++$c) . "$row", date('m/d/Y', strtotime($detail->tanggal_lahir)));
            $sheet->setCellValue(chr(65 + ++$c) . "$row", $detail->jenis_kelamin);
            $sheet->setCellValue(chr(65 + ++$c) . "$row", $detail->agama);
            $sheet->setCellValue(chr(65 + ++$c) . "$row", $detail->pendidikan_terakhir);
            $sheet->setCellValue(chr(65 + ++$c) . "$row", $detail->alamat_ktp);
            $sheet->setCellValue(chr(65 + ++$c) . "$row", $detail->kota);
            $sheet->setCellValue(chr(65 + ++$c) . "$row", $detail->kecamatan);
            $sheet->setCellValue(chr(65 + ++$c) . "$row", $detail->kelurahan);
            $sheet->setCellValue(chr(65 + ++$c) . "$row", $detail->alamat_domisili);
            $sheet->setCellValue(chr(65 + ++$c) . "$row", $detail->instagram);
        }

        // format
        // nomor center
        $sheet->getStyle($col_start . $start_tabel . ":" . $col_start . $row)
            ->getAlignment()
            ->setHorizontal(Alignment::HORIZONTAL_CENTER);
        // border all data
        $sheet->getStyle($col_start . $start_tabel . ":" . $col_end . $row)
            ->applyFromArray($styleArray);

        $spreadsheet->getActiveSheet()->getStyle('C' . $start_tabel . ":C" . $row)->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_TEXT);
        $spreadsheet->getActiveSheet()->getStyle('E' . $start_tabel . ":E" . $row)->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_TEXT);
        $spreadsheet->getActiveSheet()->getStyle('H' . $start_tabel . ":H" . $row)->getNumberFormat()->setFormatCode('m/d/yyyy');

        // set width column
        for ($i = 65; $i < (65 + count($headers)); $i++) {
            $spreadsheet->getActiveSheet()->getColumnDimension(chr($i))->setAutoSize(true);
        }

        // set  printing area
        $spreadsheet->getActiveSheet()->getPageSetup()->setPrintArea($col_start . '1:' . $col_end . $row);
        $spreadsheet->getActiveSheet()->getPageSetup()
            ->setOrientation(PageSetup::ORIENTATION_PORTRAIT);
        $spreadsheet->getActiveSheet()->getPageSetup()
            ->setPaperSize(PageSetup::PAPERSIZE_A4);

        // margin
        $spreadsheet->getActiveSheet()->getPageMargins()->setTop(1);
        $spreadsheet->getActiveSheet()->getPageMargins()->setRight(0);
        $spreadsheet->getActiveSheet()->getPageMargins()->setLeft(0);
        $spreadsheet->getActiveSheet()->getPageMargins()->setBottom(0);

        // page center on
        $spreadsheet->getActiveSheet()->getPageSetup()->setHorizontalCentered(true);
        $spreadsheet->getActiveSheet()->getPageSetup()->setVerticalCentered(false);

        // simpan langsung
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $title_excel . '.xlsx"');
        header('Cache-Control: max-age=0');
        $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
        $writer->save('php://output');
        exit;
        die;
    }

    public static function getDrawingByName($name, $drawingCollections): ?Drawing
    {
        foreach ($drawingCollections as $drawing) {
            if ($drawing->getName() == $name) {
                return $drawing;
            }
        }
        return null;
    }

    public static function excelCloumnWidht($width)
    {
        return 0.71 + $width;
    }

    public static function excelImageWidht($width)
    {
        return 37.87 * $width;
    }
}
