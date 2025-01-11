<!-- filepath: /D:/sekolah/polije/project/joki/website_kos/resources/views/admin/penghuni/create_penghuni.blade.php -->
@extends('layouts.admin')
@section('main-content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Tambah Penghuni</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Penghuni</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('store_penghuni') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="text" class="form-control" id="nik" name="nik" required>
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="form-group">
                    <label for="tgl_masuk">Tanggal Masuk</label>
                    <input type="date" class="form-control" id="tgl_masuk" name="tgl_masuk" required>
                </div>
                <div class="form-group">
                    <label for="no_hp">No HP</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</div>
@endsection
