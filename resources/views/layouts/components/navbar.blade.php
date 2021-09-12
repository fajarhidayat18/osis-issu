<style>
.list-menu{
  position: absolute;
  z-index: 1;
  transition: 0.3s;
  display: none;
  transform: translateX(-1rem);
}
.list-item:hover{
  filter: brightness(90%);
}
.collapse ul li:hover > .list-menu{
  /* opacity: 1; */
  display: block;
}
</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">O<span class="text-danger">sis.</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="/">Beranda</a>
          </li>
          <li class="nav-item" id="btn">
            <a class="nav-link" href="#">Tentang Kami</a>
            
              <ul class="list-menu list-group list-group-flush rounded">
                <li class="list-item border-0 list-group-item"><a href="/profil/visi-misi" class="text-dark text-decoration-none d-block w-100">Visi & Misi</a></li>
                <li class="list-item border-0 list-group-item"><a href="/profil/anggota" class="text-dark text-decoration-none d-block w-100">Anggota</a></li>
                <li class="list-item border-0 list-group-item"><a href="/profil/bidang-kegiatan" class="text-dark text-decoration-none d-block w-100">Bidang Kegiatan</a></li>
              </ul>
            
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/mading-siswa">Mading Siswa</a>
          </li>
          <li class="nav-item ms-3">
            @auth
            <a class="nav-link text-primary btn btn-link" href="/dashboard">Dashboard | {{ auth()->user()->name }}</a>
            @else
            <a class="nav-link text-primary btn btn-link" href="/masuk">Masuk</a>
            @endauth
          </li>
        </ul>
      </div>
    </div>
  </nav>