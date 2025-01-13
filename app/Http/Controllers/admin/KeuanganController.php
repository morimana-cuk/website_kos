<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\keuangan;

class KeuanganController extends Controller
{
    //
    public function index()
    {
        $ModelKeuangan = new keuangan();
        $keuangan = $ModelKeuangan->keuanganAll();
        return view('admin.keuangan.index_keuangan', compact('keuangan'));
    }

    public function edit($id){
        $ModelKeuangan = new keuangan();
        $keuangan = $ModelKeuangan->keuanganById($id);
        return view('admin.keuangan.edit_keuangan', compact('keuangan'));
    }

    public function update(Request $request, $id){
        try {
            $validated = $request->validate([
                'status' => 'string',
            ]);
            $ModelKeuangan = new keuangan();
            $ModelKeuangan->where('id_keuangan', $id)->update($validated);
            return redirect()->route('index_keuangan');
        } catch (\Throwable $th) {
            // return error($th->getMessage());
            // throw $th;
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
