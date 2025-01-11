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
                    <h1 class="h3 mb-0 text-gray-800">Properti</h1>
                    <a href="{{ route('create_properti') }}"
                        class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
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
                                        <th>jenis properti</th>
                                        <th>No kamar</th>
                                        <th>fasilitas</th>
                                        <th>harga</th>
                                        <th>status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($properti as $property)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                @if ($property->jenis_properti == 1)
                                                    Kamar
                                                @endif
                                                @if ($property->jenis_properti == 2)
                                                    Rumah
                                                @endif
                                                @if ($property->jenis_properti == 3)
                                                    Ruko
                                                @endif
                                            </td>
                                            <td>{{ $property->no_kamar }}</td>
                                            <td>{{ $property->fasilitas }}</td>
                                            <td>{{ $property->harga }}</td>
                                            <td>
                                                @if ($property->status == 0)
                                                    tersedia
                                                @endif
                                                @if ($property->status == 1)
                                                    tidak tersedia
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('edit_properti', $property->id_properti) }}" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="{{ route('delete_properti', $property->id_properti) }}" class="btn btn-danger btn-sm">Delete</a>
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
