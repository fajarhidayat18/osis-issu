<style>
.list-menu{
  opacity: 0;
  overflow: hidden;
  transition: 0.2s;
}
.active{
  opacity: 1;
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
          <li class="nav-item">
            <button class="nav-link bg-transparent border-0" id="btn">Tentang Kami</button>
            <div class="list-menu card position-absolute" id="dropdown" style="width: 10rem;transform:translateX(-1rem); z-index:9;">
              <ul class="list-group list-group-flush">
                <a href="/profil/visi-misi" class="text-dark text-decoration-none"><li class="border-0 list-group-item">Visi & Misi</li></a>
                <a href="/profil/anggota" class="text-dark text-decoration-none"><li class="border-0 list-group-item">Anggota</li></a>
                <a href="/profil/bidang-kegiatan" class="text-dark text-decoration-none"><li class="border-0 list-group-item">Bidang Kegiatan</li></a>
              </ul>
            </div>
            
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

  <script>
    let drop = document.querySelector('#dropdown');
    let toggle = document.querySelector('#btn');
    toggle.addEventListener('click', function () {
      drop.classList.toggle('active')
    })
  </script>