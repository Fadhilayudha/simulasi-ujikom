<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" />
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" />

    <!-- custom style -->
    <link rel="stylesheet" href="{{ asset('assets/css/LP.css') }}">

    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    
    <link rel="icon" href="{{ asset('assets/img/Logo.png') }}">
    <title>PPDB SMK Wikrama Bogor</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light nav-color bg-transparent position-fixed w-100">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="{{ asset('assets/img/Logo.png') }}" alt="" width="30" class="d-inline-block align-text-top me-2"> 
          PPDB SMK Wikrama Bogor
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mx-auto">
            {{-- <li class="nav-item mx-2 ">
              <a class="nav-link"  href="#beranda">Beranda</a>
            </li> --}}
          </ul>
          <div>
            <a href="{{route('auth.login')}}" class="btn btn-primary button-primary mx-2">Login</a>
          </div>
        </div>
      </div>
    </nav>

    <!-- section beranda -->

    <section id="beranda">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-md-6 beranda-tagline my-auto">
            <h1>PPDB TP 2023-2024
              SMK Wikrama Bogor.</h1>
              <p class="p">Ayo! segera daftarkan dirimu ke SMK Wikrama dengan cara klik <span class="fw-bold">PENDAFTARAN PPDB</span> dibawah ini!
              Ilmu yang Amaliah, Amal yang Ilmiah, Akhlakul Karimah.</p>

              <a  href="{{route('registrasi')}}">
                <button class="button-secondary">PENDAFTARAN PPDB</button>
              </a>
          </div>
        </div>
      </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous"></script>

        
    <script src="{{ asset('assets/js/LP.js') }}"></script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
      crossorigin="anonymous"></script>
  </body>
</html>