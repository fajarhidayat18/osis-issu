@extends('dashboard.layouts.main')
@section('title', 'Daftar Anggota')
@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Daftar Anggota</h1>
    <a href="{{ route('member.create') }}" class="btn btn-primary">Tambah Anggota</a>
</div>

@if (session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <span>{{ session('success') }}</span>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

<div class="card p-1 col-lg-8">
    <table class="table m-0">
        <thead class="table-dark">
            <th>*</th>
            <th class="col-4">Foto</th>
            <th>NISN</th>
            <th>nama</th>
            <th>Kelas</th>
            <th>Jabatan</th>
            <th>Aksi</th>
        </thead>
        @foreach ($persons as $person)
        <tbody>
            <td>{{ $loop->iteration }}</td>
            <td>
                @if (!$person->foto)
                <img src="{{  asset('img/icons/user.svg')  }}" alt="foto {{ $person->nisn }}" class="img-fluid w-25 rounded-circle">
                <div class="visually-hidden">Icons made by <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
                @else
                <img src="{{  asset('storage/'.$person->foto)  }}" alt="foto {{ $person->nisn }}" class="img-fluid w-25 rounded-circle">
                @endif
            </td>
            <td>{{ $person->nisn }}</td>
            <td>{{ $person->name }}</td>
            <td>{{ $person->kelas }}</td>
            <td>{{ $person->jabatan }}</td>
            <td class="">
                <a href="{{ route('member.edit', ['member'=>$person->nisn]) }}" class="btn btn-sm btn-outline-info">Edit</a>
                <form action="{{ route('member.destroy', ['member'=>$person->nisn]) }}" method="post" class="d-inline">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('yakin mau hapus')">Hapus</button>
                </form>
            </td>
        </tbody>
        @endforeach
    </table>
</div>
@endsection