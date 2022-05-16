<nav class="navbar navbar-expand-lg navbar-light fixed-top border-bottom px-3" style="background-color: white;">
    <div class="container-fluid">
      <a class="navbar-brand ms-5 me-auto" href="/"><img src="{{url('img/logo-small.png')}}" alt="logo" width="100"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse container-fluid" id="navbarNavDropdown">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link" href="https://api.whatsapp.com/send/?phone=%2B6282338368917&text=Halo+Admin+Kora+Shop+%3E%3C+Saya+Mau+berkonsultasi+Terkait+Peliharaan+Saya+apakah+bisa%3F+Terimakasih&_fb_noscript=1">Hubungi Kami</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Layanan
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="/hotel">Pet Hotel</a></li>
              <li><a class="dropdown-item" href="/makanan">Makanan</a></li>
              <li><a class="dropdown-item" href="/obat">Obat</a></li>
              <li><a class="dropdown-item" href="/perlengkapan">Perlengkapan</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        @if(session()->has('user'))
          <ul class="navbar-nav me-5 fs-6">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle fw-semiBold" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ session()->get('user')['nama'] }}
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="/profile">Profile</a></li>
                <li><a class="dropdown-item" href="/logout">Logout</a></li>
              </ul>
            </li>
          </ul>
        @else
          <ul class="navbar-nav">
            <li class="navbar-brand me-5 fs-6">
              <a class="nav-link active" aria-current="page" href="/masuk">Masuk
                <img class="d-inline " src="{{url('img/icon_arrow.png')}}" width="20" alt="arrow" srcset="">
              </a>
            </li>
          </ul>
        @endif
      </div>
    </div>
  </nav>