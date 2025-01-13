<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\komplain;

class KomplainController extends Controller
{
    //
    public function index()
    {
        $ModelKomplain = new komplain();
        $komplain = $ModelKomplain->komplainAll();
        return view('admin.komplain.index_komplain', compact('komplain'));
    }

    public function edit($id){
        $ModelKomplain = new komplain();
        $komplain = $ModelKomplain->komplainById($id);
        return view('admin.komplain.edit_komplain', compact('komplain'));
    }
    public function update(Request $request, $id){
        try {
            $validated = $request->validate([
                'status' => 'string',
            ]);
            $ModelKomplain = new komplain();
            $ModelKomplain->where('id_komplain', $id)->update($validated);
            return redirect()->route('index_komplain');
        } catch (\Throwable $th) {
            // return error($th->getMessage());
            // throw $th;
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
