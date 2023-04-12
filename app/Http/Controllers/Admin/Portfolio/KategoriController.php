<?php

namespace App\Http\Controllers\Admin\Portfolio;

use App\Http\Controllers\Controller;
use App\Models\Portfolio\Kategori as PortfolioKategori;
use App\Models\Portfolio\Portfolio;
use Illuminate\Http\Request;
use League\Config\Exception\ValidationException;

class KategoriController extends Controller
{
    private $validate_model = [
        'urutan' => ['nullable', 'integer'],
        'nama' => ['required', 'string'],
        'keterangan' => ['nullable', 'string'],
    ];

    public function index(Request $request)
    {
        if (request()->ajax()) {
            return PortfolioKategori::datatable($request);
        }
        $page_attr = [
            'title' => 'Kategori',
            'breadcrumbs' => [
                ['name' => 'Dashboard', 'url' => 'admin.dashboard'],
                ['name' => 'Portfolio'],
            ]
        ];

        $view = path_view('pages.admin.portfolio.kategori');
        $data = compact('page_attr', 'view');
        $data['compact'] = $data;
        return view($view, $data);
    }

    public function insert(Request $request): mixed
    {
        try {
            $request->validate($this->validate_model);
            $urutan = $request->urutan ?? ((PortfolioKategori::max('urutan') ?? 0) + 1);

            $model = new PortfolioKategori();
            $model->keterangan = $request->keterangan;
            $model->nama = $request->nama;
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
            $model = PortfolioKategori::findOrFail($request->id);
            $urutan = $request->urutan ?? ((PortfolioKategori::max('urutan') ?? 0) + 1);

            $request->validate(array_merge(['id' => [
                'required', 'int',
            ]], $this->validate_model));
            $model->nama = $request->nama;
            $model->keterangan = $request->keterangan;
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

    public function delete(PortfolioKategori $model): mixed
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
        return PortfolioKategori::findOrFail($request->id);
    }
}
