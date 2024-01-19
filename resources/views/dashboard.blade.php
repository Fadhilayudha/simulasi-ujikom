@extends('layouts.main')

@section('content')
<section class="section">
  <div class="section-header">
    {{-- <h1>{{ ucfirst(auth()->user()->nama) }}</h1> --}}
    <h1>Dashboard</h1>
  </div>
  <div class="section-body">
    <h2 class="section-title">Hi, {{ auth()->user()->nama }}</h2>
    <p class="section-lead">Selamat Datang</p>

    @csrf
    @if (Session::get('notAllowed'))
      <div class="alert alert-danger">
          {{ Session::get('notAllowed')}}
      </div>  
    @endif

    @if (Session::get('successAdd'))
      <div class="alert alert-success">
          {{ Session::get('successAdd') }}
      </div>
    @endif
    
  </div>
</section>
@endsection