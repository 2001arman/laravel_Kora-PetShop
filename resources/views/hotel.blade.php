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

    <title>Kora Pet Hotel</title>
  </head>
  <body>
    <header>
      <!-- navbar -->
      @include('navbar')
      <!-- akhir navbar -->
    </header>

    <main>
      <!-- top -->
      <div class="container-fluid mt-5 pt-5 text-center">
        <p class="judul mt-3 fw-semiBold">KORA PETSHOP</p>
        <h1 class="lh-3 fw-semiBold">Ingin Liburan Dengan Nyaman?<br>Titipkan Hewan Peliharaanmu<br>di Pet Hotel</h1>
        <button class="myButton mt-3"><img src="{{ url('img/icon_WA.png') }}" alt="icon whatsapp"> Booking Pet Hotel</button> <br>
        <img src="{{ url('img/cat-big.png') }}" alt="cat-big" width="60%" class="mt-4">
      </div>
      <!-- akhir top -->
      <!-- fasilitas -->
      <div class="container-fluid px-5 mt-3">
        <div class="row mx-3">
          <div class="col text-center">
            <img src="{{ url('img/kid-big.png') }}" alt="kid dog" width="80%">
          </div>
          <div class="col pt-5 ">
            <p class="fs-5 fw-semiBold">FASILITAS</p>
            <h3 class="fw-semiBold mb-3">Fasilitas Apa Aja Sih Kalau Kamu<br>Menggunakan Layanan Pet Hotel?</h3>
            <p ><img src="{{ url('img/icon_check.png') }}" alt="icon_check" class="me-2">FREE Antar - Jemput *
            </p>
            <p><img src="{{ url('img/icon_check.png') }}" alt="icon_check" class="me-2">FREE Grooming *
            </p>
            <p><img src="{{ url('img/icon_check.png') }}" alt="icon_check" class="me-2">Full AC (Indoor Cage)
            </p>
            <p><img src="{{ url('img/icon_check.png') }}" alt="icon_check" class="me-2">Update Foto & Video
            </p>
            <p><img src="{{ url('img/icon_check.png') }}" alt="icon_check" class="me-2">Cuci Alat Makan & Minum 2x Sehari
            </p>
            <p><img src="{{ url('img/icon_check.png') }}" alt="icon_check" class="me-2">Pembersihan Toilet Per Hari
            </p>
            <p>* ≤ 3 Km = FREE antar-jemput <br> &ensp; > 3 Km = sesuai tarif Kurir (GoSend/Grab).</p>
          </div>
        </div>
      </div>
      <!-- akhir fasilitas -->
      <!-- harga -->
      <div class="container-fluid px-5 mt-5 pt-2 ">
        <p class="judul mt-3 fw-semiBold text-center">HARGA</p>
        <h2 class="text-center">Daftar Harga Pet Hotel untuk <br> Kucing dan Anjing di <a href="/" class="judul" >Kora Petshop</a></h2>
        <div class="py-4 px-4 border mx-auto default-radius" style="width: 60%;">
          <p class="fs-5 fw-semiBold">Kucing</p>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Pilihan</th>
                <th scope="col">Harga</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                  <td class="col-7">Suite Room + Meal</td>
                  <td>Rp 65.000</td>
                </tr>
                <tr>
                  <td class="col-7">Suite Room + No Meal</td>
                  <td>Rp 60.000</td>
                </tr>
                <tr>
                  <td class="col-7">Standard Room + Meal</td>
                  <td>Rp 55.000</td>
                </tr>
                <tr>
                  <td class="col-7">Standard Room + No Meal</td>
                  <td>Rp 50.000</td>
                </tr>
            </tbody>
          </table>

          <p class="fs-5 fw-semiBold mt-5">Anjing</p>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Pilihan</th>
                <th scope="col">Harga</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                  <td class="col-7">Extra Besar</td>
                  <td class="col-7">Rp 120.000</td>
                </tr>
                <tr>
                  <td class="col-7">Besar</td>
                  <td>Rp 100.000</td>
                </tr>
                <tr>
                  <td class="col-7">Sedang</td>
                  <td>Rp 80.000</td>
                </tr>
                <tr>
                  <td class="col-7">Kecil</td>
                  <td>Rp 60.000</td>
                </tr>
            </tbody>
          </table>
        </div>
        <button class="myButton my-5 px-4 mx-auto display-block"><img src="{{ url('img/icon_WA.png') }}" alt="icon whatsapp"> Booking Pet Hotel Sekarang</button> <br>
      </div>
      <!-- akhir harga -->
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
</html>z