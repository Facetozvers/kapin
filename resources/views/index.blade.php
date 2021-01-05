@extends('layouts.main')
@section('title', 'Kapin')
@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <div class="row">
        <div class="col-md-3">
            <img src="/assets/logo.jpg" height="100" width="100" alt="">
        </div>
        <div class="col-md-6 mt-4">
            <p class="logo-text">Yayasan Pendidikan Teknologi<br>Kapin</p>
        </div>
    </div>
    
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0" style="border: 1px solid black; border-right: none">
      <li class="nav-item active" style="border-right: 1px solid black">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active" style="border-right: 1px solid black">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active" style="border-right: 1px solid black">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>

<div class="container-fluid hero-section">
  <div class="row">
    <img src="/assets/hero-bg.jpg" alt="">
  </div>
</div>

<div class=" container tingkat-section mt-5">
  <div class="row justify-content-center">
    <div class="col-md-3">
      <div class="card">
        <img class="card-img-top" src="https://www.kalderanews.com/wp-content/uploads/2019/03/Siswa-SMP-MTS.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title text-center">SMP</h5>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <img class="card-img-top" src="https://www.kalderanews.com/wp-content/uploads/2019/03/Siswa-SMP-MTS.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title text-center">SMA</h5>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <img class="card-img-top" src="https://www.kalderanews.com/wp-content/uploads/2019/03/Siswa-SMP-MTS.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title text-center">SMK</h5>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection