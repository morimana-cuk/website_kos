<?php

namespace App\Http\Controllers\penghuni;

use App\Http\Controllers\Controller;
use App\Models\keuangan;
use App\Models\properti;
use Illuminate\Http\Request;

use function Laravel\Prompts\error;

class KeuanganPenhuniController extends Controller
{
    //
    public function index()
    {
        $ModeKeuangan = new keuangan();
        $keuangan = $ModeKeuangan->keuangan(session('nik'));
        return view('penghuni.pembayaran.index_pembayaran_penghuni', compact('keuangan'));
    }

    public function create()
    {
        $properti = properti::all();
        return view('penghuni.pembayaran.create_pembayaran_penghuni', compact('properti'));
    }

    public function store(Request $request)
    {
        //
            try {
                //code...
                $request->validate([
                    'jenis_properti' => 'required',
                    'no_kamar' => 'nullable',
                    'jenis_pembayaran' => 'required',
                    'tagihan' => 'required',
                    'bukti_pembayaran' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $bukti_pembayaran = $request->file('bukti_pembayaran');
                $bukti_pembayaran_name = time() . '.' . $bukti_pembayaran->getClientOriginalExtension();
                $bukti_pembayaran->move(public_path('img/bukti_pembayaran'), $bukti_pembayaran_name);

                keuangan::create([
                    'jenis_properti' => $request['jenis_properti'],
                    'no_kamar' => $request['no_kamar'],
                    'jenis_pembayaran' => $request['jenis_pembayaran'],
                    'bukti_pembayaran' => $bukti_pembayaran_name,
                    'nik' => session('nik'),
                    'tgl_bayar' => now(),
                    'tagihan' => $request['tagihan']
                ]);
                return redirect()->route('index_keuangan_penyewa')->with('success', 'Pembayaran berhasil');
            } catch (\Throwable $th) {
                //throw $th;
                // return error($th->getMessage());
                return redirect()->back()->with('error', $th->getMessage());
            }



    }
}
