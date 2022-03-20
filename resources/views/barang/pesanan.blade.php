<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="{{url('css/style.css')}}">
  <link rel="stylesheet" href="{{url('css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{url('css/owl.theme.default.css')}}">
  <link rel="shortcut icon" href="{{url('img/logo-small.png')}}" type="image/x-icon">

  <title>Korashop | Pesanan</title>
</head>

<body>
  <header>
    <!-- navbar -->
    @include('navbar')
    <!-- akhir navbar -->
  </header>

  <main class="py-5 px-5 mt-5 mx-5">
        <h3 class="my-3">Pesanan</h3>
        <div class="border my-4"></div>
        <p class="fw-semiBold fs-5">Barang</p>
        @for ($i = 0; $i < 5; $i++)
        <div class="border default-radius d-flex p-3 mb-3">
            <img class="radius12" src="https://drive.google.com/uc?export=view&id=1QiJKAyGHps0jBMBfjpQPwUmn0NMZtn2B" alt="gambar" width="180px">
            <div class="mt-4 fluid">
                <span class="stok">Stok Tersedia</span>
                <p class="fs-5 fw-semiBold mt-2 mb-1">Whiskas Tuna Wet Food 400 Gram</p>
                <div class="d-flex justify-content-between mt-3">
                    <p class="harga fs-6 mb-3">Rp {{ number_format(28500 , 0, ',', '.') }}</p>
                    <p class="harga fs-6 me-3">1 Buah</p>
                </div>
            </div>
        </div> 
        @endfor
  </main>

  <!-- footer -->
  @include('footer')
  <!-- akhir footer -->


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="{{ url('js/owl.carousel.min.js') }}"></script>
  <script src="{{ url('js/script.js') }}"></script>
  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>