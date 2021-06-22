<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function beranda()
    {
        return view('beranda'); //lokasi file resource/view/beranda.php
    }
}
