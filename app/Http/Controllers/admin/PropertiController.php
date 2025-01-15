<?php

namespace App\Http\Controllers\admin;

use App\Models\penghuni;
use App\Models\properti;
use App\Models\sewa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


use function Laravel\Prompts\error;

class PropertiController extends Controller
{
    //

    public function index()
    {
        $properti = properti::all();
        return view('admin.properti.index_properti', compact('properti'));
    }


    public function create()
    {
        return view('admin.properti.create_properti');
    }

    public function store(Request $request)
    {
        try {
            //code...

            $validated = $request->validate([
                'jenis_properti' => 'required|int|max:255',
                'no_kamar' => 'nullable|string',
                'fasilitas' => 'required|string',
                'harga' => 'required|numeric',
                'status' => 'required|string',
            ]);
            $properti = new properti();
            $properti->fill($validated);
            $properti->save();

            return redirect()->route('index_properti');
        } catch (\Throwable $th) {
            throw $th;
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
    public function edit($id)
    {
        $properti = properti::find($id);
        $penghuni = penghuni::all();
        // $sewa = sewa::all();

        // dd($properti, $penghuni);
        return view('admin.properti.edit_properti', compact('properti', 'penghuni'));
    }
    public function update(Request $request, $id)
    {
        try {
            //code...
            $validated = $request->validate([
                'jenis_properti' => 'required|int|max:255',
                'no_kamar' => 'nullable|string',
                'fasilitas' => 'required|string',
                'harga' => 'required|numeric',
                'status' => 'required|string',
            ]);
            $properti = properti::find($id);
            $properti->fill($validated);
            $properti->save();

            $penghuni = $request->input('penghuni_id',[]);
            DB::table('sewa')->where('id_properti', $properti->id_properti)->delete();

            foreach ($penghuni as $penghuni) {
                $DataPenghuni = [
                    'id_properti' => $properti->id_properti,
                    'id_penghuni' => $penghuni,
                ];
                $sewa = new sewa();
                $sewa->fill($DataPenghuni);
                $sewa->save();
            }

            return redirect()->route('index_properti');
        } catch (\Throwable $th) {
            //throw $th;
            return error($th->getMessage());
            return redirect()->back()->with('error', $th->getMessage());
        }

    }
    public function destroy($id)
    {
        $properti = properti::find($id);
        $sewa = sewa::where('id_properti', $properti->id_properti)->update(['id_penghuni' => null]);
        $properti->delete();
        return redirect()->route('index_properti');
    }
}
