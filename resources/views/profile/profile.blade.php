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

    <title>Profile</title>
  </head>
  <body>
    <header>
      <!-- navbar -->
      @include('navbar')
      <!-- akhir navbar -->
    </header>
    <main>
      <div class="container-fluid my-5 py-3 px-5">
        <div class="row mt-5 pt-3 pe-5">
          <div class="col-4 text-center px-5 ">
            <img class="mx-auto mb-4 rounded-circle" src="{{url('img/image_avatar.png')}}" alt="avatar" srcset="" width="230px">
            <h2>{{ $user[0]->nama }}</h2>
            <p class="fw-light">Member</p>
            <button type="button" class="myButton fluid" onclick="location.href='/profile/edit/'"> <i class="bi bi-pencil-fill me-1"></i> Edit Profile</button>
          </div>
          <div class="col-8 border default-radius p-4">
              <p class="fs-5 fw-semiBold">Pembelian Saya</p>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Jenis</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Invoice</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($pesanan as $index => $p)
                        <tr>
                            <td scope="row">{{ $allBarang[$index] }}</td>
                            <td>{{ $p->jumlah }} buah</td>
                            <td>Rp {{ number_format($hargaBarang[$index] , 0, ',', '.') }}</td>
                            <td><a href="/resiPesanan/{{$p->id}}"><i class="bi bi-download"></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
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