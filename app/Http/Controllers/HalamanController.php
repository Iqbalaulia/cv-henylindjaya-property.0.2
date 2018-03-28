<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
  public function welcome(){
    return view('welcome');
  }
  public function galeri(){
    return view('halaman.galeri');
  }
  public function header(){
  	return view('halaman.header');
  }
  public function footer(){
  	return view('halaman.footer');
  }
}
