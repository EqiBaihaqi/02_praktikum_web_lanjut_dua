<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
{
 echo 'Selamat Datang';
}
public function about()
{
 echo 'Al Akbar Baihaqi 2141720162';
}
public function articles($id)
{
 echo 'Halaman Artikel dengan Id '.$id;
}
}
