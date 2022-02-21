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

    <title>Kora PetShop</title>
  </head>
  <body>
    <header>
      <!-- navbar -->
      @include('navbar')
      <!-- akhir navbar -->
    </header>

    <main>
      <!-- big container -->
      <div class="container-fluid mt-5 pt-5">
        <div class="row ps-3">
          <div class="col my-auto ms-5">
            <p class="judul">KORA PETSHOP</p>
            <h1 class="lh-3">Memenuhi Kebutuhan<br>Hewan Peliharaan Anda</h1>
            <p class="text-secondary">Kami menyediakan berbagai layanan dan berbagai macam <br> kebutuhan terlengkap untuk hewan peliharaan Anda</p>
            <button type="button" class="myButton mt-3">Lihat Layanan</button>
          </div>
          <div class="col">
            <img src="{{url('img/dog-big.png')}}" alt="">
          </div>
        </div>
      </div>
      <!-- akhir big container -->

      <!-- layanan -->
      <div class="container-fluid mt-3 mb-5 pb-5">
        <p class="text-center">LAYANAN</p>
        <h2 class="text-center">Layanan-Layanan yang Kami<br>Sediakan untuk Pelanggan Kami</h2>
        <div class="d-md-flex flex-row justify-content-around px-5 mt-5">
          <div class="myCard">
            <span class="nomor">01</span>
            <img class="mx-3" src="{{url('img/icon_hotel.png')}}" alt="hotel" srcset="">
            <span class="layanan">PET HOTEL</span>
          </div>
          <div class="myCard">
            <span class="nomor">03</span>
            <img class="mx-3" src="{{url('img/icon_obat.png')}}" alt="obat" srcset="">
            <span class="layanan">OBAT</span>
          </div>
        </div>
        <div class="d-md-flex flex-row justify-content-around px-5 mt-4">
          <div class="myCard">
            <span class="nomor">02</span>
            <img class="mx-3" src="{{url('img/icon_makanan.png')}}" alt="makanan" srcset="">
            <span class="layanan">MAKANAN</span>
          </div>
          <div class="myCard">
            <span class="nomor">04</span>
            <img class="mx-3" src="{{url('img/icon_perlengkapan.png')}}" alt="perlengkapan" srcset="">
            <span class="layanan">PERLENGKAPAN</span>
          </div>
        </div>
      </div>
      <!-- akhir layanan -->
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