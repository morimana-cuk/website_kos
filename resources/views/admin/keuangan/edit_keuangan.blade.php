<!-- filepath: /D:/sekolah/polije/project/joki/website_kos/resources/views/admin/keuangan/edit_keuangan.blade.php -->
@extends('layouts.admin')
@section('main-content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Edit Keuangan</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Edit Keuangan</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('update_keuangan', $keuangan->id_keuangan) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $keuangan->nama }}" readonly>
                </div>
                <div class="form-group">
                    <label for="jenis_properti">Jenis Properti</label>
                    <input type="text" class="form-control" id="jenis_properti" name="jenis_properti" value="@if ($keuangan->jenis_properti == 1) Kamar @endif
                                                @if ($keuangan->jenis_properti == 2) Rumah @endif
                                                @if ($keuangan->jenis_properti == 3) Ruko @endif"" readonly>
                </div>
                <div class="form-group">
                    <label for="no_kamar">No Kamar</label>
                    <input type="text" class="form-control" id="no_kamar" name="no_kamar" value="{{ $keuangan->no_kamar }}" readonly>
                </div>
                <div class="form-group">
                    <label for="tagihan">Tagihan</label>
                    <input type="text" class="form-control" id="tagihan" name="tagihan" value="{{ $keuangan->tagihan }}" readonly>
                </div>
                <div class="form-group">
                    <label for="tgl_bayar">Tgl Bayar</label>
                    <input type="text" class="form-control" id="tgl_bayar" name="tgl_bayar" value="{{ $keuangan->tgl_bayar }}" readonly>
                </div>
                <div class="form-group">
                    <label for="bukti_pembayaran">Bukti Pembayaran</label>
                    <a href="{{ asset('img/bukti_pembayaran/' . $keuangan->bukti_pembayaran) }}" target="_blank">
                        <img src="{{ asset('img/bukti_pembayaran/' . $keuangan->bukti_pembayaran) }}" alt="Bukti Pembayaran" style="max-width: 200px; margin-top: 10px;">
                    </a>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" name="status">
                        <option value="0" {{ $keuangan->status == '0' ? 'selected' : '' }}>belum terverifikasi</option>
                        <option value="1" {{ $keuangan->status == '1' ? 'selected' : '' }}>terverifikasi</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update Keuangan</button>
            </form>
        </div>
    </div>
</div>
@endsection
