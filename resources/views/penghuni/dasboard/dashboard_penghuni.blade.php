<!-- filepath: /D:/sekolah/polije/project/joki/website_kos/resources/views/penghuni/dashboard/dashboard_penghuni.blade.php -->
@extends('layouts.admin')
@section('main-content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Dashboard Penghuni</h1>

        <!-- Data Diri Penyewa -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Diri Penyewa</h6>
            </div>
            <div class="card-body">
                <p><strong>Nama:</strong> {{ $penghuni->nama }}</p>
                <p><strong>NIK:</strong> {{ $penghuni->nik }}</p>
                <p><strong>Tanggal Masuk:</strong> {{ $penghuni->tgl_masuk }}</p>
                <p><strong>Tanggal Keluar:</strong>{{ $penghuni->tgl_keluar ? $penghuni->tgl_keluar : '-' }}</p>
                <p><strong>No HP:</strong> {{ $penghuni->no_hp }}</p>
            </div>
        </div>

        <!-- Jenis Properti dan No Kamar yang Disewa -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Properti yang Disewa</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jenis Properti</th>
                                <th>No Kamar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listsewaproperti as $index => $item)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>
                                        @if ($item->jenis_properti == '1')
                                            kamar
                                        @endif
                                        @if ($item->jenis_properti == '2')
                                            rumah
                                        @endif
                                        @if ($item->jenis_properti == '3')
                                            ruko
                                        @endif
                                    </td>
                                    <td>{{ $item->no_kamar }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Daftar Pembayaran yang Telah Dilakukan -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Pembayaran</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal Bayar</th>
                                <th>Jumlah</th>
                                <th>Jenis Pembayaran</th>
                                <th>Bukti Pembayaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listpembayaran as $index => $bayar)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $bayar->tgl_bayar }}</td>
                                    <td>{{ $bayar->tagihan }}</td>
                                    <td>
                                        @if ($bayar->jenis_pembayaran == '1')
                                            cash
                                        @endif
                                        @if ($bayar->jenis_pembayaran == '2')
                                            transfer
                                        @endif
                                        @if ($bayar->jenis_pembayaran == '3')
                                            qris
                                        @endif

                                    </td>
                                    <td>
                                        @if ($bayar->bukti_pembayaran)
                                            <img src="{{ asset('img/bukti_pembayaran/' . $bayar->bukti_pembayaran) }}"
                                                alt="Bukti Pembayaran"
                                                style="width: 100px; height: 100px; object-fit: cover; margin-top: 10px;">
                                        @else
                                            Tidak Ada Bukti
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
