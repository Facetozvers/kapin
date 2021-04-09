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
      <p class="about-text">Yayasan Pendidikan Kader Pembangunan Indonesia (YP KAPIN) didirikan sejak tahun 1966 di Jakarta, namun sejak tahun 2008 dilakukan perubahan menjadi Yayasan Pendidikan Teknologi Kader Pembangunan Indonesia (YPT KAPIN). Nama tersebut diambil dari nama sebuah perusahaan PT Kapal Indonesia yang berada di daerah Tanjung Priuk Jakarta Utara, nama ini diambil berdasarkan dukungan dan persetujuan yang diberikan oleh pimpinan PT Kapal Indonesia. <br><br>
    YPT KAPIN bergerak dibidang pendidikan umum dan pendidikan teknologi. Bermula dari Sekolah Teknik Menengah (STM) yang berlokasi di Jln. Gatot Subroto, Pancoran, Jakarta Selatan. Tahun 1980 YPT KAPIN mendirikan sekolah untuk pendidikan umum tingkat SMP dan SMA di wilayah kalimalang, Pondok Kelapa, Jakarta Timur. Hingga saat ini YPT KAPIN telah berkiprah di dunia pendidikan selama 54 tahun menaungi Sekolah lanjutan tingkat SMP, SMA, dan SMK dan telah meluluskan ribuan siswa.</p>
    </div>

    <div class="row justify-content-center about-numbers">
      <div class="col-md-3 col-12">
        <div class="diamond-shape">
          <div class="item-count">50<br><span style="font-size:1vw">Tahun</span></div>
        </div>
        <div class="diamond-text">
          <p class="text-center">Pengalaman lebih dari 50 Tahun</p>
        </div>  
      </div>
      <div class="col-md-3 col-12">
        <div class="diamond-shape">
          <div class="item-count">8<br><span style="font-size:1vw">Ekskul</div>
        </div>  
        <div class="diamond-text">
          <p class="text-center">8 Ekstrakulikuler</p>
        </div>
      </div>
      <div class="col-md-3 col-12">
        <div class="diamond-shape">
          <div class="item-count">5000+<br><span style="font-size:1vw">Siswa</div>
        </div>  
        <div class="diamond-text">
          <p class="text-center">5000+ Siswa telah kami bimbing</p>
        </div>
      </div>
    </div>
</div>

<div class="container section mt-5">
  <h1 class="section-title text-center">News & Event</h1>
  <div class="row justify-content-center">
    @foreach($posts as $post)
    <div class="col-md-4 mt-3">
    <a class="blog-link" href="/blog/{{$post->url}}">
        <div class="card blog-card">
            <img class="card-img-top" src="/images/posts/{{$post->image}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title" style="font-size:17px">{{$post->title}}</h5>
            </div>
        </div>
    </a>
    </div>
    @endforeach
  </div>
</div>
@endsection