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

    public function yayasan(){
        return view('yayasan');
    }

    public function smp(){
        return view('smp');
    }
}
