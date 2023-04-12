<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VisiMisiController extends Controller
{

    private $key = 'setting.home.visi_misi';
    private $folder_image = '/assets/setting/home';

    public function index(Request $request)
    {
        $page_attr = [
            'title' => 'Visi Misi',
            'breadcrumbs' => [
                ['name' => 'Dashboard', 'url' => 'admin.dashboard'],
                ['name' => 'Pengaturan'],
            ]
        ];
        $setting = (object)[
            'visible' => settings()->get("$this->key.visible"),
            'title' => settings()->get("$this->key.title"),
            'sub_title' => settings()->get("$this->key.sub_title"),

            'visi_title' => settings()->get("$this->key.visi_title"),
            'visi_image' => settings()->get("$this->key.visi_image"),
            'visi' => settings()->get("$this->key.visi"),

            'misi_title' => settings()->get("$this->key.misi_title"),
            'misi_image' => settings()->get("$this->key.misi_image"),
            'misi' => settings()->get("$this->key.misi"),

        ];

        $view = path_view('pages.admin.setting.visi_misi');
        $data = compact('page_attr', 'setting', 'view');
        $data['compact'] = $data;
        return view($view, $data);
    }

    public function update(Request $request)
    {
        settings()->set("$this->key.visible", $request->visible != null)->save();
        settings()->set("$this->key.title", $request->title)->save();
        settings()->set("$this->key.sub_title", $request->sub_title)->save();
        settings()->set("$this->key.visi", $request->visi)->save();
        settings()->set("$this->key.visi_title", $request->visi_title)->save();
        settings()->set("$this->key.misi", $request->misi)->save();
        settings()->set("$this->key.misi_title", $request->misi_title)->save();

        // image
        $key = 'visi_image';
        $current = settings()->get("$this->key.$key");
        $visi_image = $current;
        if ($image = $request->file($key)) {
            // delete foto
            $folder = $this->folder_image;
            if ($current) {
                $path = public_path("$folder/$current");
                delete_file($path);
            }

            $foto = "$folder/$key." . $image->getClientOriginalExtension();
            $image->move(public_path($folder), $foto);
            $visi_image = $foto;
            // save foto
            settings()->set("$this->key.$key", $foto)->save();
        }

        $key = 'misi_image';
        $current = settings()->get("$this->key.$key");
        $misi_image = $current;
        if ($image = $request->file($key)) {
            // delete foto
            $folder = $this->folder_image;
            if ($current) {
                $path = public_path("$folder/$current");
                delete_file($path);
            }

            $foto = "$folder/$key." . $image->getClientOriginalExtension();
            $image->move(public_path($folder), $foto);
            $misi_image = $foto;
            // save foto
            settings()->set("$this->key.$key", $foto)->save();
        }

        return response()->json(compact('misi_image', 'visi_image'));
    }
}
