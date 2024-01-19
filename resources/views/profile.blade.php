<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <title>{{$title}}</title> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
</head>
<body>
<center>    
    <div class="card shadow p-3" style="width: 20rem; margin-top:50px; border-radius:12px;">

        @if (Session::get('successUploadingImg'))
        <div class="alert alert-success">
            {{ Session::get('successUploadingImg') }}
        </div>
        @endif
        
        <div class="card-body ">
                @if (is_null(Auth::user()->foto))
                        <img src="{{asset('assets/img/profile.png')}}" alt="" srcset="" style="border-radius: 50%; width:50%;" class="d-block m-auto">
                    @else
                        <img src="{{asset('assets/img/'. Auth::user()->foto )}}" alt="" srcset="" style="width:60%; border-radius:8px;" class="d-block m-auto">
                    @endif
                    <br>
                    <button href="/profile/upload" class="btn btn-primary" type="file" id="formFile" data-toggle="modal" data-target="#exampleModal">
                        Ubah Foto Profile
                    </button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Pilih gambar</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('profile.change')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="container">
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <input class="form-control" type="file" name="foto" id="formFile">
                                            </div>  
                                            <div class="modal-footer">
                                                <button class="btn btn-primary">Ubah</button>
                                            </div>
                                        </div>
                                    </div>
                                </form> 
                            </div>
                          </div>
                        </div>
                    </div>
                <br>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Nama: {{ auth()->user()->name}}</li>
                <li class="list-group-item">Email: {{ auth()->user()->email}}</li>
                <li class="list-group-item">Username: {{ auth()->user()->username}}</li>
            </ul>
            <br>
            <a class="btn btn-danger" href="{{route('dashboard')}}">Kembali</a>
        </div>
    </div>
</center>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

</body>
</html>


