<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Artikel\Artikel;
use App\Models\Contact\FAQ;
use App\Models\Galeri;
use App\Models\Home\KataKata;
use App\Models\Home\Pengurus;
use App\Models\Home\ProgramPembelajaran;
use App\Models\Produk\Produk;
use App\Models\Tracker;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(Request $request)
    {
        Tracker::hit();

        $page_attr = [
            'navigation' => 'home',
        ];

        $kata_katas = KataKata::getFeViewData();
        $produks = Produk::getFeHomeData();
        $program_pembelajarans = ProgramPembelajaran::getFeViewData();

        if ($this->checkVisible('artikel')) {
            $articles = Artikel::getHomeViewData();
        } else {
            $articles = [];
        }

        if ($this->checkVisible('galeri')) {
            $galeries = Galeri::getHomeViewData();
        } else {
            $galeries = [];
        }

        if ($this->checkVisible('pengurus')) {
            $penguruses = Pengurus::getHomeViewData();
        } else {
            $penguruses = [];
        }

        $faqs = FAQ::getFeViewData();

        $data = compact(
            'faqs',
            'galeries',
            'articles',
            'page_attr',
            'kata_katas',
            'program_pembelajarans',
            'penguruses',
        );
        $data['compact'] = $data;
        return view('pages.frontend.home', $data);
    }

    private function checkVisible(string $item): ?bool
    {
        return settings()->get("setting.home.$item.visible", false);
    }

    public function fronted2(Request $request)
    {
        return view('layouts.frontend.index');
    }
}
