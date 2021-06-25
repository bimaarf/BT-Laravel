<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Kategori;
use App\Models\User;

class AdminController extends Controller
{
    public function indexBerita()
    {
        $berita = Berita::simplePaginate(7);
        return view('admin.berita.dashboard', compact('berita'));
    }
    public function indexKategori()
    {
        $kategori = Kategori::simplePaginate(7);
        return view('admin.kategori.dashboard', compact('kategori'));
    }
    
}
