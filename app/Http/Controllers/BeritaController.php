<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

use App\Models\Berita;
use App\Models\Kategori;
use App\Models\Trending;
use App\Models\User;
use App\Models\Kontak;

class BeritaController extends Controller
{
    public function search(Request $request)
    {
        if($request->has('search')){
            $berita = Berita::where('judul', 'LIKE', '%'.$request->search. '%')->get();
        }else{
            $berita = Berita::limit(5)->orderBy('id', 'DESC')->get();

        }
        $totalBerita = Berita::count();
        $beritaRight = Berita::limit(5)->orderBy('id', 'DESC')->get();
        $kategori = Kategori::orderBy('id', 'DESC')->get();
        return view('fe-berita.search', compact('berita','kategori', 'totalBerita', 'beritaRight'));
    }
    public function index(Request $request)
    {
        if($request->has('search')){
            $beritaRight = Berita::where('judul', 'LIKE', '%'.$request->search. '%')->get();
        }else{
            $beritaRight = Berita::limit(5)->orderBy('id', 'DESC')->get();

        }
        $whatNews = Berita::orderBy('id', 'DESC')->simplePaginate(4);
        $kategori = Kategori::orderBy('id', 'DESC')->get();
        $topTrendText = Trending::limit(3)->orderBy('id', 'DESC')->get();
        $topTrend = Trending::limit(1)->orderBy('id', 'DESC')->get();
        $botTrend = Trending::limit(3)->orderBy('id', 'DESC')->get();
        $topNews = Trending::inRandomOrder()->limit(5)->orderBy('id', 'DESC')->get();
        
        return view('fe-berita.index', 
        compact(
            'whatNews',
            'kategori',
            'topTrend', 
            'beritaRight', 
            'topTrendText',
            'botTrend',
            'topNews'
        ));
    }

    public function kategori()
    {
        $kategori = Kategori::orderBy('id', 'DESC')->get();
        $whatNews = Berita::orderBy('id', 'DESC')->cursorPaginate(3);

        return view('fe-berita.kategori', compact('kategori', 'whatNews'));
    }

    public function kontak()
    {
        return view('fe-berita.kontak');
    }

    public function latesNews()
    {
        $topTrendText = Trending::limit(3)->orderBy('id', 'DESC')->get();
        $topTrend = Trending::limit(1)->orderBy('id', 'DESC')->get();
        $botTrend = Trending::limit(3)->orderBy('id', 'DESC')->get();
        $topNews = Trending::inRandomOrder()->limit(5)->orderBy('id', 'DESC')->get();
        return view('fe-berita.lates_news', compact(
            'topTrend', 
            'botTrend',
            'topTrendText',
            'topNews'
        ));
    }

    public function view($id)
    {
        $topTrend = Trending::find($id);
        $topTrendText = Trending::limit(3)->orderBy('id', 'DESC')->get();
        $topNews = Trending::inRandomOrder()->limit(4)->orderBy('id', 'DESC')->get();
        $beritaRight = Berita::limit(5)->orderBy('id', 'DESC')->get();

        return view('fe-berita.view', compact( 
            'topTrend', 
            'beritaRight',
            'topNews',
            'topTrendText'

        ));
    }
    public function views($id)
    {
        $topTrend = Trending::find($id);
        $topTrendText = Trending::limit(3)->orderBy('id', 'DESC')->get();
        $topNews = Trending::inRandomOrder()->limit(4)->orderBy('id', 'DESC')->get();
        $beritaRight = Berita::find($id);
        return view('fe-berita.views', compact( 
            'topTrend',
            'beritaRight',
            'topNews',
            'topTrendText'

        ));

    }
}
