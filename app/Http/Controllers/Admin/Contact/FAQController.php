<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Http\Controllers\Controller;
use App\Models\Contact\FAQ;
use Illuminate\Http\Request;
use League\Config\Exception\ValidationException;

class FAQController extends Controller
{
    private $validate_model = [
        'nama' => ['required', 'string', 'max:255'],
        'link' => ['nullable', 'string', 'max:255'],
        'jawaban' => ['nullable', 'string'],
        'type' => ['required', 'int'],
        'status' => ['required', 'int'],
    ];

    public function index(Request $request)
    {
        if (request()->ajax()) {
            return FAQ::datatable($request);
        }
        $page_attr = [
            'title' => 'Frequently Asked Questions',
            'breadcrumbs' => [
                ['name' => 'Dashboard', 'url' => 'admin.dashboard'],
                ['name' => 'Halaman Utama'],
            ]
        ];
        $setting = (object)[
            'title' => settings()->get('setting.contact.faq.title'),
            'sub_title' => settings()->get('setting.contact.faq.sub_title'),
            'description' => settings()->get('setting.contact.faq.description'),
            'visible' => settings()->get('setting.contact.faq.visible'),
        ];

        $view = path_view('pages.admin.kontak.faq');
        $data = compact('page_attr', 'setting', 'view');
        $data['compact'] = $data;
        return view($view, $data);
    }

    public function insert(Request $request): mixed
    {
        try {
            $request->validate($this->validate_model);

            $model = new FAQ();
            $model->nama = $request->nama;
            $model->link = $request->link;
            $model->jawaban = $request->jawaban;
            $model->type = $request->type;
            $model->status = $request->status;
            $model->save();

            FAQ::feClearCache();

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
            $model = FAQ::findOrFail($request->id);
            $model->nama = $request->nama;
            $model->link = $request->link;
            $model->jawaban = $request->jawaban;
            $model->type = $request->type;
            $model->status = $request->status;
            $model->save();

            FAQ::feClearCache();

            return response()->json();
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function delete(FAQ $model): mixed
    {
        try {
            $model->delete();

            FAQ::feClearCache();

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
        return FAQ::findOrFail($request->id);
    }

    public function setting(Request $request)
    {
        settings()->set('setting.contact.faq.visible', $request->visible !== null)->save();
        settings()->set('setting.contact.faq.title', $request->title)->save();
        settings()->set('setting.contact.faq.sub_title', $request->sub_title)->save();
        settings()->set('setting.contact.faq.description', $request->description)->save();
        return response()->json();
    }
}
