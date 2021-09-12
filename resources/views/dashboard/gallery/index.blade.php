@extends('dashboard.layouts.main')
@section('title', 'Galeri')
@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Galeri Foto Kegiatan</h1>
    <a href="{{ route('gallery.create') }}" class="btn btn-primary">Buat Galeri</a>
</div>

<section class="row">
    @if($galleries = null)
    @foreach ($galleries as $gallery)
    <div class="col-3">
        <div class="card">
            <img src="{{ asset('storage/'.$gallery->foto) }}" class="card-img-top" alt="foto dari {{ $gallery->title }}">
            <div class="card-body">
            <h5 class="card-title">{{ $gallery->title }}</h5>
            <p class="card-text">{{ $gallery->body }}</p>
            <div class="btn-wrapper d-flex justify-content-evenly">
                <a href="{{ route('gallery.show', ['gallery'=>$gallery->slug]) }}" class="pt-0 btn btn-outline-info"><span data-feather="eye"></span></a>
                <a href="{{ route('gallery.edit', ['gallery'=>$gallery->slug]) }}" class="pt-0 btn btn-outline-success"><span data-feather="edit"></span></a>
                <a href="{{ route('gallery.destroy', ['gallery'=>$gallery->slug]) }}" class="pt-0 btn btn-outline-danger"><span data-feather="trash"></span></a>
            </div>
            </div>
        </div>
    </div>
    @endforeach
    @else
    <div class="d-flex flex-column justify-content-center align-items-center w-100 h-100">
        <h4>Belum ada apapun untuk di tampilkan</h4>
        <a href="{{ route('gallery.create') }}" class="btn btn-outline-info">Buat Galeri</a>
    </div>
    @endif
</section>
@endsection