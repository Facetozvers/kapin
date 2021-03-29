@extends('layouts.main')
@section('title', 'Kapin')
@section('content')


<div class="container-fluid hero-section-carousel">
  <div class="row justify-content-center">
  <div class="col-md-12">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" style="">
        <div class="carousel-item active">
          <img class="d-block w-100" src="/assets/img/main-carousel/2.jpeg" alt="Carousel slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="/assets/img/main-carousel/3.jpeg" alt="Carousel slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="/assets/img/main-carousel/1.jpeg" alt="Carousel slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  </div>
</div>

<div class="container-fluid section tingkat-section mt-5">
  <h1 class="section-title text-center">Akademik</h1>
  <div class="row justify-content-center">
    <div class="col-md-3">
    <a href="/smp">
      <div class="card tingkat-card zoom">
        <img class="tingkat-img card-img" src="/assets/img/etc/pic-1.jpeg" alt="Bologna">
        <div class="card-img-overlay text-white d-flex flex-column justify-content-end" style="">
          <div class="d-block" style="position : absolute;bottom   : 0;left:0;width:100%;background-color: rgba(0, 0, 0, 0.4)">
            <h1 class="tingkat-title card-title text-center my-3" style="margin:0">SMP</h1>
          </div>
        </div>
      </div>
    </a>
    </div>
    <div class="col-md-3">
    <a href="/sma">
      <div class="card tingkat-card zoom">
        <img class="tingkat-img card-img" src="/assets/img/etc/pic-2.png" alt="Bologna">
        <div class="card-img-overlay text-white d-flex flex-column justify-content-end" style="">
          <div class="d-block" style="position : absolute;bottom   : 0;left:0;width:100%;background-color: rgba(0, 0, 0, 0.4)">
            <h1 class="tingkat-title card-title text-center my-3" style="margin:0">SMA</h1>
          </div>
        </div>
      </div>
    </a>
    </div>
    <div class="col-md-3">
    <a href="/smk">
      <div class="card tingkat-card zoom">
        <img class="tingkat-img card-img" src="/assets/img/etc/pic-3.jpeg" alt="Bologna">
        <div class="card-img-overlay text-white d-flex flex-column justify-content-end" style="">
          <div class="d-block" style="position : absolute;bottom   : 0;left:0;width:100%;background-color: rgba(0, 0, 0, 0.4)">
            <h1 class="tingkat-title card-title text-center my-3" style="margin:0">SMK</h1>
          </div>
        </div>
      </div>
    </a>
    </div>
  </div>
</div>

<div class="container-fluid section" style="background: #ff781f">
  <h1 class="section-title section-title-white text-center">Tentang Kapin</h1>
    <div class="row justify-content-center">
      <div class="col-md-4 col-5">
        <div class="card">
          <img src="/assets/img/tentang-kapin/img-1.jpg" class="card-img-top about-img" alt="...">
        </div>
      </div>
      <div class="col-md-4 col-5">
        <div class="card">
          <img src="/assets/img/tentang-kapin/img-2.jpg" class="card-img-top about-img" alt="...">
        </div>
      </div>
    </div>

    <div class="row about mt-5 " style="padding-left: 15vw;padding-right:15vw">
      <h1 class="about-heading mb-3">Heading</h1>
      <p class="about-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vitae sapien pellentesque habitant morbi. Sed velit dignissim sodales ut. Ultrices sagittis orci a scelerisque purus semper eget duis at. Lectus arcu bibendum at varius vel. Egestas quis ipsum suspendisse ultrices gravida dictum fusce. Sodales ut etiam sit amet nisl purus in mollis. Magna fermentum iaculis eu non diam phasellus. Ut sem viverra aliquet eget sit. Egestas egestas fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate.</p>
    </div>

    <div class="row justify-content-center about-numbers">
      <div class="col-md-3 col-12">
        <div class="diamond-shape">
          <div class="item-count">99</div>
        </div>
        <div class="diamond-text">
          <p class="text-center">Pengalaman lebih dari 20 Tahun</p>
        </div>  
      </div>
      <div class="col-md-3 col-12">
        <div class="diamond-shape">
          <div class="item-count">99</div>
        </div>  
        <div class="diamond-text">
          <p class="text-center">8 Ekstrakulikuler</p>
        </div>
      </div>
      <div class="col-md-3 col-12">
        <div class="diamond-shape">
          <div class="item-count">99</div>
        </div>  
        <div class="diamond-text">
          <p class="text-center">3000 + Siswa telah kami bimbing</p>
        </div>
      </div>
    </div>
</div>

<div class="container section mt-5">
  <h1 class="section-title text-center">News & Event</h1>
  <div class="row justify-content-center">
    <div class="col-md-4 col-6 mb-5">
      <div class="card" style="">
        <img class="card-img-top" src="https://mtsn4malang.sch.id/wp-content/uploads/2019/08/placeholder-1.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-6 mb-5">
      <div class="card" style="">
        <img class="card-img-top" src="https://mtsn4malang.sch.id/wp-content/uploads/2019/08/placeholder-1.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-6 mb-5">
      <div class="card" style="">
        <img class="card-img-top" src="https://mtsn4malang.sch.id/wp-content/uploads/2019/08/placeholder-1.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-6 mb-5">
      <div class="card" style="">
        <img class="card-img-top" src="https://mtsn4malang.sch.id/wp-content/uploads/2019/08/placeholder-1.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-6 mb-5">
      <div class="card" style="">
        <img class="card-img-top" src="https://mtsn4malang.sch.id/wp-content/uploads/2019/08/placeholder-1.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-6 mb-5">
      <div class="card" style="">
        <img class="card-img-top" src="https://mtsn4malang.sch.id/wp-content/uploads/2019/08/placeholder-1.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection