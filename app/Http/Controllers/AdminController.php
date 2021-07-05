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
    
    public function indexKontak()
    {
        $kontak = Kontak::orderBy('id', 'DESC')->simplePaginate(10);

        return view('admin.kontak.dashboard', compact('kontak'));
    }

    public function tambahKontak(Request $request)
    {
        $kontak = new Kontak();
        $kontak->username = $request->username;
        $kontak->email = $request->email;
        $kontak->subject = $request->subject;
        $kontak->message = $request->message;
        $kontak->save();
        return redirect()->route('fe-berita.index');
    }

    public function detailKontak($id)
    {
        $kontak = Kontak::find($id);
        return view('admin.kontak.detail', compact('kontak'));
    }

    public function hapusKontak($id)
    {
        $kontak = Kontak::find($id);
        $kontak->delete();
        return redirect()->route('admin.kontak.dashboard');
    }
    
}
