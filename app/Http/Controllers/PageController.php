<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('index');
    }
    
    public function kegiatan(){
        return view('kegiatan');
    }

    public function contact(){
        return view('contact');
    }

    public function yayasan(){
        return view('yayasan');
    }

    public function smp(){
        return view('smp');
    }

    public function sma(){
        return view('sma');
    }

    public function smk(){
        return view('smk.index');
    }

    public function tkj(){
        return view('smk.tkj');
    }

    public function titl(){
        return view('smk.titl');
    }

    public function tkr(){
        return view('smk.tkr');
    }

    public function multimedia(){
        return view('smk.multimedia');
    }
}
