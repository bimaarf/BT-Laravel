<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Kategori;
use App\Models\Trending;
use App\Models\Youtube;
use App\Models\User;

class AdminController extends Controller
{
    public function indexBerita()
    {
        $berita = Berita::simplePaginate(10);
        return view('admin.berita.dashboard', compact('berita'));
    }

    public function indexKategori()
    {
        $kategori = Kategori::simplePaginate(10);
        return view('admin.kategori.dashboard', compact('kategori'));
    }

    public function indexTrending()
    {
        $trending = Trending::orderBy('id', 'DESC')->simplePaginate(10);
        return view('admin.trending.dashboard', compact('trending'));
    }

    public function indexYoutube()
    {
        $youtube = Youtube::orderBy('id', 'DESC')->simplePaginate(10);
        return view('admin.youtube.dashboard', compact('youtube'));
    }
    
}
