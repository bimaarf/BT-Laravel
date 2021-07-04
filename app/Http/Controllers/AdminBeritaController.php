<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Berita;
use App\Models\Kategori;
use App\Models\User;

class AdminBeritaController extends Controller
{
    
    public function formTambah()
    {
        $kategori = Kategori::all();
        return view('admin.berita.form_tambah', compact('kategori'));
    }

    public function tambah(Request $request)
    {
        $target_directory = 'gambar';
        $request->validate([
            'cover_img'=>'mimes:png,jpg,jpeg|max:1024',
        ]);
        $file = $request->file('cover_img');
        $filename = time().'-'.$file->getClientOriginalName() ;
        $request->cover_img->move(public_path('gambar'), $filename);

        $berita = new Berita();
        $berita->key = Str::random(50);
        $berita->judul = $request->judul;
        $berita->isi = $request->isi;
        $berita->cover_img = $filename;
        $berita->kategori_id = $request->kategori_id;
        $berita->user_id = Auth::id();
        $berita->save();

        return redirect()->route('admin.berita.dashboard');
    }
    public function formUbah($id)
    {

        $kategori = Kategori::all();
        $berita = Berita::find($id);


        return view('admin.berita.form_ubah', compact('kategori', 'berita'));
    }

    public function ubah(Request $request, $id)
    {
        $berita = Berita::find($id);
        $berita->judul = $request->judul;
        $berita->isi = $request->isi;
        $berita->kategori_id = $request->kategori_id;
        $berita->user_id = Auth::id();
        if($request->hasFile('image')) {
            
            $cover_img = $request->file('cover_img');
            $filename = time().'-'.$cover_img->getClientOriginalName() ;
            $berita->cover_img = $filename;
            $request->validate([
                'cover_img'=>'mimes:png,jpg,jpeg|max:1024',
            ]);
            $request->cover_img->move(public_path('gambar'), $filename);
        }
        
        if($berita->update())
        {

            return redirect()->route('admin.berita.detail', ['id' => $berita->id, 'key' => $berita->key])->withSuccess('Update success!');
        }
        else
        {
            return redirect()->route('admin.berita.detail', ['id' => $berita->id, 'key' => $berita->key])->withDanger('Update Error');
            
        }

        
    }

    public function detail($id)
    {
        $berita = Berita::find($id);
        return view('admin.berita.detail', compact('berita'));
    }

    public function hapus($id)
    {
        $berita = Berita::find($id);
        $berita->delete();
        return redirect()->route('admin.berita.dashboard');
    }

}
