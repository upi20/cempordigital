<?php

namespace App\Http\Controllers\Admin\Latsar;

use App\Helpers\Summernote;
use App\Http\Controllers\Controller;
use App\Models\Latsar\Latsar;
use Illuminate\Http\Request;
use League\Config\Exception\ValidationException;

class LatsarController extends Controller
{
    private $validate_model = [
        'nama' => ['required', 'string'],
        'kode' => ['required', 'string'],
        'angkatan_sekarang' => ['required', 'integer'],
        'dibuka' => ['required', 'integer'],
        'deskripsi' => ['nullable', 'string'],
    ];

    private $image_folder = Latsar::image_folder;

    public function index(Request $request)
    {
        if (request()->ajax()) {
            return Latsar::datatable($request);
        }
        $image_folder = $this->image_folder;
        $page_attr = adminBreadcumb(h_prefix());

        $image_folder = $this->image_folder;

        $view = path_view('pages.admin.latsar.latsar');
        $data = compact('page_attr', 'view');
        $data['compact'] = $data;
        return view($view, $data);
    }

    public function insert(Request $request): mixed
    {
        try {
            $request->validate($this->validate_model);

            $model = new Latsar();
            $model->nama = $request->nama;
            $model->kode = $request->kode;
            $model->angkatan_sekarang = $request->angkatan_sekarang;
            $model->dibuka = $request->dibuka;
            $deskripsi = Summernote::insert($request->deskripsi ?? '<p></p>', $this->image_folder);
            $model->deskripsi = $deskripsi->html;
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
            $model = Latsar::findOrFail($request->id);
            $request->validate(array_merge(['id' => [
                'required', 'int',
            ]], $this->validate_model));
            $model->nama = $request->nama;
            $model->kode = $request->kode;
            $model->angkatan_sekarang = $request->angkatan_sekarang;
            $model->dibuka = $request->dibuka;
            $deskripsi = Summernote::update($request->deskripsi, $this->image_folder, '');
            $model->deskripsi = $deskripsi->html;
            $model->save();

            return response()->json();
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function delete(Latsar $model): mixed
    {
        try {
            $model->delete();
            Summernote::delete($model->deskripsi);
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
        return Latsar::findOrFail($request->id);
    }
}
