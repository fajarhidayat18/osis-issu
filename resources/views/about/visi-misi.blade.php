@extends('layouts.app')
@section('title', 'Visi & Misi')
@section('content')
<section class="bg-image" style="background-image: url('{{ asset('img/bgsmk.jpg') }}'); height:40vh; background-position:bottom center;">
    <div class=" d-flex align-items-center justify-content-center text-white h-100" style="background-color: rgba(0, 0, 0, 0.7);">
            <h3 class="fs-4 fw-bold text-decoration-underline">Visi Dan Misi Kami</h3>
    </div>
</section>
<div class="container mt-4">
    <div class="col-lg-8">
        <h5 class="fs-4">Visi</h5>
        <p>
            Mewujudkan cita-cita atau harapan sekolah menjadikan kita lebih berprestasi, kreatif, inovatif dan bertanggung jawab serta lebih peduli akan lingkungan sekitar yang dilandasi iman dan taqwa
        </p>
        <h5 class="fs-4">Misi</h5>
        <ol>
            <li>Memperlihatkan karya senni siswa siswi SMKS MAHAPUTRA CERDAS UTAMA.</li>
            <li>Mengasah softskill dengan mengadakan kegiatan muhadoroh sebelum kegiatan ibadah sholat jum’at dilaksanakan.</li>
            <li>Mengadakan aspirasi dari seluruh siswa untuk OSIS.</li>
            <li>Mendukung potensi para siswa baik dari segi pengetahuan maupun keterampilan.</li>
        </ol>
    </div>
</div>
@endsection