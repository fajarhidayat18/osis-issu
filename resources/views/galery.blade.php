@extends('layouts.app')
@section('title', 'Galeri Foto')
@section('content')
<section class="bg-image" style="background-image: url('{{ asset('img/bgsmk.jpg') }}'); height:40vh; background-position:bottom center;">
    <div class=" d-flex align-items-center justify-content-center text-white h-100" style="background-color: rgba(0, 0, 0, 0.7);">
        <h3 class="fs-4 fw-bold text-decoration-underline">Galeri Foto Kegiatan</h3>
    </div>
</section>


@endsection