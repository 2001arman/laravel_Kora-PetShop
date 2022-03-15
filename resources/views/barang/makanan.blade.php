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

  <title>Kora Pet Hotel</title>
</head>

<body>
  <header>
    <!-- navbar -->
    @include('navbar')
    <!-- akhir navbar -->
  </header>

  <main>
    <!-- corousel banner -->
    <div class="mt-5 mx-3 pt-5 px-5 d-flex flex-wrap justify-content-between">
      <div class="owl-carousel owl-theme">
        <div class="item">
          <img src="{{ url('img/carousel-image.jpg') }}" class="carousel-img" alt="">
        </div>
        <div class="item">
          <img src="{{ url('img/carousel-image.jpg') }}" class="carousel-img" alt="">
        </div>
        <div class="item">
          <img src="{{ url('img/carousel-image.jpg') }}" class="carousel-img" alt="">
        </div>
      </div>
    </div>
    <!-- corousel banner -->
    <!-- floating button -->
    @if(session()->has('jumlah'))
    <button type="button" class="d-flex align-content-center flex-wrap float px-3" onclick="location.href='/keranjang'">
      <div class="circle-shop d-flex">
        <img src="{{ url('img/icon_shop-dark.png') }}" alt="icon whatsapp">
        <div class="circle-shop-number">
          <span>{{ session()->get('jumlah') }}</span>
        </div>
      </div>
      <div class="ms-4 text-start flex-fill">
        <p class="mb-0">{{ session()->get('jumlah') }} Barang di Keranjang</p>
        <span class="mt-0 harga">Rp {{ number_format(session()->get('total') , 0, ',', '.') }}</span>
      </div>
      <div class="mt-2">
        <img src="{{ url('img/icon_shop-arrow.png') }}" alt="arrow">
      </div>
    </button>
    @endif
    <!-- akhir floating -->
    <div class="mt-5 mx-3 pt-5 px-5 d-flex flex-wrap justify-content-between ">
      @foreach($barang as $b)
      <div class="myCardBarang mb-4 me-3" onclick="location.href='/detail/{{ $b->id }}'">
        <img class="mb-1" src="{{ $b->gambar }}" alt="{{ $b->nama }}"> <br>
        <span class="stok">Stok Tersedia</span>
        <p class="mb-0 mt-1 nama">{{ $b->nama }}</p>
        <span class="harga">Rp {{ number_format($b->harga , 0, ',', '.') }}</span>
      </div>
      @endforeach
    </div>
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