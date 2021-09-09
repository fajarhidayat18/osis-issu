@extends('layouts.app')
@section('title', 'Branda')
@section('content')
<style>
    .bg-image{position:relative;overflow:hidden;background-repeat:no-repeat;background-size:cover;background-position:50%}
</style>

<section class="bg-image" style="background-image: url('{{ asset('img/bgsmk.jpg') }}'); height:80vh; background-position:bottom center;">
    <div class=" d-flex align-items-center text-white h-100" style="background-color: rgba(0, 0, 0, 0.5);">
        <div class="container">
            <h1 class="display-4 fw-bold">Organisasi Siswa <br> Intra Sekolah</h1>
        </div>
    </div>
</section>

<section id="menu" style="margin: 7rem 0;">
    <div class="container">
        <div class="row gx-4">

            <div class="col">
                <div class="card p-4 shadow rounded-3">
                    <div class="card-body text-center">
                        <img src="{{ asset('img/icons/goal.svg') }}" alt="" class="img-fluid w-25 mb-4">
                        <span class="visually-hidden">Icons made by <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></span>
                        <h5 class="card-title">Visi & Misi</h5>
                        <a href="#" class="btn btn-outline-info">Selengkapnya</a>
                    </div>
                  </div>
            </div>

            <div class="col">
                <div class="card p-4 shadow rounded-3">
                    <div class="card-body text-center">
                        <img src="{{ asset('img/icons/meeting.svg') }}" alt="" class="img-fluid w-25 mb-4">
                        <span class="visually-hidden">Icons made by <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></span>
                        <h5 class="card-title">Anggota Kami</h5>
                        <a href="#" class="btn btn-outline-info">Selengkapnya</a>
                    </div>
                  </div>
            </div>

            <div class="col">
                <div class="card p-4 shadow rounded-3">
                    <div class="card-body text-center">
                        <img src="{{ asset('img/icons/organization.svg') }}" alt="" class="img-fluid w-25 mb-4">
                        <span class="visually-hidden">Icons made by <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></span>
                        <h5 class="card-title">Tentang Kami</h5>
                        <a href="#" class="btn btn-outline-info">Selengkapnya</a>
                    </div>
                  </div>
            </div>

        </div>
    </div>
</section>

<section id="agenda" style="margin: 4rem 0;">
    <div class="container d-flex align-items-center flex-column">
        <h5 class="fs-2">Galeri Foto</h5>
        <hr width="20%" class="mb-4 text-center bg-success">
        <div class="row gx-4">

            <div class="col">
                <div class="card p-4 shadow rounded-3">
                    <div class="card-body text-center">
                        <img src="{{ asset('img/icons/goal.svg') }}" alt="" class="img-fluid w-25 mb-4">
                        <span class="visually-hidden">Icons made by <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></span>
                        <h5 class="card-title">Visi & Misi</h5>
                        <a href="#" class="btn btn-outline-info">Selengkapnya</a>
                    </div>
                  </div>
            </div>

            <div class="col">
                <div class="card p-4 shadow rounded-3">
                    <div class="card-body text-center">
                        <img src="{{ asset('img/icons/meeting.svg') }}" alt="" class="img-fluid w-25 mb-4">
                        <span class="visually-hidden">Icons made by <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></span>
                        <h5 class="card-title">Anggota Kami</h5>
                        <a href="#" class="btn btn-outline-info">Selengkapnya</a>
                    </div>
                  </div>
            </div>

            <div class="col">
                <div class="card p-4 shadow rounded-3">
                    <div class="card-body text-center">
                        <img src="{{ asset('img/icons/organization.svg') }}" alt="" class="img-fluid w-25 mb-4">
                        <span class="visually-hidden">Icons made by <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></span>
                        <h5 class="card-title">Tentang Kami</h5>
                        <a href="#" class="btn btn-outline-info">Selengkapnya</a>
                    </div>
                  </div>
            </div>

        </div>

        <a href="" class="btn btn-outline-info mt-5">Lihat Foto Lainnya</a>
    </div>
</section>

@endsection