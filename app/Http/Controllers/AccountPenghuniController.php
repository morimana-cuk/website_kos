<?php

namespace App\Http\Controllers;

use App\Models\account;
use App\Models\penghuni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountPenghuniController extends Controller
{
    //
    public function index()
    {
        $DataAccount = account::all();
        return view('admin.account_penyewa.index_account_penyewa', compact('DataAccount'));
    }

    public function create()
    {
        // $ModelPenghuni = new penghuni();
        // $penghuni = $ModelPenghuni->GetPenghuni();

        $penghuni = penghuni::all();
        // dd($penghuni);

        return view('admin.account_penyewa.create_account_penyewa', compact('penghuni'));
    }

    public function store(Request $request){
        try {
            $validated = $request->validate([
                'username' => 'required|string',
                'password' => 'required|string',
                'role' => 'required|int',
                'nik' => 'nullable|int',
            ]);
            // dd($validated);

            account::create([
                'username' => $validated['username'],
                'password' => Hash::make($validated['password']),
                'role' => $validated['role'],
                'nik' => $validated['nik'],
            ]);

            return redirect()->route('index_account_penyewa');
        } catch (\Throwable $th) {
            // return error($th->getMessage());
            // throw $th;
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function destroy($id)
    {
        account::destroy($id);
        return redirect()->route('index_account_penyewa');
    }
}
