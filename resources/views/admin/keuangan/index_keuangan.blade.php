@extends('layouts.admin')
@section('main-content')
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->

            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">keuangan</h1>

                </div>

                <!-- Content Row -->
                <div class="row">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>nama</th>
                                        <th>jenis properti</th>
                                        <th>No kamar</th>
                                        <th>tagihan</th>
                                        <th>tgl bayar</th>
                                        <th>status</th>
                                        <th>aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($keuangan as $k)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $k->nama }}</td>
                                            <td>
                                                @if ($k->jenis_properti == 1)
                                                    Kamar
                                                @endif
                                                @if ($k->jenis_properti == 2)
                                                    Rumah
                                                @endif
                                                @if ($k->jenis_properti == 3)
                                                    Ruko
                                                @endif
                                            </td>
                                            <td>{{ $k->no_kamar }}</td>
                                            <td>{{ $k->tagihan }}</td>
                                            <td>{{ $k->tgl_bayar }}</td>
                                            <td>
                                                @if ($k->status == 0)
                                                    belum terverifikasi
                                                @endif
                                                @if ($k->status == 1)
                                                    terverifikasi
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('edit_keuangan', $k->id_keuangan) }}"
                                                    class="btn btn-warning">Edit</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

                <!-- Content Row -->

                <div class="row">


                </div>

                <!-- Content Row -->
                <div class="row">


                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->

        <!-- End of Footer -->

    </div>
@endsection
