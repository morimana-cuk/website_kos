<!-- filepath: /D:/sekolah/polije/project/joki/website_kos/resources/views/penghuni/pembayaran/create_pembayaran_penghuni.blade.php -->
@extends('layouts.admin')
@section('main-content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Pembayaran</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Pembayaran</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('store_keuangan_peyewa') }}" method="POST" enctype="multipart/form-data">
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
                    <label for="tagihan">Tagihan</label>
                    <input type="text" class="form-control" id="tagihan" name="tagihan" required>
                </div>
                <div class="form-group">
                    <label for="jenis_pembayaran">Jenis Pembayaran</label>
                    <select class="form-control" id="jenis_pembayaran" name="jenis_pembayaran" required>
                        <option value="">Pilih jenis pembayaran</option>
                        <option value="1">cash</option>
                        <option value="2">transfer</option>
                        <option value="3">qris</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="bukti_pembayaran">Bukti Pembayaran</label>
                    <input type="file" class="form-control-file" id="bukti_pembayaran" name="bukti_pembayaran" accept="image/*" onchange="previewImage(event)">
                    <img id="preview" src="#" alt="Preview Gambar" style="display: none; max-width: 200px; margin-top: 10px;">
                </div>
                <button type="submit" class="btn btn-primary">Submit Pembayaran</button>
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

    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('preview');
            output.src = reader.result;
            output.style.display = 'block';
        };
        reader.readAsDataURL(event.target.files[0]);
    }

    // Initialize the visibility on page load
    document.addEventListener('DOMContentLoaded', function() {
        toggleNoKamar();
    });
</script>
@endsection
