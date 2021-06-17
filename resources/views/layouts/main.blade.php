<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        @yield('metatags')

        <!-- favicon -->
        <link rel="apple-touch-icon" sizes="57x57" href="/assets/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/assets/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/assets/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/assets/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/assets/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/assets/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/assets/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/assets/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/assets/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/assets/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon/favicon-16x16.png">
        <link rel="manifest" href="/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/assets/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="/assets/font-awesome/css/font-awesome.min.css">

        <title>@yield('title')</title>
        <link rel="stylesheet" href="/css/style.css?v=4">
        @yield('csslink')
    </head>
    <body>
    <nav class="navbar navbar-expand-lg bg-light">
        <a class="navbar-brand" href="/">
            <div class="row justify-content-center">
                <div class="col-md-5 col-4">
                    <img src="/assets/logo.png" height="150" width="150" alt="">
                </div>
                <div class="col-md-5 mt-1 col-8">
                    <p class="logo-text" style="color:black"><span class="header">KAPIN</span><br>YAYASAN PENDIDIKAN TEKNOLOGI<br>KADER PEMBANGUNAN INDONESIA</p>
                </div>
            </div>
        </a>

        <div class="collapse navbar-collapse flex-column" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{(request()->is('/')) ? 'active' : '' }}">
                    <a class="nav-link" href="/">Beranda</a>
                </li>
                <li class="nav-item {{(request()->is('yayasan*')) ? 'active' : '' }}">
                    <a class="nav-link" href="/yayasan">Yayasan</a>
                </li>
                <li class="nav-item {{(request()->is('kegiatan*')) ? 'active' : '' }}">
                    <a class="nav-link" href="/kegiatan">Kegiatan</a>
                </li>
                <li class="nav-item {{(request()->is('blog*')) ? 'active' : '' }}">
                    <a class="nav-link" href="/blog">Blog</a>
                </li>
                <li class="nav-item {{(request()->is('kontak')) ? 'active' : '' }}">
                    <a class="nav-link" href="/kontak">Kontak</a>
                </li>
            </ul>
            <ul class="navbar-nav flex-row mb-2 ml-auto">
                <li class="nav-item pr-1 {{(request()->is('smp*')) ? 'active' : '' }}">
                    <a class="nav-link secondary py-1 pr-4 pl-4 text-center" href="/smp">SMP</a>
                </li>
                <li class="nav-item pr-1 {{(request()->is('sma*')) ? 'active' : '' }}">
                    <a class="nav-link secondary py-1 pr-4 pl-4 text-center" href="/sma">SMA</i></a>
                </li>
                <li class="nav-item pr-1 {{(request()->is('smk*')) ? 'active' : '' }}">
                    <a class="nav-link secondary py-1 pr-4 pl-4 text-center" href="/smk">SMK</i></a>
                </li>
            </ul>
        </div>
    </nav>
    <nav class="navbar navbar-expand-sm menu-navbar">
        <button type="button" class="" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-bars"> Menu</i>
        </button>
    </nav>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="navbar-nav ml-auto navbar-modal">
                        <li class="nav-item {{(request()->is('/')) ? 'active' : '' }}">
                            <a class="nav-link" href="/">Beranda</a>
                        </li>
                        <li class="nav-item {{(request()->is('smp*')) ? 'active' : '' }}">
                            <a class="nav-link" href="/smp">SMP</a>
                        </li>
                        <li class="nav-item {{(request()->is('sma*')) ? 'active' : '' }}">
                            <a class="nav-link" href="/sma">SMA</i></a>
                        </li>
                        <li class="nav-item {{(request()->is('smk*')) ? 'active' : '' }}">
                            <a class="nav-link" href="/smk">SMK</i></a>
                        </li>
                        <li class="nav-item {{(request()->is('yayasan*')) ? 'active' : '' }}">
                            <a class="nav-link" href="/yayasan">Yayasan</a>
                        </li>
                        <li class="nav-item {{(request()->is('kegiatan*')) ? 'active' : '' }}">
                            <a class="nav-link" href="/kegiatan">Kegiatan</a>
                        </li>
                        <li class="nav-item {{(request()->is('blog*')) ? 'active' : '' }}">
                            <a class="nav-link" href="/blog">Blog</a>
                        </li>
                        <li class="nav-item {{(request()->is('kontak')) ? 'active' : '' }}">
                            <a class="nav-link" href="/kontak">Kontak</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @yield('content')
    <footer class="container-fluid section mt-5 footer-body">
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
                <div class="col-md-8 col-10">
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