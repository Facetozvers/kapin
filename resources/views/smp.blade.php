@extends('layouts.main')
@section('title', 'SMP KAPIN')
@section('content')


<div class="container-fluid head-carousel-bg">
  <h5 class="section-title text-center">SMP KAPIN</h5>
  <div class="row justify-content-center">
  <div class="col-md-11">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" style="background: #e3e5e5">
        <div class="carousel-item active">
          <img class="d-block w-100" src="/assets/img/smp/flyer-1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="/assets/img/smp/flyer-1.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="/assets/img/smp/flyer-1.jpg" alt="Third slide">
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

<div class="container-fluid section text-section" style="">
    <h1 class="section-title section-title-orange pt-3">VISI & MISI</h1>
    <h5 class="mt-5" style="color:#ff781f">VISI</h5>
    <p class="mb-5">Menjadikan SMP KAPIN sebagai Lembaga Pendidikan yang bermutu dan membentuk peserta Didik Memiliki pengetahuan dan berlandaskan Iman dan Taqwa serta menguasai Teknologi sebagai SDM yang berkualitas</p>
    
    <h5 class="mt-5" style="color:#ff781f">MISI</h5>
    <p class="mb-5">
    1.	Meningkatkan kegiatan pembelajaran yang berkualitas
    <br>2.	Meningkatkan sumber daya tenaga kependidikan dan peserta didik dalam menguasai IPTEK dan IMTAQ
    <br>3.	Mempersiapkan peserta didik untuk melanjutkan pendidikan ke jenjang yang lebih tinggi.
    <br>4.	Menciptakan kepedulian peserta didik terhadap lingkungan dan budaya lokal.
    <br>5.	Mempersiapkan peserta didik sebagai individu yang baik dan mandiri di tengah masyarakat.

    </p>
    <p class="mb-5">
    <strong># PERCAYA DIRI MERAIH PRESTASI #</strong>
    </p>
</div>


<div class="container-fluid section text-section" style="">
    <h1 class="section-title section-title-orange pt-3 pb-4">KURIKULUM</h1>
    <h5 class="pt-3 pb-4 text-center">STRUKTUR KURIKULUM SMP KAPIN JAKARTA (Kurikulum 2013)</h5>
    <img class="img-fluid d-block mx-auto" src="/assets/img/smp/kurikulum-smp.png" alt="">
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
    <div class="col-md-4 col-6 mb-5">
      <div class="card" style="">
        <img class="card-img-top" src="/assets/img/smp/foto-1.jpeg" alt="Card image cap">
      </div>
    </div>
    <div class="col-md-4 col-6 mb-5">
      <div class="card" style="">
        <img class="card-img-top" src="/assets/img/smp/foto-2.jpeg" alt="Card image cap">
      </div>
    </div>
    <div class="col-md-4 col-6 mb-5">
      <div class="card" style="">
        <img class="card-img-top" src="/assets/img/smp/foto-3.jpeg" alt="Card image cap">
      </div>
    </div>
    <div class="col-md-4 col-6 mb-5">
      <div class="card" style="">
        <img class="card-img-top" src="/assets/img/smp/foto-4.jpeg" alt="Card image cap">
      </div>
    </div>
    <div class="col-md-4 col-6 mb-5">
      <div class="card" style="">
        <img class="card-img-top" src="/assets/img/smp/foto-5.jpeg" alt="Card image cap">
      </div>
    </div>
    <div class="col-md-4 col-6 mb-5">
      <div class="card" style="">
        <img class="card-img-top" src="/assets/img/smp/foto-6.jpeg" alt="Card image cap">
      </div>
    </div>
  </div>
</div>
@endsection