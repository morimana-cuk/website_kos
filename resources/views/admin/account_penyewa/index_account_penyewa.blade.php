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
                    <h1 class="h3 mb-0 text-gray-800">account  </h1>
                    <a href="{{ route('create_account_penyewa') }}"
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
                                        <th>id account</th>
                                        <th>username</th>
                                        <th>nik</th>
                                        <th>role</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($DataAccount as $account)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                {{ $account->id_account }}
                                            </td>
                                            <td>{{ $account->username }}</td>
                                            <td>{{ $account->nik }}</td>
                                            <td>
                                                @if ($account->role == 1)
                                                    Admin

                                                @endif
                                                @if ($account->role == 2)
                                                    penghuni
                                                @endif
                                            <td>
                                                {{-- <a href="{{ route('edit_account_penyewa', $account->id_account) }}" class="btn btn-primary btn-sm">Edit</a> --}}
                                                <a href="{{ route('delete_account_penyewa', $account->id_account) }}" class="btn btn-danger btn-sm">Delete</a>
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
