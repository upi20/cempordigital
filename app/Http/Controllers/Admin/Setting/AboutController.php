<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Helpers\Summernote;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $page_attr = [
            'title' => 'Tentang',
            'breadcrumbs' => [
                ['name' => 'Dashboard', 'url' => 'admin.dashboard'],
            ]
        ];

        $view = path_view('pages.admin.setting.about');
        $data = compact('page_attr', 'view');
        $data['compact'] = $data;
        return view($view, $data);
    }

    public function update(Request $request)
    {
        $detail = Summernote::update($request->about, '/assets/about', '');
        settings()->set('about.html', $detail->html)->save();
        settings()->set('about.judul', $request->judul)->save();
        return response()->json();
    }
}
