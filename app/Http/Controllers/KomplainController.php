<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KomplainController extends Controller
{
    //
    public function index()
    {
        return view('admin.komplain.index_komplain');
    }
}
