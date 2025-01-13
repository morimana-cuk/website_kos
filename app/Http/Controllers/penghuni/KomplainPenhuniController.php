<?php

namespace App\Http\Controllers\penghuni;

use App\Http\Controllers\Controller;
use App\Models\komplain;
use App\Models\properti;
use Illuminate\Http\Request;

use function Laravel\Prompts\error;

class KomplainPenhuniController extends Controller
{
    //
    public function index()
    {
        // $komplain = komplain::where('nik', session('nik'))->get();
        $ModelKomplain = new komplain();
        $komplain = $ModelKomplain->komplain(session('nik'));
        return view('penghuni.komplain.index_komplain_penghuni', compact('komplain'));
    }

    public function create()
    {
        $properti= properti::all();
        return view('penghuni.komplain.create_komplain_penghuni', compact('properti'));
    }

    public function store(Request $request)
    {
        try {
            //code...
            $validated = $request->validate([
                'jenis_properti' => 'required',
                'no_kamar' => 'nullable',
                'komplain' => 'required',
            ]);

            // dd(session()->all());
            komplain::create([
                'jenis_properti' => $validated['jenis_properti'],
                'no_kamar' => $validated['no_kamar'],
                'komplain' => $validated['komplain'],
                'nik' => session('nik'),
                'tgl_komplain'=>now()
            ]);

            return redirect()->route('index_komplain_penyewa');
        } catch (\Throwable $th) {
            //throw $th;
            return error($th->getMessage());
            return redirect()->back()->with('error', $th->getMessage());
        }

    }
}
