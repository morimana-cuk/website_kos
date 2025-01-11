@extends('layouts.admin')
@section('main-content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Tambah Properti</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Properti</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('store_properti') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="jenis_properti">Jenis Properti</label>
                    <select class="form-control" id="jenis_properti" name="jenis_properti" required onchange="toggleNoKamar()">
                        <option value="">pilih jenis properti</option>
                        <option value="1">Kamar</option>
                        <option value="2">Rumah</option>
                        <option value="3">Ruko</option>
                    </select>
                </div>
                <div class="form-group" id="no_kamar_group">
                    <label for="no_kamar">No Kamar</label>
                    <input type="text" class="form-control" id="no_kamar" name="no_kamar">
                </div>
                <div class="form-group">
                    <label for="fasilitas">Fasilitas</label>
                    <textarea class="form-control" id="fasilitas" name="fasilitas" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" class="form-control" id="harga" name="harga" placeholder="cukup inputkan angka nya saja" required>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" name="status" required>
                        <option value="">pilih status</option>
                        <option value="0">Tersedia</option>
                        <option value="1">Tidak Tersedia</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</div>

<script>
    function toggleNoKamar() {
        var jenisProperti = document.getElementById('jenis_properti').value;
        var noKamarGroup = document.getElementById('no_kamar_group');
        if (jenisProperti == '1') {
            noKamarGroup.style.display = 'block';
        } else {
            noKamarGroup.style.display = 'none';
        }
    }

    // Initialize the visibility on page load
    document.addEventListener('DOMContentLoaded', function() {
        toggleNoKamar();
    });
</script>
@endsection
