<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeuanganController extends Controller
{
    //
    public function index()
    {
        return view('admin.keuangan.index_keuangan');
    }
}
