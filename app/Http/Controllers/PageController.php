<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }
    public function about(){
        return '1941720224_Muhammad Hajar Priatmaja';
    }
    public function articles($id){
        return 'Halaman Artikel Dengan Id'. $id;
    }
}
