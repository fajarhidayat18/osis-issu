@extends('dashboard.layouts.main')
@section('title', 'Daftar Anggota')
@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Daftar Anggota</h1>
</div>
<div class="card p-1 col-lg-8">
    <table class="table m-0">
        <thead class="table-dark">
            <th>*</th>
            <th>NISN</th>
            <th>nama</th>
            <th>Kelas</th>
            <th>Jabatan</th>
        </thead>
        <tbody>
            <td>1</td>
            <td>08123</td>
            <td>fajar</td>
            <td>XII</td>
            <td>anggota</td>
        </tbody>
    </table>
</div>
@endsection