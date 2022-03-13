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

  <main class="py-5">
    @foreach($barang as $b)
    <div class="row mt-5 mx-3 pt-5 justify-content-evenly">
        <div class="col-5 ">
            <img class="mb-1 radius12" src="{{ $b->gambar }}" alt="{{ $b->nama }}" width="100%"> <br>
        </div>
        <div class="col-5 ">
            <span class="stok">Stok Tersedia</span>
            <p class="fs-4 fw-semiBold mt-2 mb-1">{{ $b->nama }}</p>
            <p class="harga fs-6 mb-3">Rp {{ number_format($b->harga , 0, ',', '.') }}</p>
            <p class="lh-lg">{{ $b->deskripsi }}</p>
            <button type="button" class="myButton my-4 fluid"><img src="{{ url('img/icon_shop.png') }}" alt="icon keranjang">  Beli Sekarang</button>
            <button type="button" class="myButton secondaryColor fluid"><img src="{{ url('img/icon_WA.png') }}" alt="icon whatsapp">  Kirim Pesan ke Kora Petshop?</button>
            <button type="button" class=" float"><img src="{{ url('img/icon_WA.png') }}" alt="icon whatsapp">  Kirim Pesan ke Kora Petshop?</button>
        </div>
    @endforeach
    </div>
    <p class="mt-5 mx-4 mb-3 pt-5 px-5 fs-5 fw-semiBold">Product Lain</p>
    <div class=" mx-3 px-5 d-flex flex-wrap justify-content-between ">
        <p style="display: none;">{{ $i=0 }}</p>
        @foreach($allBarang as $b)
            @if($i==10)
                @break
            @endif
            <div class="myCardBarang mb-4 me-3" onclick="location.href='/detail/{{ $b->id }}'">
                <img class="mb-1" src="{{ $b->gambar }}" alt="{{ $b->nama }}"> <br>
                <span class="stok">Stok Tersedia</span>
                <p class="mb-0 mt-1 nama">{{ $b->nama }}</p>
                <span class="harga">Rp {{ number_format($b->harga , 0, ',', '.') }}</span>
                </div>
                <p style="display: none;"> {{$i++}} </p>
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