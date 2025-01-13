<!-- filepath: /D:/sekolah/polije/project/joki/website_kos/resources/views/admin/komplain/edit_komplain.blade.php -->
@extends('layouts.admin')
@section('main-content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Edit Komplain</h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Form Edit Komplain</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('update_komplain', $komplain->id_komplain) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama"
                            value="{{ $komplain->nama }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="jenis_properti">Jenis Properti</label>
                        <input type="text" class="form-control" id="jenis_properti" name="jenis_properti"
                            value=" @if ($komplain->jenis_properti == 1) Kamar @endif
                                                @if ($komplain->jenis_properti == 2) Rumah @endif
                                                @if ($komplain->jenis_properti == 3) Ruko @endif"
                            readonly>
                    </div>
                    <div class="form-group">
                        <label for="no_kamar">No Kamar</label>
                        <input type="text" class="form-control" id="no_kamar" name="no_kamar"
                            value="{{ $komplain->no_kamar }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="tgl_komplain">Tgl Komplain</label>
                        <input type="text" class="form-control" id="tgl_komplain" name="tgl_komplain"
                            value="{{ $komplain->tgl_komplain }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="komplain">Komplain</label>
                        <textarea class="form-control" id="komplain" name="komplain" rows="4" readonly>{{ $komplain->komplain }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control" id="status" name="status">
                            <option value="0" {{ $komplain->status == '0' ? 'selected' : '' }}>Belum Diproses</option>
                            <option value="1" {{ $komplain->status == '1' ? 'selected' : '' }}>Sudah Diproses</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Komplain</button>
                </form>
            </div>
        </div>
    </div>
@endsection
