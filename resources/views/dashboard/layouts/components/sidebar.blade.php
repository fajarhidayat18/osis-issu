<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('dashboard') }}">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('dashboard/anggota') }}">
            <span data-feather="users"></span>
            Anggota
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('dashboard/galeri') }}">
            <span data-feather="image"></span>
            Galeri
          </a>
        </li>
      </ul>
    </div>
  </nav>