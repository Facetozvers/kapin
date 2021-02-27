@extends('layouts.main')
@section('title', 'SMK KAPIN')
@section('content')


<div class="container-fluid head-bg">
  <div class="row justify-content-center" style="padding-top:2vh">
    <div class="col-md-12 p-0">
        <div class="card text-white">
        <img class="card-img" src="/assets/img/smp/head-1.jpeg" alt="Card image" style="padding:0">
        <div class="card-img-overlay" style="background: rgba(0,0,0,0.5)">
            <h5 class="card-title head-text">SMK KAPIN</h5>
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
      </ul>
    </div>
  </div>
</div>

<div class="container-fluid section text-section" >
    <h1 class="section-title section-title-orange pt-3">VISI & MISI</h1>
    <h5 class="mt-5" style="color:#ff781f">VISI</h5>
    <p class="mb-5">Menghasilkan lulusan yang berakhlak mulia, unggul dalam kompetensi kejuruan dan penguasaan teknologi untuk menghadapi persaingan global dan masyarakat MEA (Masyarakat Ekonomi Asean) serta melanjutkan ke perguruan tinggi</p>
    
    <h5 class="mt-5" style="color:#ff781f">MISI</h5>
    <p class="mb-5">
    Untuk mewujudkan visi tersebut diatas, SMK KAPIN JAKARTA mempunyai misi sebagai berikut:
    <br>1.	Melaksanakan pembelajaran yang berorientasi dan merujuk pada kurikulum nasional dan kebutuhan pasar kerja agar ada link and match
    <br>2.	Melaksanakan pembelajaran dan kegiatan yang berorientasi kepada pembentukan karakter akhlak mulia, budi pekerti serta etos kerja
    <br>3.	Melaksanakan pembelajaran yang berorientasi kepada kemampuan berfikir, objektif, logis, kritis dan sitematis
    <br>4.	Melaksanakan pembelajaran kewirausahaan dengan membentuk jiwa enterpreneurship yang profesional

    </p>
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
          <img class="card-img kompetensi-img" src="https://smkn1wayserdang.sch.id/media_library/posts/large/3ac32111ab690e6caa19b590f6dbf25b.jpg" alt="Card image">
          <div class="card-img-overlay" style="background: rgba(0,0,0,0.5)">
              <h5 class="card-title kompetensi-text">TEKNIK KOMPUTER DAN JARINGAN</h5>
          </div>
        </div>
      </a>
      </div>
      <div class="col-md-6 pb-4">
      <a href="/smk/titl">
        <div class="card bg-dark text-white kompetensi-card zoom">
          <img class="card-img kompetensi-img" src="https://www.smkmutumalang.sch.id/wp-content/uploads/2019/09/smk-mutu-gondanglegi-jurusan-kompetensi-keahlian-instalasi-tenaga-listrik-1024x683.jpg" alt="Card image">
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
          <img class="card-img kompetensi-img" src="https://1.bp.blogspot.com/-lTkEf3XkRqg/WgkC_PvvMQI/AAAAAAAACkA/MEM5wv1oI_gCoT4l3t1nErjHRq8Vro19wCEwYBhgL/s640/mesinbalap.JPG" alt="Card image">
          <div class="card-img-overlay" style="background: rgba(0,0,0,0.5)">
              <h5 class="card-title kompetensi-text">TEKNIK KENDARAAN RINGAN</h5>
          </div>
        </div>
      </a>
      </div>
      <div class="col-md-6 pb-4">
      <a href="/smk/multimedia">
        <div class="card bg-dark text-white kompetensi-card zoom">
          <img class="card-img kompetensi-img" src="https://smkn3merauke.sch.id/wp-content/uploads/2020/04/11.png" alt="Card image">
          <div class="card-img-overlay" style="background: rgba(0,0,0,0.5)">
              <h5 class="card-title kompetensi-text">MULTIMEDIA</h5>
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
          <img src="https://mtsn4malang.sch.id/wp-content/uploads/2019/08/placeholder-1.png" class="card-img-top" alt="...">
        </div>
      </div>
      <div class="col-md-4 col-5">
        <div class="card">
          <img src="https://mtsn4malang.sch.id/wp-content/uploads/2019/08/placeholder-1.png" class="card-img-top" alt="...">
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

<div class="container-fluid section text-section" style="">
    <h1 class="section-title section-title-orange pt-3">SARANA & PRASARANA</h1>
    <h5 class="mt-5" style="color:#ff781f">LOKASI</h5>
    <p class="mb-5">Lokasi terletak di JL. Raya KAPIN Kelurahan Pondok Kelapa Kecamatan Duren Sawit, Kota Administrasi Jakarta Timur dengan luas bangunan sebesar 2.617 m2.</p>
    
    <h5 class="mt-5" style="color:#ff781f">KONDISI BANGUNAN</h5>
    <p class="mb-5">Secara umum kondisi bangunan cukup baik yang terdiri dari 2 bangunan utama, satu bangunan berlantai tiga dan satu bangunan berlantai dua. Diantara bangunan terdapat lapangan olah raga dengan luas kurang lebih 12 x 25 m2.</p>

    <div class="row justify-content-center">
        <div class="col-md-4 mb-5">
            <img class="img-kegiatan rounded mx-auto d-block w-100" src="https://mtsn4malang.sch.id/wp-content/uploads/2019/08/placeholder-1.png" style="" alt="">
        </div>
        <div class="col-md-4 mb-5">
            <img class="img-kegiatan rounded mx-auto d-block w-100" src="https://mtsn4malang.sch.id/wp-content/uploads/2019/08/placeholder-1.png" style="" alt="">
        </div>
        <div class="col-md-4 mb-5">
            <img class="img-kegiatan rounded mx-auto d-block w-100" src="https://mtsn4malang.sch.id/wp-content/uploads/2019/08/placeholder-1.png" style="" alt="">
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
      <div class="card" style="">
        <img class="card-img-top" src="https://mtsn4malang.sch.id/wp-content/uploads/2019/08/placeholder-1.png" alt="Card image cap">
      </div>
    </div>
    <div class="col-md-4 col-6 mb-5">
      <div class="card" style="">
        <img class="card-img-top" src="https://mtsn4malang.sch.id/wp-content/uploads/2019/08/placeholder-1.png" alt="Card image cap">
      </div>
    </div>
    <div class="col-md-4 col-6 mb-5">
      <div class="card" style="">
        <img class="card-img-top" src="https://mtsn4malang.sch.id/wp-content/uploads/2019/08/placeholder-1.png" alt="Card image cap">
      </div>
    </div>
    <div class="col-md-4 col-6 mb-5">
      <div class="card" style="">
        <img class="card-img-top" src="https://mtsn4malang.sch.id/wp-content/uploads/2019/08/placeholder-1.png" alt="Card image cap">
      </div>
    </div>
    <div class="col-md-4 col-6 mb-5">
      <div class="card" style="">
        <img class="card-img-top" src="https://mtsn4malang.sch.id/wp-content/uploads/2019/08/placeholder-1.png" alt="Card image cap">
      </div>
    </div>
    <div class="col-md-4 col-6 mb-5">
      <div class="card" style="">
        <img class="card-img-top" src="https://mtsn4malang.sch.id/wp-content/uploads/2019/08/placeholder-1.png" alt="Card image cap">
      </div>
    </div>
  </div>
</div>
@endsection