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
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach($properties as $property)
                                        <tr>
                                            <td>{{ $property->id }}</td>
                                            <td>{{ $property->name }}</td>
                                            <td>{{ $property->location }}</td>
                                            <td>{{ $property->price }}</td>
                                            <td>
                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach --}}
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
