<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Halaman Buku</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand text-white" href="#">Perpustakaan</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="/perpustakaan">Buku</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="/cetak">Print</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">-</a>
              </li>
            </ul>
          </div>
          <button class="btn btn-outline-success"><a href="/home" class="text-white">
            Logout     
          <i class="fa-solid fa-right-from-bracket"></i></a>
        </button>
        </div>
      </nav>
    <script src="https://kit.fontawesome.com/69751bc924.js" crossorigin="anonymous"></script>
    <div class="container py-5">
        @yield('konten')
        @include('komponen/pesan')
        
    </div>
</body>
</html>