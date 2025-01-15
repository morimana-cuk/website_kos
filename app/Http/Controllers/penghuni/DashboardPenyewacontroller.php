<?php

namespace App\Http\Controllers\penghuni;

use App\Http\Controllers\Controller;
use App\Models\keuangan;
use App\Models\penghuni;
use App\Models\properti;
use Illuminate\Http\Request;

class DashboardPenyewacontroller extends Controller
{
    //
    public function index()
    {

            $ModePenghuni = new penghuni();
            $ModelProperti = new properti();
            $penghuni = $ModePenghuni->where('nik',session('nik'))->first();
            $listsewaproperti = $ModelProperti->ListSewaPropertiBYNik(session('nik'));
            $ModelKeuangan = new keuangan();
            $listpembayaran = $ModelKeuangan->where('nik',session('nik'))->get();
            // dd($listpembayaran);

        return view('penghuni.dasboard.dashboard_penghuni', compact('penghuni','listsewaproperti','listpembayaran'));
    }
}
