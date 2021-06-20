@extends('layouts.main')
@section('title', 'SMK KAPIN | YPT KAPIN ')
@section('metatags')
<!-- og meta tag -->
<meta property="og:title" content="YPT KAPIN | SMK">
<meta property="og:description" content="Selamat Datang di Website YPT KAPIN!">
<meta property="og:image" content="/assets/logo.png">
<meta property="og:url" content="https://kapin.or.id/smk">

<!-- twitter meta tag -->
<meta property="twitter:title" content="YPT KAPIN | SMK">
<meta property="twitter:description" content="Selamat Datang di Website YPT KAPIN!">
<meta property="twitter:image" content="/assets/logo.png">
<meta property="twitter:url" content="http://kapin.or.id/smk">
@endsection
@section('content')


<div class="container-fluid head-bg">
<h5 class="section-title text-center">SMK KAPIN</h5>
  <div class="row justify-content-center">
    <div class="col-md-11" style="padding:0" >
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" style="background: #e3e5e5">
          <div class="carousel-item active">
            <img class="d-block w-100" src="https://via.placeholder.com/400x600?text=400x600+Half+Page+Ad" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://via.placeholder.com/400x600?text=400x600+Half+Page+Ad" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://via.placeholder.com/400x600?text=400x600+Half+Page+Ad" alt="Third slide">
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
    <div class="col-md-11" style="background:#c4c4c4">
      <ul class="nav nav-kompetensi justify-content-center">
        <li class="nav-item">
          <a class="nav-link" href="/smk/tkj">TKJ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link">/</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/smk/titl">TITL</a>
        </li>
        <li class="nav-item">
          <a class="nav-link">/</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/smk/tkr">TKR</a>
        </li>
        <li class="nav-item">
          <a class="nav-link">/</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/smk/multimedia">MULTIMEDIA</a>
        </li>
        <li class="nav-item">
          <a class="nav-link">/</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/smk/teknik-mesin">TEKNIK MESIN</a>
        </li>
      </ul>
    </div>
  </div>
</div>

<div class="container-fluid section text-section" style="">
    <h1 class="section-title section-title-orange pt-3">SAMBUTAN SMK KAPIN</h1>
    <blockquote class="blockquote sambutan">
        <p class="mb-0"><strong>Assalammualaykum warahmatullah wabarakatuh,</strong></p>
        <p class="mb-0"><strong>Salam sejahtera untuk kita semua</strong></p>
        <p class="mb-5"><strong>Selamat datang di Web YPT KAPIN</strong></p>
        <p class="mb-3">Kami unit SMK KAPIN menyambut baik dengan adanya web YPT KAPIN. Semoga informasi yang dibutuhkan masyarakat yang ingin mengetahui lebih dalam tentang SMK KAPIN dapat terpenuhi melalui web YPT KAPIN.</p>
        <p class="mb-3">SMK KAPIN, terdiri dari 5 Kompetensi Keahlian, yaitu</p>
        <ol class="mb-3">
          <li>Teknik Kendaraan Ringan Otomotif</li>
          <li>Teknik Instalasi Tenaga Listrik</li>
          <li>Teknik Pemesinan</li>
          <li>Teknik Komputer dan Jaringan</li>
          <li>Multimedia</li>
        </ol>
        <p class="mb-3">Memiliki akreditasi A dan tenaga pendidik lulusan S1 dan S2 yang kompeten dibidangnya. SMK KAPIN bekerja sama dengan dunia industri dalam kegiatan praktek kerja lapangan, yaitu</p>
        <ol class="mb-3" type="a">
          <li>PT. Honda Megatama</li>
          <li>PT. Piranti</li>
          <li>PT. Durian CCTV</li>
          <li>Louie Digital Printing</li>
          <li>Rembo Printing</li>
          <li>Maloho Digital Printing</li>
          <li>RS. Tebet</li>
          <li>United Traktor</li>
          <li>PT. Yokatta</li>
          <li>Dan lain sebagainya</li>
        </ol>
        <p class="mb-3">Selain itu banyak prestasi yang sudah diraih oleh siswa/i SMK KAPIN baik ditingkat wilayah maupun nasional. Prestasi yang diraih dalam bidang seni, budaya dan olahraga. Pendidikan karakter menjadi hal yang utama. Lulusan yang berilmu dan bertaqwa kepada Tuhan YME menjadi tujuannya.</p>
        <p class="mb-0"><strong>Bersama SMK KAPIN...</strong></p>
        <p class="mb-0"><strong>Belajar</strong></p>
        <p class="mb-0"><strong>Berkarya</strong></p>
        <p class="mb-3"><strong>Juara</strong></p>
        <footer class="blockquote-footer sambutan-footer">SMK Kapin</footer>
    </blockquote>
</div>

<div class="container-fluid section text-section">
    <h1 class="section-title section-title-orange pt-3">VISI & MISI</h1>
    <h5 class="mt-5" style="color:#ff781f"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> VISI</h5>
    <p class="mb-5">Menghasilkan lulusan yang berakhlak mulia, unggul dalam kompetensi kejuruan dan penguasaan teknologi untuk menghadapi persaingan global dan masyarakat MEA (Masyarakat Ekonomi Asean) serta melanjutkan ke perguruan tinggi</p>
    
    <h5 class="mt-5" style="color:#ff781f"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> MISI</h5>
    <p class="mb-2">Untuk mewujudkan visi tersebut diatas, SMK KAPIN JAKARTA mempunyai misi sebagai berikut:</p>
    <ol class="text-list">
      <li>Melaksanakan pembelajaran yang berorientasi dan merujuk pada kurikulum nasional dan kebutuhan pasar kerja agar ada link and match</li>
      <li>Melaksanakan pembelajaran dan kegiatan yang berorientasi kepada pembentukan karakter akhlak mulia, budi pekerti serta etos kerja</li>
      <li>Melaksanakan pembelajaran yang berorientasi kepada kemampuan berfikir, objektif, logis, kritis dan sitematis</li>
      <li>Melaksanakan pembelajaran kewirausahaan dengan membentuk jiwa enterpreneurship yang profesional</li>
    </ol>
    <p class="mb-5">
    <strong># PERCAYA DIRI MERAIH PRESTASI #</strong>
    </p>
</div>


<div class="container-fluid section text-section" >
    <h1 class="section-title section-title-orange pt-3">KOMPETENSI</h1>
    <div class="row justify-content-center">
      <div class="col-md-6 pb-4">
      <a href="/smk/tkj">
        <div class="card bg-dark text-white kompetensi-card zoom">
          <img class="card-img kompetensi-img" src="/assets/img/smk/komp-tkj.jpg" alt="Card image">
          <div class="card-img-overlay" style="background: rgba(0,0,0,0.5)">
              <h5 class="card-title kompetensi-text">TEKNIK KOMPUTER DAN JARINGAN</h5>
          </div>
        </div>
      </a>
      </div>
      <div class="col-md-6 pb-4">
      <a href="/smk/titl">
        <div class="card bg-dark text-white kompetensi-card zoom">
          <img class="card-img kompetensi-img" src="/assets/img/smk/komp-titl.jpeg" alt="Card image">
          <div class="card-img-overlay" style="background: rgba(0,0,0,0.5)">
              <h5 class="card-title kompetensi-text">TEKNIK INSTALASI TENAGA LISTRIK</h5>
          </div>
        </div>
      </a>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-6 pb-4">
      <a href="/smk/tkr">
        <div class="card bg-dark text-white kompetensi-card zoom">
          <img class="card-img kompetensi-img" src="/assets/img/smk/komp-tkr.jpeg" alt="Card image">
          <div class="card-img-overlay" style="background: rgba(0,0,0,0.5)">
              <h5 class="card-title kompetensi-text">TEKNIK KENDARAAN RINGAN</h5>
          </div>
        </div>
      </a>
      </div>
      <div class="col-md-6 pb-4">
      <a href="/smk/multimedia">
        <div class="card bg-dark text-white kompetensi-card zoom">
          <img class="card-img kompetensi-img" src="/assets/img/smk/komp-mm.jpeg" alt="Card image">
          <div class="card-img-overlay" style="background: rgba(0,0,0,0.5)">
              <h5 class="card-title kompetensi-text">MULTIMEDIA</h5>
          </div>
        </div>
      </a>
      </div>
      <div class="col-md-6 pb-4">
      <a href="/smk/teknik-mesin">
        <div class="card bg-dark text-white kompetensi-card zoom">
          <img class="card-img kompetensi-img" src="/assets/img/smk/komp-tm.jpeg" alt="Card image">
          <div class="card-img-overlay" style="background: rgba(0,0,0,0.5)">
              <h5 class="card-title kompetensi-text">TEKNIK MESIN</h5>
          </div>
        </div>
      </a>
      </div>
    </div>
</div>

<div class="container-fluid section text-section">
  <h1 class="section-title section-title-orange pt-3 pb-4">PROFIL PENDIDIK</h1>
  @include('pendidik_smk')
</div>

<div class="container-fluid section text-section" style="">
    <h1 class="section-title section-title-orange pt-3">SARANA & PRASARANA</h1>
    <h5 class="mt-5" style="color:#ff781f">LOKASI</h5>
    <p class="mb-5">Lokasi terletak di JL. Raya KAPIN Kelurahan Pondok Kelapa Kecamatan Duren Sawit, Kota Administrasi Jakarta Timur dengan luas bangunan sebesar 2.617 m2.</p>
    
    <h5 class="mt-5" style="color:#ff781f">KONDISI BANGUNAN</h5>
    <p class="mb-5">Secara umum kondisi bangunan cukup baik yang terdiri dari 2 bangunan utama, satu bangunan berlantai tiga dan satu bangunan berlantai dua. Diantara bangunan terdapat lapangan olah raga dengan luas kurang lebih 12 x 25 m2.</p>

    <div class="row justify-content-center">
        <div class="col-md-4 mb-5">
            <img class="img-kegiatan rounded mx-auto d-block w-100" src="/assets/img/ruangan/lapangan.jpg" style="" alt="">
        </div>
        <div class="col-md-4 mb-5">
            <img class="img-kegiatan rounded mx-auto d-block w-100" src="/assets/img/ruangan/lab-komp.jpg" style="" alt="">
        </div>
        <div class="col-md-4 mb-5">
            <img class="img-kegiatan rounded mx-auto d-block w-100" src="/assets/img/ruangan/perpustakaan.jpg" style="" alt="">
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

<div class="container-fluid section text-section foto-section">
  <h1 class="section-title section-title-orange pt-3 pb-5">FOTO</h1>
  <div class="row justify-content-center">
    <div class="col-md-4 col-12 mb-5">
      <div class="card" style="">
        <img class="card-img-top" src="/assets/img/smk/foto-1.jpeg" alt="Card image cap" style="height:200px">
      </div>
    </div>
    <div class="col-md-4 col-12 mb-5">
      <div class="card">
        <img class="card-img-top" src="/assets/img/smk/foto-2.jpeg" alt="Card image cap" style="height:200px">
      </div>
    </div>
    <div class="col-md-4 col-12 mb-5">
      <div class="card">
        <img class="card-img-top" src="/assets/img/smk/foto-3.jpeg" alt="Card image cap" style="height:200px">
      </div>
    </div>
    <div class="col-md-4 col-12 mb-5">
      <div class="card">
        <img class="card-img-top" src="/assets/img/smk/foto-4.jpeg" alt="Card image cap" style="height:200px">
      </div>
    </div>
    <div class="col-md-4 col-12 mb-5">
      <div class="card">
        <img class="card-img-top" src="/assets/img/smk/foto-5.jpeg" alt="Card image cap" style="height:200px">
      </div>
    </div>
    <div class="col-md-4 col-12 mb-5">
      <div class="card">
        <img class="card-img-top" src="/assets/img/smk/foto-6.jpeg" alt="Card image cap" style="height:200px">
      </div>
    </div>
  </div>
</div>
@endsection