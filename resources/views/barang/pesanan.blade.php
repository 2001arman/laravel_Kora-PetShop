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
    <!-- pesanan -->
    <p style="display: none;">
      {{ $jumlah = 0 }}
      {{ $total = 0 }}
    </p>
    <h3 class="my-3">Pesanan</h3>
    <div class="border my-4"></div>
    <p class="fw-semiBold fs-5">Barang</p>
    @foreach($allBarang as $index => $barang)
    <div class="border default-radius d-flex p-3 mb-3">
        <img class="radius12" src="{{ $barang->gambar }}" alt="gambar" width="180px">
        <div class="mt-4 fluid">
            <span class="stok">Stok Tersedia</span>
            <p class="fs-5 fw-semiBold mt-2 mb-1">{{ $barang->nama }}</p>
            <div class="d-flex justify-content-between mt-3">
                <p class="harga fs-6 mb-3">Rp {{ number_format($barang->harga , 0, ',', '.') }}</p>
                <p class="harga fs-6 me-3">{{session()->get($barang->id)}} Buah</p>
            </div>
        </div>
    </div>
    <p style="display: none;">
      {{ $jumlah = $jumlah + 1 }}
      {{ $total = $total + $barang->harga * session()->get("$barang->id") }}
    </p>
    @endforeach
    <!-- akhir pesanan -->
    <!-- pemesan -->
    <div class="border mb-4 mt-5"></div>
    <h3 class="my-3">Pemesan</h3>
    <div class="border default-radius d-flex py-3 px-4 mb-3">
      <img src="{{ url('img/image_avatar.png') }}" alt="avatar" width="200px" height="200px" class="me-4">
      <table class="table table-borderless">
        <tbody>
          <tr>
            <th scope="row" class="col-2">Nama</td>
            <td class="col-10">{{ session()->get('user')['nama'] }}</td>
          </tr>
          <tr>
            <th scope="row">Username</td>
            <td>{{ session()->get('user')['username'] }}</td>
          </tr>
          <tr>
            <th scope="row">Email</td>
            <td>{{ session()->get('user')['email'] }}</td>
          </tr>
          <tr>
            <th scope="row">Alamat</td>
            <td>{{ session()->get('user')['alamat'] }}</td>
          </tr>
          <tr>
            <th scope="row">No. HP</td>
            <td>{{ session()->get('user')['no_hp'] }}</td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- akhir pemesan -->
    <!-- ringakasan belanja -->
    <div class="border mb-4 mt-5"></div>
    <h3 class="my-3">Ringkasan Belanja</h3>
    <div class="border default-radius py-3 px-3 mb-3">
      <div class="d-flex justify-content-between container-fluid">
        <p class="harga">Total Harga ({{ $jumlah }} Barang)</p>
        <p class="harga">Rp {{ number_format($total , 0, ',', '.') }}</p>
      </div>
      <div class="border mb-3 mx-2"></div>
      <div class="d-flex justify-content-between container-fluid">
        <p >Total Harga </p>
        <p >Rp {{ number_format($total , 0, ',', '.') }}</p>
      </div>
    </div>
    <!-- akhir ringkasan -->
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
  <script>
    var css = '@page { size: landscape; }',
    head = document.head || document.getElementsByTagName('head')[0],
    style = document.createElement('style');

    style.type = 'text/css';
    style.media = 'print';

    if (style.styleSheet){
      style.styleSheet.cssText = css;
    } else {
      style.appendChild(document.createTextNode(css));
    }

    head.appendChild(style);
    window.print()
  </script>
  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>