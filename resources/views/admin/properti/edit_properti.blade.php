@extends('layouts.admin')
@section('main-content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Edit Properti</h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Properti</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('update_properti', $properti->id_properti) }}" method="POST">
                    @csrf
                    <!-- filepath: /D:/sekolah/polije/project/joki/website_kos/resources/views/admin/properti/edit_properti.blade.php -->
                    <!-- filepath: /D:/sekolah/polije/project/joki/website_kos/resources/views/admin/properti/edit_properti.blade.php -->
                    <div class="form-group">
                        <label for="jenis_properti">Jenis Properti</label>
                        <select class="form-control" id="jenis_properti" name="jenis_properti_disabled" required disabled>
                            <option value="">Pilih jenis properti</option>
                            <option value="1" {{ $properti->jenis_properti == 1 ? 'selected' : '' }}>Kamar</option>
                            <option value="2" {{ $properti->jenis_properti == 2 ? 'selected' : '' }}>Rumah</option>
                            <option value="3" {{ $properti->jenis_properti == 3 ? 'selected' : '' }}>Ruko</option>
                        </select>
                        <input type="hidden" name="jenis_properti" value="{{ $properti->jenis_properti }}">
                    </div>
                    <div class="form-group" id="no_kamar_group"
                        style="display: {{ $properti->jenis_properti == 1 ? 'block' : 'none' }}">
                        <label for="no_kamar">No Kamar</label>
                        <input type="text" class="form-control" id="no_kamar" name="no_kamar"
                            value="{{ old('no_kamar', $properti->no_kamar) }}">
                    </div>
                    <div class="form-group">
                        <label for="fasilitas">Fasilitas</label>
                        <textarea class="form-control" id="fasilitas" name="fasilitas" rows="3" required>{{ old('fasilitas', $properti->fasilitas) }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" class="form-control" id="harga" name="harga"
                            value="{{ old('harga', $properti->harga) }}" required>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control" id="status" name="status" required>
                            <option value="">Pilih status</option>
                            <option value="0" {{ $properti->status == 0 ? 'selected' : '' }}>Tersedia</option>
                            <option value="1" {{ $properti->status == 1 ? 'selected' : '' }}>Tidak Tersedia</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="penghuni_id">Penghuni</label>
                        @foreach ($penghuni as $p)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="penghuni_id[]"
                                    value="{{ $p->nik }}" id="penghuni_id[]"
                                    {{ $properti->penghuni->contains($p->nik) ? 'checked' : '' }}>
                                <label class="form-check-label" for="penghuni_{{ $p->nik }}">
                                    {{ $p->nama }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        // function toggleNoKamar() {
        //     var jenisProperti = document.getElementById('jenis_properti').value;
        //     var noKamarGroup = document.getElementById('no_kamar_group');
        //     if (jenisProperti == '1') {
        //         noKamarGroup.style.display = 'block';
        //     } else {
        //         noKamarGroup.style.display = 'none';
        //     }
        // }

        // // Initialize the visibility on page load
        // document.addEventListener('DOMContentLoaded', function() {
        //     toggleNoKamar();
        // });
    </script>
@endsection
