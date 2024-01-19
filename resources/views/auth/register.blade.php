<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- custom style -->
    <link rel="stylesheet" href="{{ asset('assets/css/register.css') }}">

    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="icon" href="{{ asset('assets/img/Logo.png') }}">
    <title>PPDB SMK Wikrama Bogor</title>
</head>
<body>
    <div class="container d-flex justify-content-center">
        <div class="card card-form mx-md-5 mx-0 my-5">
            <div class="card-body px-2">
                <h3 class="card-heading text-center">Form Pendaftaran PPDB</h3>
                <p class="card-subheading text-center mb-3 font-weight-bold pb-3 text-dark">SMK Wikrama Bogor TP.
                    2023-2024</p>
                    
                <form method="POST" action="{{ route('registrasi.store') }}">
                    @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>  
                        @endif
                    <div class="row my-2">
                        <div class="form-group col-md-6">
                            <label for="nisn" class="mb-2">NISN</label>
                            <input type="number" name="nisn" id="nisn" class="form-control" placeholder="Masukkan NISN" value="" required="" autocomplete="nisn">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="jenis_kelamin" class="ml-2 mb-2">Jenis Kelamin</label>
                            <select name="jenis_kelamin"  class="form-control w-100" id="jenis_kelamin" value="">
                                <option hidden="">--Jenis Kelamin--</option>
                                <option value="Perempuan">Perempuan</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                            </select>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="form-group col-md-12 py-3">
                            <label for="nama" class="mb-2">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama Lengkap" value="" required="" autocomplete="nama">
                        </div>
                    </div>
                    <div class="row my-2" id="other_text">
                        <div class="form-group col-md-12">
                            <label for="sekolah" class="mb-2">Asal Sekolah</label>
                            <input type="text" name="sekolah" id="sekolah" class="form-control" placeholder="Masukkan Asal Sekolah">
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="form-group col-md-12 py-3">
                            <label for="email" class="mb-2">Email</label>
                            <input type="email" name="email" id="email" class="form-control " placeholder="Masukkan Email Aktif" value="" required="" autocomplete="email">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <label>Pilih Jurusan</label>
                            <select name="jurusan" class="form-control" id="jurusan" onclick="tampil_referensi()" required="">
                                <option disabled="" hidden="" selected="">Pilih Jurusan</option>
                                <option value="pplg">Pengembangan Perangkat Lunak & Gim (PPLG)</option>
                                <option value="tjkt">Teknik Jaringan Komputer & Telekomunikasi</option>
                                <option value="dkv">Desain Komunikasi Visual (DKV)</option>
                                <option value="htl">Perhotelan (HTL)</option>
                                <option value="mplb">Manajemen Perkantoran Lembaga Bisnis (MPLB)</option>
                                <option value="pmn">Pemasaran (PMN)</option>
                                <option value="tbg">Tata Boga (TBG)</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div></div>
                        <button type="submit" class="btn btn-main-sm shadow-md bordered mt-3"><span>Registrasi</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>                                                                
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script src="{{asset('assets/vendor/jquery/jquery-3.2.1.min.js')}}"></script>

    <script src="{{asset('assets/vendor/jquery.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/vendor/slick.min.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery.syotimer.min.js')}}"></script>
    <script src="{{asset('assets/vendor/aos.js')}}"></script>
    <script src="{{asset('assets/vendor/scrollreveal.min.js')}}"></script>

    <script src="{{asset('assets/vendor/script.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{asset('assets/vendor/custom.js')}}"></script>

    <script>
        function checkvalue(val) {
            if (val === "others") {
                document.getElementById('other_text').style.display = 'block';
            } else {
                document.getElementById('other_text').style.display = 'none';
            }
        }

        $(document).ready(function () {
            $('.select2').select2();
        }); 
    </script>
</body>

</html>