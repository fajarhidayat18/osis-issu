<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Osis Company | Daftar</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/signin.css') }}" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form action="/daftar" method="POST">
    @csrf
    <img class="mb-4" src="{{ asset('img/logoOSIS.jpg') }}" alt="" style="width:5rem; height:auto;">
    <h1 class="h3 mb-3 fw-normal">Halaman Pendaftaran</h1>

    <div class="form-floating">
        <input type="text" class="form-control @error('nisn') is-invalid @enderror" id="NISN" name="nisn" placeholder="00000" value="{{ old('nisn') }}">
        <label for="NISN">NISN</label>
        @error('nisn')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
    </div>
    
    <div class="form-floating">
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="nama" value="{{ old('name') }}">
        <label for="name">Nama</label>
        @error('name')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-floating">
        <input type="text" class="form-control @error('kelas') is-invalid @enderror" id="class" name="kelas" placeholder="X" value="{{ old('kelas') }}">
        <label for="class">Kelas</label>
        @error('kelas')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-floating">
      <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" name="email" value="{{ old('email') }}">
      <label for="email">Email address</label>
      @error('email')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="password" class="form-control @error('password') is-invalid @enderror" id="Password" placeholder="Password" name="password">
      <label for="Password">Password</label>
      @error('password')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Daftar</button>
    <p class="mt-2 mb-3 text-muted">sudah punya akun? <a href="/masuk">masuk</a></p>
  </form>
</main>


    
  </body>
</html>
