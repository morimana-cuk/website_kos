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
                    <h1 class="h3 mb-0 text-gray-800">Penghuni</h1>
                    <a href="{{ route('create_penghuni') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-plus fa-sm text-white-50"></i> Tambah</a>
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
                                        <th>tgl masuk</th>
                                        <th>tgl keluar</th>
                                        <th>no telp</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($penghuni as $p)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $p->nama }}</td>
                                            <td>
                                                @if ($p->jenis_properti == 1)
                                                    Kamar
                                                @endif
                                                @if ($p->jenis_properti == 2)
                                                    Rumah
                                                @endif
                                                @if ($p->jenis_properti == 3)
                                                    Ruko
                                                @endif
                                            </td>
                                            <td>{{ $p->no_kamar }}</td>
                                            <td>{{ $p->tgl_masuk }}</td>
                                            <td>{{ $p->tgl_keluar }}</td>
                                            <td>{{ $p->no_hp }}</td>
                                            <td>
                                                <a href="{{ route('edit_penghuni', $p->nik) }}" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="{{ route('delete_penghuni', $p->nik) }}" class="btn btn-danger btn-sm">Delete</a>
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
