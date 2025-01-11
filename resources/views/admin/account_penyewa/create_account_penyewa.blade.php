<!-- filepath: /D:/sekolah/polije/project/joki/website_kos/resources/views/admin/account_penyewa/create_account_penyewa.blade.php -->
@extends('layouts.admin')
@section('main-content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Tambah Account </h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Account </h6>
            </div>
            <div class="card-body">
                <form action="{{ route('store_account_penyewa') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="role">Role</label>
                        <select class="form-control" id="role" name="role" required onchange="toggleNIK()">
                            <option value="">Pilih role</option>
                            <option value="1">Admin</option>
                            <option value="2">penghuni</option>
                        </select>
                    </div>
                    <div class="form-group" id="nik_group">
                        <label for="nik">NIK</label>
                        {{-- @php
                            dd($penghuni);
                        @endphp --}}
                        <select class="form-control" id="nik" name="nik">
                            <option value="">Pilih NIK</option>
                            @foreach ($penghuni as $p)
                                <option value="{{ $p->nik }}">{{ $p->nik }} - {{ $p->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function toggleNIK() {
            var role = document.getElementById('role').value;
            var nikGroup = document.getElementById('nik_group');
            if (role === '1') {
                nikGroup.style.display = 'none';
            } else {
                nikGroup.style.display = 'block';
            }
        }

        // Initialize the visibility on page load
        document.addEventListener('DOMContentLoaded', function() {
            toggleNIK();
        });
    </script>
@endsection
