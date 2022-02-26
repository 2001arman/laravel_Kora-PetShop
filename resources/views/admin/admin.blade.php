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

    <title>Admin Korashop</title>
  </head>
  <body>
    <header>
      <!-- navbar -->
      @include('/admin/navbaradmin')
      <!-- akhir navbar -->
    </header>

    <main>
      <div class="container-fluid my-5 py-5 px-5">
        <a href="/admin/tambah" class="display-block"><button type="button" class="myButton my-4 mx-auto display-block">Tambah Barang</button></a>
        @if(session('barangError'))
        <div class="alert alert-danger">
            <b>Opps!</b> {{session('barangError')}}
        </div>
        @endif
        @if(session('barangSuccess'))
        <div class="alert alert-primary">
            <b>Opps!</b> {{session('barangSuccess')}}
        </div>
        @endif
        <table class="table my-3">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Gambar</th>
                <th scope="col">Nama</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Harga</th>
                <th scope="col">Stok</th>
                <th scope="col">Jenis</th>
              </tr>
            </thead>
            <tbody>
              <p style="display: none;">{{$i=1}}</p>
              @foreach($barang as $b)
              <tr>
                <th scope="row">{{$i}}</th>
                <td> <img src="{{$b->gambar}}" alt="{{$b->nama}}" width="200px"></td>
                <td>{{$b->nama}}</td>
                <td>{{$b->deskripsi}}</td>
                <td>{{$b->harga}}</td>
                <td>{{$b->stok}}</td>
                <td>{{$b->jenis}}</td>
                <td>
                  <a href="/admin/edit/{{$b->id}}" class="me-2"><i class="bi bi-pencil"></i></a>
                  <a href="/admin/hapus/{{$b->id}}"><i class="bi bi-trash"></i></a>
                </td>
              </tr>
              <p style="display: none;">{{$i++}}</p>
              @endforeach
            </tbody>
          </table>
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