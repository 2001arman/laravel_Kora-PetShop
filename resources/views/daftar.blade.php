<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <link rel="shortcut icon" href="{{url('img/logo-small.png')}}" type="image/x-icon">
    <script type="text/javascript" src="{{ url('js/app.js') }}"></script>
    
    <title>Daftar</title>
  </head>
  <body>
    <header>
      <!-- navbar -->
      @include('navbar')
      <!-- akhir navbar -->
    </header>

    <main>
      <div class="container-fluid my-5 py-3 px-5">
        <div class="row">
          <div class="col my-auto">
            <img src="{{url('img/big_logo.png')}}" alt="">
          </div>
          <div class="col px-4">
            <div class="formCard border mt-5">
              <p class="text-center fw-bold fs-5">Daftar</p>
              @if(session('error'))
                <div class="alert alert-danger">
                    <b>Opps!</b> {{session('error')}}
                </div>
              @endif
              <form id="form_regis" action="{{ route('actiondaftar') }}" method="post">
              @csrf 
              <div class="form-floating mb-4">
                <input type="text" class="form-control rounded-pill px-4" id="floatingInput" placeholder="name@example.com" name="username" required>
                <label for="floatingInput" class="text-secondary px-4">Username</label>
              </div>
              <div class="form-floating mb-4">
                <input type="text" class="form-control rounded-pill px-4" id="floatingInput" placeholder="Budi Utomo" name="name" required>
                <label for="floatingInput" class="text-secondary px-4">Nama</label>
              </div>
              <div class="form-floating mb-4">
                <input type="email" class="form-control rounded-pill px-4" id="floatingInput" placeholder="name@example.com" name="email" required>
                <label for="floatingInput" class="text-secondary px-4">Email</label>
              </div>
              <div class="form-floating mb-4">
                <input type="text" class="form-control rounded-pill px-4" id="floatingInput" placeholder="Samarinda" name="alamat" required>
                <label for="floatingInput" class="text-secondary px-4">Alamat</label>
              </div>
              <div class="form-floating mb-4">
                <input type="number" class="form-control rounded-pill px-4" id="floatingInput" placeholder="0821209087" name="no_hp" required>
                <label for="floatingInput" class="text-secondary px-4">No HP</label>
              </div>
              <div class="form-floating mb-4">
                <input type="password" class="form-control rounded-pill px-4" id="floatingInput" placeholder="name@example.com" name="password" required>
                <label for="floatingInput" class="text-secondary px-4">Password</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control rounded-pill px-4" id="floatingPassword" placeholder="Password" name="confirm-password" required>
                <label for="floatingPassword" class="text-secondary px-4">Konfirmasi Password</label>
              </div>
              <div class="border mt-4 px-4 py-2 chaptcha">
                <p id="captcha" class="fw-bold fs-4 mt-1"><script>generateCaptcha();</script></p>
                <p>Ketik huruf di atas</p>
                <div class="d-flex">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control px-4 " id="theCaptcha" placeholder="name@example.com">
                    <label for="floatingInput" class="text-secondary px-4">Masukkan</label>
                  </div>
                  <div class="refresh">
                    <a onclick="generateCaptcha()"><img src="{{url('img/icon_refresh.png')}}" alt="refresh" width="20px"></a>
                  </div>
                </div>
              </div>
              <button type="button" class="myButton my-4 fluid" onclick="validateCaptcha()">Daftar</button>
              <div id="errorMsg" class="errmsg"></div><!-- jangan lupa dihapus -->
              <div class="border chaptcha mb-4"></div>
              <p>Sudah punya akun? <a href="/masuk" class="fw-bold">Masuk</a></p>
            </div>
          </div>
        </div>
      </div>
    </main>
    
    <!-- footer -->
    @include('footer')
    <!-- akhir footer -->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>