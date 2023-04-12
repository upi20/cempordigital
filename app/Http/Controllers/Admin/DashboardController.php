<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artikel\Artikel;
use App\Models\Contact\Message as ContactMessage;
use App\Models\Pendaftaran;
use App\Models\Tracker;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $total_artikel = Artikel::count();
        $total_pesan = ContactMessage::count();
        $total_pendaftar = Pendaftaran::count();
        $page_attr = ['title' => 'Dashboard'];


        $view = path_view('pages.admin.dashboard');
        $data = compact(
            'total_artikel',
            'total_pesan',
            'total_pendaftar',
            'page_attr',
            'view',
        );
        $data['compact'] = $data;
        return view($view, $data);
    }

    public function vistor_counter(Request $request)
    {
        $start = $request->start;
        $end = $request->end;
        $get = Tracker::selectRaw("sum(hits) as value, date as title")
            ->whereBetween('date', [$start, $end])
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        return $get;
    }
}
