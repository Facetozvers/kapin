@extends('layouts.main')
@section('title', 'Yayasan KAPIN')
@section('content')
<div class="container-fluid head-bg">
    <h2 class="section-title text-center">Hubungi Kami</h2>
</div>

<div class="container-fluid section tingkat-section mt-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-lembaga mt-3">
                <img class="card-img-top contact-logo" src="/assets/logo-smp.jpg" alt="SMP KAPIN">
                <div class="card-body">
                    <h3 class="card-title text-center pb-3">SMP KAPIN</h3>
                    <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="phone-smp-tab" data-toggle="tab" href="#phone-smp" role="tab" aria-controls="phone-smp" aria-selected="true"><i class="fa fa-phone" style="font-size:30px" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="email-smp-tab" data-toggle="tab" href="#email-smp" role="tab" aria-controls="email-smp" aria-selected="false"><i class="fa fa-envelope" style="font-size:30px" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="whatsapp-smp-tab" data-toggle="tab" href="#whatsapp-smp" role="tab" aria-controls="whatsapp-smp" aria-selected="false"><i class="fa fa-whatsapp" style="font-size:30px" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                    <div class="tab-content pb-2" style="border-bottom: 1px solid #ff781f" id="myTabContent">
                        <div class="tab-pane fade show active" id="phone-smp" role="tabpanel" aria-labelledby="phone-smp-tab"><h5 class="text-center pt-3">021 - 8651158</h5></div>
                        <div class="tab-pane fade" id="email-smp" role="tabpanel" aria-labelledby="email-smp-tab"><h5 class="text-center pt-3">smpkapinjkt@gmail.com</h5></div>
                        <div class="tab-pane fade" id="whatsapp-smp" role="tabpanel" aria-labelledby="whatsapp-smp-tab"><h5 class="text-center pt-3">+62 88210842491</h5></div>
                    </div>
                    <h5 class="text-center mt-4 pb-2">Media Sosial</h5>
                    <div class="row justify-content-center">
                        <a class="zoom" target="_blank" href="https://www.instagram.com/smpkapin/"><i class="fa fa-instagram pr-4" style="font-size:40px;color:#383052" aria-hidden="true"></i></a>
                        <a class="zoom" target="_blank" href="https://www.youtube.com/channel/UCGDQuu70hcnv3ZO4ZWdyuDQ"><i class="fa fa-youtube" style="font-size:40px;color:#c4302b" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-lembaga mt-3">
                <img class="card-img-top contact-logo" src="/assets/logo-sma.jpg" alt="SMA KAPIN">
                <div class="card-body">
                    <h3 class="card-title text-center pb-3">SMA KAPIN</h3>
                    <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="phone-sma-tab" data-toggle="tab" href="#phone-sma" role="tab" aria-controls="phone-sma" aria-selected="true"><i class="fa fa-phone" style="font-size:30px" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="email-sma-tab" data-toggle="tab" href="#email-sma" role="tab" aria-controls="email-sma" aria-selected="false"><i class="fa fa-envelope" style="font-size:30px" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="whatsapp-sma-tab" data-toggle="tab" href="#whatsapp-sma" role="tab" aria-controls="whatsapp-sma" aria-selected="false"><i class="fa fa-whatsapp" style="font-size:30px" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                    <div class="tab-content pb-2" style="border-bottom: 1px solid #ff781f" id="myTabContent">
                        <div class="tab-pane fade show active" id="phone-sma" role="tabpanel" aria-labelledby="phone-sma-tab"><h5 class="text-center pt-3">021 - 8651158</h5></div>
                        <div class="tab-pane fade" id="email-sma" role="tabpanel" aria-labelledby="email-sma-tab"><h5 class="text-center pt-3">smakapin_jkt@yahoo.co.id</h5></div>
                        <div class="tab-pane fade" id="whatsapp-sma" role="tabpanel" aria-labelledby="whatsapp-sma-tab"><h5 class="text-center pt-3">+62 81585139962</h5></div>
                    </div>
                    <h5 class="text-center mt-4 pb-2">Media Sosial</h5>
                    <div class="row justify-content-center">
                        <a class="zoom" target="_blank" href="https://www.instagram.com/smakapinjakarta/"><i class="fa fa-instagram" style="font-size:40px;color:#383052" aria-hidden="true"></i></a>    
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-lembaga mt-3">
                <img class="card-img-top contact-logo" src="/assets/logo-smk.jpg" alt="SMK KAPIN">
                <div class="card-body">
                    <h3 class="card-title text-center pb-3">SMK KAPIN</h3>
                    <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="phone-smk-tab" data-toggle="tab" href="#phone-smk" role="tab" aria-controls="phone-smk" aria-selected="true"><i class="fa fa-phone" style="font-size:30px" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="email-smk-tab" data-toggle="tab" href="#email-smk" role="tab" aria-controls="email-smk" aria-selected="false"><i class="fa fa-envelope" style="font-size:30px" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="whatsapp-smk-tab" data-toggle="tab" href="#whatsapp-smk" role="tab" aria-controls="whatsapp-smk" aria-selected="false"><i class="fa fa-whatsapp" style="font-size:30px" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                    <div class="tab-content pb-2" style="border-bottom: 1px solid #ff781f" id="myTabContent">
                        <div class="tab-pane fade show active" id="phone-smk" role="tabpanel" aria-labelledby="phone-smk-tab"><h5 class="text-center pt-3">021 - 8648457</h5></div>
                        <div class="tab-pane fade" id="email-smk" role="tabpanel" aria-labelledby="email-smk-tab"><h5 class="text-center pt-3">uskapin2020@gmail.com</h5></div>
                        <div class="tab-pane fade" id="whatsapp-smk" role="tabpanel" aria-labelledby="whatsapp-smk-tab"><h5 class="text-center pt-3">+62 85217693554 / +62 81296891829</h5></div>
                    </div>
                    <h5 class="text-center mt-4 pb-2">Media Sosial</h5>
                    <div class="row justify-content-center">
                        <a class="zoom" target="_blank" href="https://www.instagram.com/smkkapinofficial/"><i class="fa fa-instagram" style="font-size:40px;color:#383052" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection