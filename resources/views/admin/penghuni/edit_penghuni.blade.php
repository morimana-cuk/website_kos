<!-- filepath: /d:/sekolah/polije/project/joki/website_kos/resources/views/admin/penghuni/edit_penghuni.blade.php -->
@extends('layouts.admin')

@section('main-content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Edit Penghuni</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Penghuni</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('update_penghuni', $penghuni->nik) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="text" class="form-control" id="nik" name="nik" value="{{ old('nik', $penghuni->nik) }}" readonly>
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $penghuni->nama) }}" required>
                </div>
                <div class="form-group">
                    <label for="tgl_masuk">Tanggal Masuk</label>
                    <input type="date" class="form-control" id="tgl_masuk" name="tgl_masuk" value="{{ old('tgl_masuk', $penghuni->tgl_masuk) }}" required>
                </div>
                <div class="form-group">
                    <label for="tgl_keluar">Tanggal Keluar</label>
                    <input type="date" class="form-control" id="tgl_keluar" name="tgl_keluar" value="{{ old('tgl_keluar', $penghuni->tgl_keluar) }}">
                </div>
                <div class="form-group">
                    <label for="no_hp">No HP</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ old('no_hp', $penghuni->no_hp) }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
