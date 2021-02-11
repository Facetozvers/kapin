@extends('layouts.main')
@section('title', 'Yayasan KAPIN')
@section('content')


<div class="container-fluid head-bg">
  <div class="row">
    <img src="/assets/img/yayasan/head-1.jpeg" alt="">
  </div>
</div>
<div class="container-fluid section text-section" style="">
    <h1 class="section-title section-title-orange pt-3">TENTANG KAPIN</h1>
    <p class="mb-5">Yayasan Pendidikan Kader Pembangunan Indonesia (YP KAPIN) didirikan sejak tahun 1966 di Jakarta, namun sejak tahun 2008 dilakukan perubahan menjadi Yayasan Pendidikan Teknologi Kader Pembangunan Indonesia (YPT KAPIN). Nama tersebut diambil dari nama sebuah perusahaan PT Kapal Indonesia yang berada di daerah Tanjung Priuk Jakarta Utara, nama ini diambil berdasarkan dukungan dan persetujuan yang diberikan oleh pimpinan PT Kapal Indonesia. <br><br>
    YPT KAPIN bergerak dibidang pendidikan umum dan pendidikan teknologi. Bermula dari Sekolah Teknik Menengah (STM) yang berlokasi di Jln. Gatot Subroto, Pancoran, Jakarta Selatan. Tahun 1980 YPT KAPIN mendirikan sekolah untuk pendidikan umum tingkat SMP dan SMA di wilayah kalimalang, Pondok Kelapa, Jakarta Timur. Hingga saat ini YPT KAPIN telah berkiprah di dunia pendidikan selama 54 tahun menaungi Sekolah lanjutan tingkat SMP, SMA, dan SMK dan telah meluluskan ribuan siswa.
    </p>
</div>

<div class="container-fluid section text-section" style="">
    <h1 class="section-title section-title-orange pt-3">VISI & MISI</h1>
    <h5 class="mt-5" style="color:#ff781f">VISI</h5>
    <p class="mb-5">Yayasan Pendidikan KAPIN bertujuan menghasilkan lulusan yang taqwa, cerdas, terampil, kreatif, mandiri, dan disiplin untuk mengarah pada ISO 9001.</p>
    
    <h5 class="mt-5" style="color:#ff781f">MISI</h5>
    <p class="mb-5">1. Menyelenggarakan kegiatan-kegiatan pendidikan dalam rangka peningkatan IMTAQ bagi Siswa, Guru, dan Karyawan.<br>2. Meningkatkan pelaksanaan kegiatan Belajar Mengajar dengan melengkapi prasarana dan sarana serta kualitas SDM.<br>3. Menyelenggarakan kegiatan-kegiatan pendidikan yang menunjang keterampilan serta seangat wira usaha agar lulusan dapat mandiri dan kreatif.<br>4. Menyelenggarakan kegiatan-kegiatan baik kurikuler maupun ekstrakulikuler dalam rangka membentuk sikap disiplin.</p>
</div>

<div class="container-fluid section " style="background: #ff781f">
  <h1 class="section-title section-title-white text-center">PENGURUS YPT KAPIN</h1>
    <div class="row justify-content-center">
      <div class="col-md-3">
        <div class="card" style="margin-bottom:4vh">
            <img class="tingkat-img card-img" src="https://schooloflanguages.sa.edu.au/wp-content/uploads/2017/11/placeholder-profile-sq.jpg" alt="Bologna">
            <div class="card-img-overlay text-white d-flex flex-column justify-content-end" style="">
                <div class="d-block" style="position : absolute;bottom   : 0;left:0;width:100%;background-color: rgba(0, 0, 0, 0.4)">
                    <h5 class="pengurus-name card-title text-center mt-3" style="margin:0">Maryana Muchtar, S.H</h5>
                    <p class="pengurus-tingkat text-center mb-3" style="margin:0">Ketua Yayasan</p>
                </div>
            </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card" style="margin-bottom:4vh">
            <img class="tingkat-img card-img" src="https://schooloflanguages.sa.edu.au/wp-content/uploads/2017/11/placeholder-profile-sq.jpg" alt="Bologna">
            <div class="card-img-overlay text-white d-flex flex-column justify-content-end" style="">
                <div class="d-block" style="position : absolute;bottom   : 0;left:0;width:100%;background-color: rgba(0, 0, 0, 0.4)">
                    <h5 class="pengurus-name card-title text-center mt-3" style="margin:0">Drs. Izzudin Madjid</h5>
                    <p class="pengurus-tingkat text-center mb-3" style="margin:0">Sekretaris</p>
                </div>
            </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card" style="margin-bottom:4vh">
            <img class="tingkat-img card-img" src="https://schooloflanguages.sa.edu.au/wp-content/uploads/2017/11/placeholder-profile-sq.jpg" alt="Bologna">
            <div class="card-img-overlay text-white d-flex flex-column justify-content-end" style="">
                <div class="d-block" style="position : absolute;bottom   : 0;left:0;width:100%;background-color: rgba(0, 0, 0, 0.4)">
                    <h5 class="pengurus-name card-title text-center mt-3" style="margin:0">Sri Yati</h5>
                    <p class="pengurus-tingkat text-center mb-3" style="margin:0">Bendahara</p>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>

<div class="container-fluid section text-section" style="">
    <h1 class="section-title section-title-orange pt-3 pb-4">LEMBAGA PENDIDIKAN</h1>
    <div class="row justify-content-center">
        <div class="w-100 d-block pb-3">
            <div class="kegiatan-button px-2 py-2">
                <button class="button-no-outline navbar-toggler w-100 text-left" type="button" data-toggle="collapse" data-target="#TogglerSMP" aria-controls="TogglerSMP" aria-expanded="false" aria-label="Toggle navigation">
                + SMP KAPIN
                </button>
            </div>
            <div class="kegiatan-button-content collapse" id="TogglerSMP">
                <div class=" p-4">
                    <h5 class="text-dark h4">Collapsed content</h5>
                    <span class="text-muted">Toggleable via the navbar brand.</span>
                </div>
            </div>
        </div>
        <div class="w-100 d-block pb-3">
            <div class="kegiatan-button px-2 py-2">
                <button class="button-no-outline navbar-toggler w-100 text-left" type="button" data-toggle="collapse" data-target="#TogglerSMA" aria-controls="TogglerSMA" aria-expanded="false" aria-label="Toggle navigation">
                + SMA KAPIN
                </button>
            </div>
            <div class="kegiatan-button-content collapse" id="TogglerSMA">
                <div class=" p-4">
                    <h5 class="text-dark h4">Collapsed content</h5>
                    <span class="text-muted">Toggleable via the navbar brand.</span>
                </div>
            </div>
        </div>
        <div class="w-100 d-block pb-3">
            <div class="kegiatan-button px-2 py-2">
                <button class="button-no-outline navbar-toggler w-100 text-left" type="button" data-toggle="collapse" data-target="#TogglerSMK" aria-controls="TogglerSMK" aria-expanded="false" aria-label="Toggle navigation">
                + SMK KAPIN
                </button>
            </div>
            <div class="kegiatan-button-content collapse" id="TogglerSMK">
                <div class=" p-4">
                    <h5 class="text-dark h4">Collapsed content</h5>
                    <span class="text-muted">Toggleable via the navbar brand.</span>
                </div>
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
        <p>4.	Ruang UKS</p>
        <p>5.	Ruang Perpustakaan</p>
        <p>6.	Ruang lab komputer/ bahasa/ audio visual</p>
        </div>
        <div class="col-md-6">
        <p>7.	Ruang lab science</p>
        <p>8.	Masjid Baitul Ilmi</p>
        <p>9.	Kamar mandi/ toilet</p>
        <p>10.	Kantin</p>
        <p>11.	Gudang</p>
        <p>12.	Parkiran</p>
        </div>
    </div>

</div>
@endsection