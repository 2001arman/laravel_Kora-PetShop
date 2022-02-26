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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <title>Admin Korashop | Tambah Data</title>
  </head>
  <body>
    <header>
      <!-- navbar -->
      @include('/admin/navbaradmin')
      <!-- akhir navbar -->
    </header>

    <main>
        <div class="my-5 py-5 px-5">
            <div class="container-edit mt-4 mx-auto py-4 px-5 border default-radius">
                <p class="text-center fw-semiBold fs-6 mb-4">Tambah Data Barang</p>
                
                <!-- form -->
                @foreach($barang as $b)
                <form action="/admin/update" method="post">
                  @csrf
                  <input type="hidden" name="id", value="{{$b->id}}">
                    <div class="form-floating mb-4">
                      <input type="text" class="form-control rounded-pill px-4" id="floatingInput" name="nama" value="{{$b->nama}}">
                      <label for="floatingInput" class="text-secondary px-4">nama</label>
                    </div>
                    <div class="form-floating mb-4">
                      <input type="text" class="form-control rounded-pill px-4" id="floatingInput" name="gambar" value="{{$b->gambar}}">
                      <label for="floatingInput" class="text-secondary px-4">Gambar</label>
                    </div>
                    <div class="form-floating mb-4">
                      <input type="number" class="form-control rounded-pill px-4" id="floatingInput" name="harga" value="{{$b->harga}}">
                      <label for="floatingInput" class="text-secondary px-4">Harga</label>
                    </div>
                    <div class="form-floating mb-4">
                      <input type="number" class="form-control rounded-pill px-4" id="floatingInput" name="stok" value="{{$b->stok}}">
                      <label for="floatingInput" class="text-secondary px-4">Stok</label>
                    </div>
                    <div class="form-floating mb-4">
                      <textarea class="form-control" class="form-control rounded-pill" placeholder="Leave a comment here" id="floatingTextarea2" name="deskripsi" style="height: 100px">{{$b->deskripsi}}</textarea>
                      <label for="floatingTextarea2">Deskripsi</label>
                    </div>
                    <div class="form-floating mb-4">
                    <p>Jenis Barang</p>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="jenis" id="flexRadioDefault1" value="makanan" {{ $b->jenis == 'makanan' ? 'checked' : ''}}>
                      <label class="form-check-label" for="flexRadioDefault1">
                        Makanan
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="jenis" id="flexRadioDefault2" value="obat" {{ $b->jenis == 'obat' ? 'checked' : ''}}>
                      <label class="form-check-label" for="flexRadioDefault2">
                        Obat
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="jenis" id="flexRadioDefault3" value="perlengkapan" {{ $b->jenis == 'perlengkapan' ? 'checked' : ''}}>
                      <label class="form-check-label" for="flexRadioDefault2">
                        Perlengkapan
                      </label>
                    </div>
                    </div>
                <!-- akhir form -->
                <button type="submit" class="myButton mb-4 fluid">Ubah</button>
              </form>
              @endforeach
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