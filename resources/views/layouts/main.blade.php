<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="/assets/font-awesome/css/font-awesome.min.css">

        <title>@yield('title')</title>
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <div class="row">
                <div class="col-md-5">
                    <img src="/assets/logo.png" height="150" width="150" alt="">
                </div>
                <div class="col-md-5 mt-1">
                    <p class="logo-text"><span class="header">KAPIN</span><br>YAYASAN PENDIDIKAN TEKNOLOGI<br>KADER PEMBANGUNAN INDONESIA</p>
                </div>
            </div>
            
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse flex-column" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Yayasan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kegiatan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
            <ul class="navbar-nav flex-row mb-2 ml-auto">
                <li class="nav-item pr-1">
                    <a class="nav-link secondary py-1 pr-4 pl-4 text-center" href="#">SMP</a>
                </li>
                <li class="nav-item pr-1">
                    <a class="nav-link secondary py-1 pr-4 pl-4 text-center" href="#">SMA</i></a>
                </li>
                <li class="nav-item pr-1">
                    <a class="nav-link secondary py-1 pr-4 pl-4 text-center" href="#">SMK</i></a>
                </li>
            </ul>
        </div>
    </nav>
    @yield('content')
    <footer class="container-fluid section mt-5" style="background:#ff781f; margin-bottom:0;padding-top:30px;padding-bottom:30px">
        <div class="footer-content">
            <p class="logo-text"><span class="header-white">KAPIN</span><br>YAYASAN PENDIDIKAN TEKNOLOGI<br>KADER PEMBANGUNAN INDONESIA</p>
            <div class="social-media">
                <i class="icon fa fa-facebook-official"></i>
                <i class="icon fa fa-linkedin-square"></i>
                <i class="icon fa fa-youtube-play"></i>
            </div>
            <div class="row footer-components">
                <div class="col-md-1 col-1 text-center">
                    <i class="icon fa fa-map-marker"></i>
                </div>
                <div class="col-md-6 col-10">
                    <p>Jl Raya Kalimalang Kel. Pondok Kelapa<br>Kec. Duren Sawit, Kota Jakarta Timur<br>DKI Jakarta</p>
                </div>
                </div>
                <div class="row footer-components" style="margin-top:0">
                <div class="col-md-1 col-1 text-center">
                    <i class="icon fa fa-phone"></i>
                </div>
                <div class="col-md-6 col-10">
                    <p>021-86273812</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Optional JavaScript -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>