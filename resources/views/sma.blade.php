@extends('layouts.main')
@section('title', 'SMA KAPIN | YPT KAPIN')
@section('metatags')
<!-- og meta tag -->
<meta property="og:title" content="YPT KAPIN | SMA">
<meta property="og:description" content="Selamat Datang di Website YPT KAPIN!">
<meta property="og:image" content="/assets/logo.png">
<meta property="og:url" content="https://kapin.or.id/sma">

<!-- twitter meta tag -->
<meta property="twitter:title" content="YPT KAPIN | SMA">
<meta property="twitter:description" content="Selamat Datang di Website YPT KAPIN!">
<meta property="twitter:image" content="/assets/logo.png">
<meta property="twitter:url" content="http://kapin.or.id/sma">
@endsection
@section('content')


<div class="container-fluid head-carousel-bg">
  <h5 class="section-title text-center">SMA KAPIN</h5>
  <div class="row justify-content-center">
  <div class="col-md-11">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" style="background: #e3e5e5">
        <div class="carousel-item active">
          <img class="d-block w-100" src="/assets/img/sma/flyer-1.jpeg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="/assets/img/sma/flyer-1.jpeg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="/assets/img/sma/flyer-1.jpeg" alt="Third slide">
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

<div class="container-fluid section text-section">
    <h1 class="section-title section-title-orange pt-3">VISI & MISI</h1>
    <h5 class="mt-5" style="color:#ff781f"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> VISI</h5>
    <p class="mb-5">Terwujudnya karakter insan yang beriman dan bertakwa, handal, kreatif, inovatif serta Menguasai IPTEK.</p>
    
    <h5 class="mt-5" style="color:#ff781f"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> MISI</h5>
    <p class="mb-0">
    Mengembangkan potensi peserta didik menjadi manusia yang berbudi pekerti Luhur / berakhlaq mulia.
    <ol class="text-list">
      <li>Menumbuhkembangkan sikap kreatif, inovatif, dan yang bermanfaat bagi masyarakat.</li>
      <li>Mengimplementasikan KBM yang efektif dengan memanfaatkan teknologi.</li>
      <li>Membentuk kepribadian dengan melaksanakan ibadah wajib dan sunah secara teratur.</li>
    </ol>
    </p>

    <h5 class="mt-5" style="color:#ff781f"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> TUJUAN SEKOLAH</h5>
    <ol class="text-list">
      <li>Terwujudnya karakter peserta didik yang berakhlaq mulia</li>
      <li>Berkembangnya sikap kreatif, inovatif sesuai agar bermanfaat bagi masyarakat.</li>
      <li>Terlaksananya KBM yang efektif dengan memanfaatkan teknologi.</li>
      <li>Terbentuknya kepribadian siswa yang baik dengan melaksankan ibadah wajib dan sunah secara tertib dan teratur.</li>
    </ol> 

    <h5 class="mt-5" style="color:#ff781f"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> SASARAN</h5>
    <ol class="text-list">
      <li>Mengembangkan potensi peserta didik yang berakhlaq mulia melalui 6 S.</li>
      <li>Mengembangkan sikap kreatif dan inovatif dengan memberikan ide / gagasan agar mampu memecahkan masalah.</li>
      <li>Melaksanakan KBM yang efektif dengan pemanfaatan teknologi tepat guna.</li>
      <li>Membiasakan melaksanakan ibadah wajib dan sunah sehingga terbentuk kepribadian yang baik.</li>
    </ol> 
    <p class="mt-5">
    <strong># GENERASI BERPRESTASI GENERASI BERSINERGI #</strong>
    </p>
</div>

<div class="container-fluid section text-section">
    <h1 class="section-title section-title-orange pt-3 pb-4">KURIKULUM</h1>
    <h5 class="pt-3 pb-4 text-center">STRUKTUR KURIKULUM SMA KAPIN JAKARTA (Kurikulum 2013)</h5>
    <img class="img-fluid d-block mx-auto" src="/assets/img/sma/kurikulum-sma.png" alt="">
</div>

<div class="container-fluid section text-section">
  <h1 class="section-title section-title-orange pt-3 pb-4">PROFIL PENDIDIK</h1>
  @include('pendidik_sma')
</div>

<div class="container-fluid section text-section">
    <h1 class="section-title section-title-orange pt-3">SARANA & PRASARANA</h1>
    <h5 class="mt-5" style="color:#ff781f">LOKASI</h5>
    <p class="mb-5">Lokasi terletak di JL. Raya KAPIN Kelurahan Pondok Kelapa Kecamatan Duren Sawit, Kota Administrasi Jakarta Timur dengan luas bangunan sebesar 2.617 m2.</p>
    
    <h5 class="mt-5" style="color:#ff781f">KONDISI BANGUNAN</h5>
    <p class="mb-5">Secara umum kondisi bangunan cukup baik yang terdiri dari 2 bangunan utama, satu bangunan berlantai tiga dan satu bangunan berlantai dua. Diantara bangunan terdapat lapangan olah raga dengan luas kurang lebih 12 x 25 m2.</p>

    <div class="row justify-content-center">
        <div class="col-md-4 mb-5">
            <img class="img-kegiatan rounded mx-auto d-block w-100" src="/assets/img/ruangan/lapangan.jpg" alt="">
        </div>
        <div class="col-md-4 mb-5">
            <img class="img-kegiatan rounded mx-auto d-block w-100" src="/assets/img/ruangan/lab-komp.jpg" alt="">
        </div>
        <div class="col-md-4 mb-5">
            <img class="img-kegiatan rounded mx-auto d-block w-100" src="/assets/img/ruangan/perpustakaan.jpg" alt="">
        </div>
    </div>

    <h5 class=" mb-4" style="color:#ff781f">KEADAAN RUANG</h5>
    <div class="row">
        <div class="col-md-6">
        <p>1.	Ruang Yayasan</p>
        <p>2.	Ruang Kepala Sekolah atau Pimpinan</p>
        <p>3.	Ruang TU</p>
        <p>4.	Ruang Kelas</p>
        <p>5.	Ruang OSIS</p>
        <p>6.	Ruang UKS</p>
        <p>7.	Ruang Perpustakaan</p>
        </div>
        <div class="col-md-6">
        <p>8.	Ruang lab komputer/ bahasa/ audio visual</p>
        <p>9.	Ruang lab science</p>
        <p>10.	Masjid Baitul Ilmi</p>
        <p>11.	Kamar mandi/ toilet</p>
        <p>12.	Kantin</p>
        <p>13.	Gudang</p>
        <p>14.	Parkiran</p>
        </div>
    </div>
</div>

<div class="container-fluid section text-section">
  <h1 class="section-title section-title-orange pt-3 pb-5">FOTO</h1>
  <div class="row justify-content-center">
    <div class="col-md-4 col-6 mb-5">
      <div class="card">
        <img class="card-img-top" src="/assets/img/sma/foto-1.jpeg" alt="Card image cap">
      </div>
    </div>
    <div class="col-md-4 col-6 mb-5">
      <div class="card">
        <img class="card-img-top" src="/assets/img/sma/foto-2.jpeg" alt="Card image cap">
      </div>
    </div>
    <div class="col-md-4 col-6 mb-5">
      <div class="card">
        <img class="card-img-top" src="/assets/img/sma/foto-3.jpeg" alt="Card image cap">
      </div>
    </div>
    <div class="col-md-4 col-6 mb-5">
      <div class="card">
        <img class="card-img-top" src="/assets/img/sma/foto-4.jpeg" alt="Card image cap">
      </div>
    </div>
    <div class="col-md-4 col-6 mb-5">
      <div class="card">
        <img class="card-img-top" src="/assets/img/sma/foto-5.jpeg" alt="Card image cap">
      </div>
    </div>
    <div class="col-md-4 col-6 mb-5">
      <div class="card">
        <img class="card-img-top" src="/assets/img/sma/foto-6.jpeg" alt="Card image cap">
      </div>
    </div>
  </div>
</div>
@endsection