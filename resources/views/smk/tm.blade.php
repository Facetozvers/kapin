@extends('layouts.main')
@section('title', 'Multimedia | SMK KAPIN')
@section('content')


<div class="container-fluid head-bg">
  <div class="row justify-content-center" style="padding-top:2vh">
    <div class="col-md-12 p-0">
        <div class="card text-white">
        <img class="card-img" src="/assets/img/smp/head-1.jpeg" alt="Card image" style="padding:0">
        <div class="card-img-overlay" style="background: rgba(0,0,0,0.5)">
            <h5 class="card-title kompetensi-head-text">TEKNIK MESIN</h5>
        </div>
        </div>
    </div>
    <div class="col-md-12" style="background:#c4c4c4">
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
          <a class="nav-link active" href="/smk/teknik-mesin">TEKNIK MESIN</a>
        </li>
      </ul>
    </div>
  </div>
</div>

<div class="container-fluid section text-section">
    <h1 class="section-title section-title-orange pt-3">VISI & MISI</h1>
    <h5 class="mt-5" style="color:#ff781f"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> VISI</h5>
    <p class="mb-5">Menjadi Sekolah Unggulan Yang Menghasilkan Tamatan Yang Berkualitas Serta Melahirkan Teknisi Teknik Pemesinan Yang Kompeten Dan Mandiri Melalui Pengembangan Iptek dan Imtaq.</p>
    
    <h5 class="mt-5" style="color:#ff781f"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> MISI</h5>
    <ol class="text-list">
      <li>Melaksanakan Layanan prima Terhadap Siswa Dalam Semua Aspek Sarana Dan Prasarana Untuk Menghasilkan Tenaga kerja Yang kompeten dan Mandiri</li>
      <li>Meningkatkan Kualitas Tamatan Yang Sesuai Dengan Standar Kompeten Nasional (SKN) Dalam Menghadapi Era Global</li>
      <li>Meningkatkan Mutu Sumber Daya Manusia Melalui Penerapan Iptek dan Imtaq</li>
      <li>Melaksanakan KBM dan Kegiatan Extrakurikuler Untuk Mengembangkan Minat dan Bakat Siswa</li>
    </ol>
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
    <div class="col-md-4 mb-5">
      <div class="card" style="">
        <img class="card-img-top" src="/assets/img/smk/tm/foto-1.jpeg" alt="Card image cap">
      </div>
    </div>
    <div class="col-md-4 mb-5">
      <div class="card" style="">
        <img class="card-img-top" src="/assets/img/smk/tm/foto-2.jpeg" alt="Card image cap">
      </div>
    </div>
    <div class="col-md-4 mb-5">
      <div class="card" style="">
        <img class="card-img-top" src="/assets/img/smk/tm/foto-3.jpeg" alt="Card image cap">
      </div>
    </div>
    <div class="col-md-4 mb-5">
      <div class="card" style="">
        <img class="card-img-top" src="/assets/img/smk/tm/foto-4.jpeg" alt="Card image cap">
      </div>
    </div>
    <div class="col-md-4 mb-5">
      <div class="card" style="">
        <img class="card-img-top" src="/assets/img/smk/tm/foto-5.jpeg" alt="Card image cap">
      </div>
    </div>
    <div class="col-md-4 mb-5">
      <div class="card" style="">
        <img class="card-img-top" src="/assets/img/smk/tm/foto-6.jpeg" alt="Card image cap">
      </div>
    </div>
  </div>
</div>
@endsection