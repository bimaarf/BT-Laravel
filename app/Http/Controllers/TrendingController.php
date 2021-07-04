<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Berita;
use App\Models\Kategori;
use App\Models\Trending;

class TrendingController extends Controller
{
    public function formTambah()
    {
        $berita = Berita::all();
        return view('admin.trending.form_tambah', compact('berita'));
    }

    public function tambah(Request $request)
    {
        
        $trending = new Trending();
        $trending->key = Str::random(50);
        $trending->berita_id = $request->berita_id;
        $trending->save();

        return redirect()->route('admin.trending.dashboard');
    }
    public function formUbah($id)
    {

        $berita = Berita::all();
        $trending = Trending::find($id);
        return view('admin.trending.form_ubah', compact( 'berita', 'trending'));
    }

    public function ubah(Request $request, $id)
    {
        $trending = Trending::find($id);
        $trending->berita_id = $request->berita_id;
        $trending->update();
        return redirect()->route('admin.trending.dashboard');

    }

    // public function detail($id)
    // {
    //     $trending = Trending::find($id);
    //     return view('admin.trending.detail', compact('trending'));
    // }

    public function hapus($id)
    {
        $trending = Trending::find($id);
        $trending->delete();
        return redirect()->route('admin.trending.dashboard');
    }
}
