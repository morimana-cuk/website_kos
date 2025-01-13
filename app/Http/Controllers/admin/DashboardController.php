<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\keuangan;
use App\Models\komplain;
use App\Models\penghuni;

class DashboardController extends Controller
{
    //

    public function index()
    {
        $TotalPendapatan = keuangan::where('status', '1')->sum('tagihan');
        $JumlahPenghuni = penghuni::count();
        $JumlahKomplain = komplain::where('status', '0')->count();
        $labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July'];
        return view('admin.dashboard.beranda', compact('TotalPendapatan', 'JumlahPenghuni', 'JumlahKomplain', 'labels'));
    }
}
