<nav class="navbar navbar-expand-lg navbar-light fixed-top border-bottom px-3" style="background-color: white;">
    <div class="container-fluid">
      <a class="navbar-brand ms-5 me-auto" href="#"><img src="{{url('img/logo-small.png')}}" alt="logo" width="100"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse container-fluid" id="navbarNavDropdown">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Layanan
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Pet Hotel</a></li>
              <li><a class="dropdown-item" href="#">Makanan</a></li>
              <li><a class="dropdown-item" href="#">Obat</a></li>
              <li><a class="dropdown-item" href="#">Perlengkapan</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="navbar-brand me-5 fs-6">
            <a class="nav-link active" aria-current="page" href="{{ route('actionlogout') }}">Logout
              <img class="d-inline " src="{{url('img/icon_arrow.png')}}" width="20" alt="arrow" srcset="">
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>