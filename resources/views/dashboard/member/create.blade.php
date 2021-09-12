@extends('dashboard.layouts.main')
@section('title', 'Tambah Anggota')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Anggota</h1>
    <a href="{{ route('member.index') }}" class="btn btn-outline-primary">Batal</a>
</div>

<div class="col-lg-8">
    <form action="{{ route('member.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nisn" class="form-label">NISN</label>
            <input type="text" name="nisn" class="form-control @error('nisn') is-invalid @enderror" id="nisn" value="{{ old('nisn') }}" required>
            @error('nisn')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}" required>
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="kelas" class="form-label">Kelas</label>
            <input type="text" name="kelas" class="form-control @error('kelas') is-invalid @enderror" id="kelas" value="{{ old('kelas') }}" required>
            @error('kelas')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan</label>
            <select class="form-select" name="jabatan">
                <option selected value="anggota biasa">Pilih Jabatan yang di Pikul anggota</option>
                <option value="ketua" class=" text-capitalize">ketua</option>
                <option value="wakil ketua" class=" text-capitalize">wakil ketua</option>
                <option value="sekretaris" class=" text-capitalize">sekretaris</option>
                <option value="bendahara" class=" text-capitalize">bendahara</option>
                <option value="kesenian" class=" text-capitalize">kesenian</option>
                <option value="budi pekerti" class=" text-capitalize">budi pekerti</option>
                <option value="kebersihan" class=" text-capitalize">kebersihan</option>
                <option value="politik" class=" text-capitalize">politik</option>
                <option value="bela negara" class=" text-capitalize">bela negara</option>
                <option value="dokumentasi" class=" text-capitalize">dokumentasi</option>
                <option value="peralatan" class=" text-capitalize">peralatan</option>
                <option value="kewirausahaan" class=" text-capitalize">kewirausahaan</option>
            </select>
            <div id="jabatan" class="form-text">Jika tidak dipilih maka anggota biasa</div>
        </div>
        <div class="mb-3">
            <label for="formFileMultiple" class="form-label">Foto Anggota</label>
            <input class="form-control @error('foto') is-invalid @enderror" name="foto" type="file" id="formFileMultiple" multiple>
            @error('foto')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>
@endsection