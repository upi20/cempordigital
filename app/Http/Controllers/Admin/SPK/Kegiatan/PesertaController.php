<?php

namespace App\Http\Controllers\Admin\SPK\Kegiatan;

use App\Http\Controllers\Controller;
use App\Models\Import\SPK\Kegiatan\Peserta as ImportPeserta;
use App\Models\SPK\Kegiatan\Peserta;
use Illuminate\Http\Request;
use League\Config\Exception\ValidationException;

class PesertaController extends Controller
{
    private $validate_model = [
        'nik' => ['required', 'string', 'unique:' . Peserta::tableName],
        'nama' => ['required', 'string'],
        'no_whatsapp' => ['required', 'string'],
        'email' => ['required', 'string'],
        'tempat_lahir' => ['required', 'string'],
        'tanggal_lahir' => ['date', 'string'],
        'jenis_kelamin' => ['required', 'string'],
        'agama' => ['required', 'string'],
        'pendidikan_terakhir' => ['required', 'string'],
        'alamat_ktp' => ['required', 'string'],
        'kota' => ['required', 'string'],
        'kecamatan' => ['required', 'string'],
        'kelurahan' => ['required', 'string'],
        'alamat_domisili' => ['required', 'string'],
        'instagram' => ['required', 'string'],
        'ktp' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg'],
    ];

    private $image_folder = Peserta::image_folder;

    public function index(Request $request)
    {
        if (request()->ajax()) {
            return Peserta::datatable($request);
        }

        $page_attr = adminBreadcumb(h_prefix());
        $view = path_view('pages.admin.spk.kegiatan.peserta');
        $data = compact('page_attr', 'view');
        $data['compact'] = $data;
        return view($view, $data);
    }

    public function insert(Request $request): mixed
    {
        try {
            $request->validate($this->validate_model);

            $ktp = '';
            if ($image = $request->file('ktp')) {
                $ktp = date('YmdHis') . create_slug($request->nama) . "." . $image->getClientOriginalExtension();
                $image->move(public_path($this->image_folder), $ktp);
            }

            $model = new Peserta();
            $model->ktp = $ktp;

            $model->nik = $request->nik;
            $model->nama = $request->nama;
            $model->no_whatsapp = $request->no_whatsapp;
            $model->email = $request->email;
            $model->tempat_lahir = $request->tempat_lahir;
            $model->tanggal_lahir = $request->tanggal_lahir;
            $model->jenis_kelamin = $request->jenis_kelamin;
            $model->agama = $request->agama;
            $model->pendidikan_terakhir = $request->pendidikan_terakhir;
            $model->alamat_ktp = $request->alamat_ktp;
            $model->kota = $request->kota;
            $model->kecamatan = $request->kecamatan;
            $model->kelurahan = $request->kelurahan;
            $model->alamat_domisili = $request->alamat_domisili;
            $model->instagram = $request->instagram;
            $model->save();
            return response()->json();
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function update(Request $request): mixed
    {
        try {
            $this->validate_model['nik'] = ['required', 'string', 'unique:' . Peserta::tableName . ',nik,' . $request->id];

            $model = Peserta::findOrFail($request->id);
            $request->validate(array_merge(['id' => [
                'required', 'int',
            ]], $this->validate_model));

            // ktp handle
            $ktp = '';
            if ($image = $request->file('ktp')) {
                $ktp = date('YmdHis') . create_slug($request->nama) . "." . $image->getClientOriginalExtension();
                $image->move(public_path($this->image_folder), $ktp);

                // delete ktp
                if ($model->ktp) {
                    $path = public_path("$this->image_folder/$model->ktp");
                    delete_file($path);
                }
                // save ktp
                $model->ktp = $ktp;
            }

            $model->nik = $request->nik;
            $model->nama = $request->nama;
            $model->no_whatsapp = $request->no_whatsapp;
            $model->email = $request->email;
            $model->tempat_lahir = $request->tempat_lahir;
            $model->tanggal_lahir = $request->tanggal_lahir;
            $model->jenis_kelamin = $request->jenis_kelamin;
            $model->agama = $request->agama;
            $model->pendidikan_terakhir = $request->pendidikan_terakhir;
            $model->alamat_ktp = $request->alamat_ktp;
            $model->kota = $request->kota;
            $model->kecamatan = $request->kecamatan;
            $model->kelurahan = $request->kelurahan;
            $model->alamat_domisili = $request->alamat_domisili;
            $model->instagram = $request->instagram;
            $model->save();
            return response()->json();
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function delete(Peserta $model): mixed
    {
        try {
            $model->delete();
            // delete ktp
            if ($model->ktp) {
                $path = public_path("$this->image_folder/$model->ktp");
                delete_file($path);
            }
            return response()->json();
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function find(Request $request)
    {
        return Peserta::findOrFail($request->id);
    }

    public function export(Request $request)
    {
        return ImportPeserta::export($request);
    }
}
