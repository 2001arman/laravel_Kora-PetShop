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

  <title>Korashop | Keranjang</title>
</head>

<body>
  <header>
    <!-- navbar -->
    @include('navbar')
    <!-- akhir navbar -->
  </header>

  <main class="py-5 px-5 mt-5 mx-5">
      <h3 class="my-3">Keranjang</h3>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
          <p>Pilih Semua</p>
        </label>
      </div>
      <div class="row">
          <div class="col-8">
            <p style="display: none;">{{$total = 0}}</p>
            @foreach($keranjang as $index => $k)
            <p style="display: none;">{{ $total = $total + $allBarang[$index]->harga * $k->jumlah }}</p>
            <div class="border default-radius d-flex p-3 mb-3">
                <div class="form-check my-auto">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
                <img class="radius12" src="{{$allBarang[$index]->gambar}}" alt="gambar" width="200px">
                <div class="mt-3 fluid">
                    <span class="stok">Stok Tersedia</span>
                    <p class="fs-5 fw-semiBold mt-2 mb-1">{{$allBarang[$index]->nama}}</p>
                    <p class="harga fs-6 mb-3">Rp {{ number_format($allBarang[$index]->harga , 0, ',', '.') }}</p>
                    <div class="d-flex justify-content-between ">
                        <img src="{{ url('img/icon_delete.png') }}" alt="delete">
                        <div class="d-flex">
                            <img src="{{ url('img/icon_min.png') }}" alt="minus">
                            <span class="ms-2">{{$k->jumlah}}</span>
                            <img class="ms-2" src="{{ url('img/icon_plus.png') }}" alt="plus">
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
          </div>
          <div class="col-4">
              <div class="border default-radius p-3">
                  <p class="fw-semiBold mb-1">Ringkasan Belanja</p>
                  <div class="d-flex justify-content-between">
                      <span class="harga fs-6 mb-3">Total Harga (3 barang)</span>
                      <span class="harga fs-6 mb-3">Rp {{ number_format($total , 0, ',', '.') }}</span>
                  </div>
                  <div class="border"></div>
                  <div class="d-flex justify-content-between fw-semiBold mt-3">
                      <span>Total Harga</span>
                      <span>Rp {{ number_format($total , 0, ',', '.') }}</span>
                  </div>
                  <button type="button" class="myButton my-4 fluid">Beli (3)</button>
              </div>
          </div>
      </div>
      
    <div class="row pt-5 justify-content-evenly">

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