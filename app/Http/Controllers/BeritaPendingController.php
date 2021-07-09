<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Kategori;
use App\Models\User;
use App\Models\BeritaPending;

class BeritaPendingController extends Controller
{
    public function tambah(Request $request)
    {
        $target_directory = 'gambar';
        $request->validate([
            'cover_img'=>'mimes:png,jpg,jpeg|max:1024',
        ]);
        $file = $request->file('cover_img');
        $filename = time().'-'.$file->getClientOriginalName() ;
        $request->cover_img->move(public_path('gambar'), $filename);

        $berita_pending = new BeritaPending();
        $berita_pending->key = Str::slug($request->judul, '-'); 
        $berita_pending->judul = $request->judul;
        $berita_pending->isi = $request->isi;
        $berita_pending->cover_img = $filename;
        $berita_pending->kategori_id = $request->kategori_id;
        $berita_pending->user_id = Auth::id();
        $berita_pending->save();

        return redirect()->route('dashboard');
    }
    public function formUbah($key)
    {

        $kategori = Kategori::all();
        $berita_pending = BeritaPending::where('key' ,$key)->first();


        return view('admin.pending.form_ubah', compact('kategori', 'berita_pending'));
    }

    public function ubah(Request $request, $key)
    {
        $berita_pending = BeritaPending::where('key' ,$key)->first();
        $berita_pending->key = Str::slug($request->judul, '-'); 
        $berita_pending->judul = $request->judul;
        $berita_pending->isi = $request->isi;
        $berita_pending->kategori_id = $request->kategori_id;
        $berita_pending->user_id = Auth::id();
        if($request->hasFile('image')) {
            
            $cover_img = $request->file('cover_img');
            $filename = time().'-'.$cover_img->getClientOriginalName() ;
            $berita_pending->cover_img = $filename;
            $request->validate([
                'cover_img'=>'mimes:png,jpg,jpeg|max:1024',
            ]);
            $request->cover_img->move(public_path('gambar'), $filename);
        }
        
        if($berita_pending->update())
        {

            return redirect()->route('admin.pending.detail', ['key' => $berita_pending->key])->withSuccess('Update success!');
        }
        else
        {
            return redirect()->route('admin.pending.detail', ['key' => $berita_pending->key])->withDanger('Update Error');
            
        }

        
    }

    public function detail($key)
    {
        $kategori = Kategori::all();
        $berita_pending = BeritaPending::where('key' ,$key)->first();
        return view('admin.pending.detail', compact('berita_pending', 'kategori'));
    }

    public function hapus($id)
    {
        $berita_pending = BeritaPending::find($id);
        $berita_pending->delete();
        return redirect()->route('admin.pending.dashboard');
    }
}
