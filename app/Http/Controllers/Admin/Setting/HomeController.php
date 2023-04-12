<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $folder_image = '/assets/setting/home';
    private $setting_prefix = 'setting.home';
    private $pre = '';

    public function index()
    {
        $page_attr = [
            'title' => 'Halaman Depan',
            'breadcrumbs' => [
                ['name' => 'Dashboard', 'url' => 'admin.dashboard'],
                ['name' => 'Halaman Utama'],
            ]
        ];
        $pre = $this->setting_prefix;
        $s = function (string $str) use ($pre): string {
            return "$pre.$str";
        };

        $view = path_view('pages.admin.setting.home');
        $data = compact('page_attr', 'view', 's');
        $data['compact'] = $data;
        return view($view, $data);
    }

    public function hero(Request $request)
    {
        $this->pre = 'hero';
        settings()->set($this->s('visible'), $request->visible != null)->save();
        settings()->set($this->s('deskripsi'), $request->deskripsi)->save();
        settings()->set($this->s('tombol_title'), $request->tombol_title)->save();
        settings()->set($this->s('tombol_link'), $request->tombol_link)->save();
        settings()->set($this->s('judul'), $request->judul)->save();
        settings()->set($this->s('sub_judul'), $request->sub_judul)->save();

        // image
        $key = 'foto';
        $current = settings()->get($this->s($key));
        $foto = $current;
        if ($image = $request->file($key)) {
            // delete foto
            $folder = $this->folder_image;
            if ($current) {
                $path = public_path("$folder/$current");
                delete_file($path);
            }

            $foto = "$folder/hero" . date("Ymdhis") . "." . $image->getClientOriginalExtension();
            $image->move(public_path($folder), $foto);

            // save foto
            settings()->set($this->s($key), $foto)->save();
        }
        return response()->json();
    }

    public function galeri(Request $request)
    {
        $this->pre = 'galeri';
        settings()->set($this->s('visible'), $request->visible != null)->save();
        settings()->set($this->s('title'), $request->title)->save();
        settings()->set($this->s('sub_title'), $request->sub_title)->save();
        return response()->json();
    }

    public function artikel(Request $request)
    {
        $this->pre = 'artikel';
        settings()->set($this->s('visible'), $request->visible != null)->save();
        settings()->set($this->s('title'), $request->title)->save();
        settings()->set($this->s('sub_title'), $request->sub_title)->save();
        return response()->json();
    }

    // dsave prefix
    private function s(string $str): string
    {
        return "$this->setting_prefix.$this->pre.$str";
    }
}
