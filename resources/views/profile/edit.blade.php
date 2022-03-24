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

    <title>Edit Profile</title>
  </head>
  <body>
    <header>
      <!-- navbar -->
      @include('navbar')
      <!-- akhir navbar -->
    </header>

    <main>
      @foreach ($user as $u)
      <div class="my-5 py-5 px-5">
        <div class="container-edit mt-4 mx-auto py-4 px-5 border default-radius">
          <p class="text-center fw-semiBold fs-6">Edit Profile</p>
          @if(session('updateError'))
          <div class="alert alert-danger">
              <b>Opps!</b> {{session('updateError')}}
          </div>
          @endif
          @if(session('updateSuccess'))
          <div class="alert alert-primary">
              <b>Opps!</b> {{session('updateSuccess')}}
          </div>
          @endif
          <form action="/profile/update" method="post">
            @csrf
            <img class="mx-auto mb-4 rounded-circle display-block" src="{{url('img/image_avatar.png')}}" alt="avatar" srcset="" width="230px">
            <!-- form -->
            <input type="hidden" name="id" value="{{ $u->id }}">
            <div class="form-floating mb-4">
              <input type="text" class="form-control rounded-pill px-4" id="floatingInput" placeholder="name@example.com" name="username" value="{{ $u->username }}" required>
              <label for="floatingInput" class="text-secondary px-4">Username</label>
            </div>
            <div class="form-floating mb-4">
              <input type="text" class="form-control rounded-pill px-4" id="floatingInput" placeholder="Budi Utomo" name="nama" value="{{ $u->nama }}" required>
              <label for="floatingInput" class="text-secondary px-4">Nama</label>
            </div>
            <div class="form-floating mb-4">
              <input type="email" class="form-control rounded-pill px-4" id="floatingInput" placeholder="name@example.com" name="email" value="{{ $u->email }}" required>
              <label for="floatingInput" class="text-secondary px-4">Email</label>
            </div>
            <div class="form-floating mb-4">
              <input type="text" class="form-control rounded-pill px-4" id="floatingInput" placeholder="Samarinda" name="alamat" value="{{ $u->alamat }}" required>
              <label for="floatingInput" class="text-secondary px-4">Alamat</label>
            </div>
            <div class="form-floating mb-4">
              <input type="number" class="form-control rounded-pill px-4" id="floatingInput" name="no_hp" placeholder="0821209087" value="{{ $u->no_hp }}" required>
              <label for="floatingInput" class="text-secondary px-4">No HP</label>
            </div>
            <!-- akhir form -->
            <button type="submit" class="myButton mb-4 fluid">Simpan</button>
          </form>
        </div>
      </div>
      @endforeach
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