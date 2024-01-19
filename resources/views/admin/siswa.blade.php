@extends('layouts.main')

@push('stylesheet')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@section('content')

<section class="section">
    <div class="section-header">
      <h1>Daftar Peserta PPDB</h1>
    </div>
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card shadow ">
          <div class="card-body p-0">
            <div class="table-responsive">

                @if (Session::get('successAdd'))
                    <div class="alert alert-success">
                        {{ Session::get('successAdd') }}
                    </div>
                @endif

                <table class="table table-striped table-md">
                    <tr class="text-center">
                        <th>No</th>
                        <th>NISN</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Minat Jurusan</th>
                        <th>Asal Sekolah</th>
                        <th class="text-center">Action</th>
                    </tr>
                    @foreach($siswas as $index => $i)
                        <tr class="text-center">
                            <td>{{ $index+1 }}.</td>
                            <td>{{ $i->nisn }}</td>
                            <td>{{ $i->nama }}</td>
                            <td>{{ $i->jenis_kelamin }}</td>
                            <td>{{ $i->jurusan }}</td>
                            <td>{{ $i->sekolah }}</td>
                            <td class="d-flex align-center">
                                <a href="#" class="btn btn-primary mr-1">Edit</a>
                                {{-- <a href="#" class="btn btn-danger">Delete</a>                                                     --}}
                                <form id="delete_{{$i->id}}" action="{{ route('siswa.destroy', $i->id) }}"
                                        method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</section>    

@endsection

@push('javascript')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function () {
        $('.select2').select2();
    });
</script>
@endpush