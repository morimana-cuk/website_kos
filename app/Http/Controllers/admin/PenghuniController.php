<?php

namespace App\Http\Controllers\admin;

use App\Models\penghuni;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use function Laravel\Prompts\error;

class PenghuniController extends Controller
{
    //
    public function index()
    {
        $ModelPenghuni = new penghuni();
        $penghuni = $ModelPenghuni->GetPenghuni();
        return view('admin.penghuni.index_penghuni', compact('penghuni'));
    }

    public function create()
    {
        return view('admin.penghuni.create_penghuni');
    }

    public function store(Request $request){
        try {
            $validated = $request->validate([
                'nik' => 'required|int',
                'nama' => 'required|string',
                'tgl_masuk' => 'required|date',
                'no_hp' => 'required|string',
            ]);
            // dd($validated);
            $ModelPenghuni = new penghuni();
            $ModelPenghuni->fill($validated);
            $ModelPenghuni->save();

            return redirect()->route('index_penghuni');
        } catch (\Throwable $th) {
            // return error($th->getMessage());
            // throw $th;
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function edit($id)
    {
        // $penghuni = penghuni::find($id);
        $ModelPenghuni = new penghuni();
        $penghuni = $ModelPenghuni->GetPenghuniBYNIK($id);
        // dd($penghuni);
        return view('admin.penghuni.edit_penghuni', compact('penghuni'));
    }

    public function update(Request $request, $id)
    {
        try {
            $validated = $request->validate([
                'nik' => 'required|int',
                'nama' => 'required|string',
                'tgl_masuk' => 'required|date',
                'tgl_keluar' => 'nullable|date',
                'no_hp' => 'required|string',
            ]);
            // dd($validated);
            $ModelPenghuni = new penghuni();
            $ModelPenghuni->where('nik', $id)->update($validated);

            return redirect()->route('index_penghuni');
        } catch (\Throwable $th) {
            // return error($th->getMessage());
            // throw $th;
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $ModelPenghuni = new penghuni();
            $ModelPenghuni->where('nik', $id)->delete();

            return redirect()->route('index_penghuni');
        } catch (\Throwable $th) {
            // return error($th->getMessage());
            // throw $th;
            return redirect()->back()->with('error', $th->getMessage());
        }
    }


}
