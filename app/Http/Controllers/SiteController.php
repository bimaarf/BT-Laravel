<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Kategori;
use App\Models\User;
use App\Models\Trending;
use App\Models\Kontak;

class SiteController extends Controller
{
    public function beranda()
    {
        return view('beranda'); //lokasi file resource/view/beranda.php
    }
    public function dashboard()
    {
        $totalBerita = Berita::count();
        $totalKategori = Kategori::count();
        $totalUser = User::count();
        $totalKontak = Kontak::count();
        $totalTrend = Trending::count();
        return view('dashboard',compact('totalBerita', 'totalKategori', 'totalUser', 'totalKontak', 'totalTrend')); //lokasi file resource/view/beranda.php
    }
}
