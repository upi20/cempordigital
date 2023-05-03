<?php

namespace App\Http\Controllers\Admin\Portfolio;

use App\Http\Controllers\Controller;
use App\Models\Portfolio\Kategori;
use App\Models\Portfolio\SubKategori;
use App\Models\Portfolio\Portfolio;
use Illuminate\Http\Request;
use League\Config\Exception\ValidationException;

class SubKategoriController extends Controller
{
    private $validate_model = [
        'urutan' => ['nullable', 'integer'],
        'nama' => ['required', 'string'],
        'keterangan' => ['nullable', 'string'],
        'kategori_id' => ['required', 'integer'],
    ];

    public function index(Request $request, Kategori $kategori)
    {

        if (request()->ajax()) {
            return SubKategori::datatable($request);
        }
        $page_attr = [
            'title' => 'Sub Kategori',
            'navigation' => h_prefix('kategori', 2),
            'breadcrumbs' => [
                ['name' => 'Dashboard', 'url' => 'admin.dashboard'],
                ['name' => 'kategori', 'url' => h_prefix('kategori', 2)],
                ['name' => 'Portfolio'],
            ]
        ];

        $view = path_view('pages.admin.portfolio.sub_kategori');
        $data = compact('page_attr', 'view', 'kategori');
        $data['compact'] = $data;
        return view($view, $data);
    }

    public function insert(Request $request): mixed
    {
        try {
            $request->validate($this->validate_model);

            $model = new SubKategori();

            $urutan = $request->urutan ?? ((SubKategori::where('kategori_id', $request->kategori_id)->max('urutan') ?? 0) + 1);
            $model->keterangan = $request->keterangan;
            $model->nama = $request->nama;
            $model->kategori_id = $request->kategori_id;
            $model->urutan = $urutan;
            $model->save();
            Portfolio::clearCache();
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
            $model = SubKategori::findOrFail($request->id);

            $request->validate(array_merge(['id' => [
                'required', 'int',
            ]], $this->validate_model));

            $urutan = $request->urutan ?? ((SubKategori::where('kategori_id', $request->kategori_id)->max('urutan') ?? 0) + 1);
            $model->nama = $request->nama;
            $model->keterangan = $request->keterangan;
            $model->kategori_id = $request->kategori_id;
            $model->urutan =  $urutan;
            $model->save();
            Portfolio::clearCache();
            return response()->json();
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function delete(SubKategori $model): mixed
    {
        try {
            $model->delete();
            Portfolio::clearCache();
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
        return SubKategori::findOrFail($request->id);
    }
}
