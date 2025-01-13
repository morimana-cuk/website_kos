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
                    <h1 class="h3 mb-0 text-gray-800">komplain</h1>
                    <a href="{{ route('create_komplain_penyewa') }}"
                        class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-plus fa-sm text-white-50"></i> ajukan komplain</a>
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
                                        <th>properti</th>
                                        <th>No kamar</th>
                                        <th>tgl komplain</th>
                                        <th>komplain</th>
                                        <th>status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($komplain as $k)
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
                                            <td>{{ $k->tgl_komplain }}</td>
                                            <td>{{ $k->komplain }}</td>
                                            <td>
                                                @if ($k->status == 0)
                                                    belum diproses
                                                @endif
                                                @if ($k->status == 1)
                                                    sudah diproses
                                                @endif
                                            </td>
                                            {{-- <td>
                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                            </td> --}}
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
