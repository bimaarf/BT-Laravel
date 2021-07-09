<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Kategori;
use App\Models\Trending;
use App\Models\Kontak;
use App\Models\User;
use App\Models\BeritaPending;

class AdminController extends Controller
{
    public function indexPending(Request $request)
    {
        if($request->has('search')){
            $berita_pending = BeritaPending::where('judul', 'LIKE', '%'.$request->search. '%')->simplePaginate(10);
            $berita_pending = BeritaPending::where('isi', 'LIKE', '%'.$request->search. '%')->simplePaginate(10);
        }else{
            $berita_pending = BeritaPending::orderBy('id', 'DESC')->simplePaginate(10);
        }
        return view('admin.pending.dashboard', compact('berita_pending'));
    }

    public function indexBerita(Request $request)
    {
        if($request->has('search')){
            $berita = Berita::where('judul', 'LIKE', '%'.$request->search. '%')->simplePaginate(10);
            $berita = Berita::where('isi', 'LIKE', '%'.$request->search. '%')->simplePaginate(10);
        }else{
            $berita = Berita::orderBy('id', 'DESC')->simplePaginate(10);
        }
        return view('admin.berita.dashboard', compact('berita'));
    }

    public function indexKategori(Request $request)
    {
        if($request->has('search')){
            $kategori = Kategori::where('nama_kategori', 'LIKE', '%'.$request->search. '%')->simplePaginate(10);
            $kategori = Kategori::where('deskripsi', 'LIKE', '%'.$request->search. '%')->simplePaginate(10);
        }else{
            $kategori = Kategori::orderBy('id', 'DESC')->simplePaginate(10);
        }
        return view('admin.kategori.dashboard', compact('kategori'));
    }

    public function indexTrending()
    {
        $trending = Trending::orderBy('id', 'DESC')->simplePaginate(10);
        return view('admin.trending.dashboard', compact('trending'));
    }

    public function indexKontak(Request $request)
    {
        if($request->has('search')){
            $kontak = Kontak::where('username', 'LIKE', '%'.$request->search. '%')->simplePaginate(10);
            $kontak = Kontak::where('email', 'LIKE', '%'.$request->search. '%')->simplePaginate(10);
            $kontak = Kontak::where('subject', 'LIKE', '%'.$request->search. '%')->simplePaginate(10);
        }else{
            $kontak = Kontak::orderBy('id', 'DESC')->simplePaginate(10);
        }
        return view('admin.kontak.dashboard', compact('kontak'));
    }

    
    
}
