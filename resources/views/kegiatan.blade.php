@extends('layouts.main')
@section('title', 'Kegiatan')
@section('content')


<div class="container-fluid head-bg">
  <div class="row">
    <img src="/assets/img/kegiatan/head-1.jpeg" alt="">
  </div>
</div>
<div class="container-fluid section text-section" style="">
    <h1 class="section-title section-title-orange pt-3">KEGIATAN</h1>
    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <div class="row justify-content-center">
        <div class="col-md-4">
            <img class="img-kegiatan rounded mx-auto d-block" src="/assets/img/kegiatan/1.jpeg" style="" alt="">
            <p class="img-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
        </div>
        <div class="col-md-4">
            <img class="img-kegiatan rounded mx-auto d-block " src="/assets/img/kegiatan/2.jpeg" style="" alt="">
            <p class="img-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
        </div>
        <div class="col-md-4">
            <img class="img-kegiatan rounded mx-auto d-block " src="/assets/img/kegiatan/3.jpeg" style="" alt="">
            <p class="img-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="w-100 d-block pb-3">
            <div class="kegiatan-button px-2 py-2">
                <button class="button-no-outline navbar-toggler w-100 text-left" type="button" data-toggle="collapse" data-target="#TogglerSMP" aria-controls="TogglerSMP" aria-expanded="false" aria-label="Toggle navigation">
                + KEGIATAN SMP
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
                + KEGIATAN SMA
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
                + KEGIATAN SMK
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
    <h1 class="section-title section-title-orange pt-4">EVENTS</h1>
    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <div class="row justify-content-center">
        <div class="col-md-4">
            <img class="img-kegiatan rounded mx-auto d-block w-100" src="/assets/img/kegiatan/4.jpeg" style="" alt="">
            <p class="img-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
        </div>
        <div class="col-md-4">
            <img class="img-kegiatan rounded mx-auto d-block w-100" src="/assets/img/kegiatan/5.jpeg" style="" alt="">
            <p class="img-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
        </div>
        <div class="col-md-4">
            <img class="img-kegiatan rounded mx-auto d-block w-100" src="/assets/img/kegiatan/6.jpeg" style="" alt="">
            <p class="img-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
        </div>
    </div>
</div>
@endsection