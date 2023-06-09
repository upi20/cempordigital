<?php

namespace App\Http\Controllers\Admin\Latsar;

use App\Http\Controllers\Controller;
use App\Models\Peserta;
use Illuminate\Http\Request;
use League\Config\Exception\ValidationException;

class PendaftaranController extends Controller
{
    private $validate_model = [
        'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        'nama' => ['required', 'string'],
        'status' => ['required', 'integer'],
    ];

    private $image_folder = Peserta::image_folder;

    public function index(Request $request)
    {
        if (request()->ajax()) {
            return Peserta::datatable($request);
        }
        $image_folder = $this->image_folder;
        $page_attr = adminBreadcumb(h_prefix());

        $image_folder = $this->image_folder;

        $view = path_view('pages.admin.peserta');
        $data = compact('page_attr', 'image_folder', 'view');
        $data['compact'] = $data;
        return view($view, $data);
    }

    public function insert(Request $request): mixed
    {
        try {
            $request->validate($this->validate_model);

            $model = new Peserta();
            $foto = '';
            if ($image = $request->file('foto')) {
                $foto = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move(public_path($this->image_folder), $foto);
            }

            $model->foto = $foto;
            $model->nama = $request->nama;
            $model->status = $request->status;
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
            $model = Peserta::findOrFail($request->id);
            $request->validate(array_merge(['id' => [
                'required', 'int',
            ]], $this->validate_model));

            // foto handle
            $foto = '';
            if ($image = $request->file('foto')) {
                $foto = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move(public_path($this->image_folder), $foto);

                // delete foto
                if ($model->foto) {
                    $path = public_path("$this->image_folder/$model->foto");
                    delete_file($path);
                }
                // save foto
                $model->foto = $foto;
            }

            $model->nama = $request->nama;
            $model->status = $request->status;
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
            // delete foto
            if ($model->foto) {
                $path = public_path("$this->image_folder/$model->foto");
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
}
