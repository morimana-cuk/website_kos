<!-- filepath: /D:/sekolah/polije/project/joki/website_kos/resources/views/penghuni/komplain/create_komplain_penghuni.blade.php -->
@extends('layouts.admin')
@section('main-content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Ajukan Komplain</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Komplain</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('store_komplain_penyewa') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="jenis_properti">Jenis Properti</label>
                    <select class="form-control" id="jenis_properti" name="jenis_properti" required onchange="toggleNoKamar()">
                        <option value="">Pilih jenis properti</option>
                        <option value="1">Kamar</option>
                        <option value="2">Rumah</option>
                        <option value="3">Ruko</option>
                    </select>
                </div>
                <div class="form-group" id="no_kamar_group" style="display: none;">
                    <label for="no_kamar">No Kamar</label>
                    <select class="form-control" id="no_kamar" name="no_kamar">
                        <option value="">Pilih No Kamar</option>
                        @foreach ($properti as $no_kamar)
                            <option value="{{ $no_kamar->no_kamar }}">{{ $no_kamar->no_kamar }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="komplain">Komplain</label>
                    <textarea class="form-control" id="komplain" name="komplain" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Ajukan Komplain</button>
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
