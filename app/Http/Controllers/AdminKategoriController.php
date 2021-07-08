<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

use Illuminate\Support\Str;

class AdminKategoriController extends Controller
{
    
    
    public function formTambah()
    {
        return view('admin.kategori.form_tambah');
    }
    public function tambah(Request $request)
    {
        $kategori = new Kategori();
        $kategori->key = Str::random(30);
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->deskripsi = $request->deskripsi;
        $kategori->save();
        return redirect()->route('admin.kategori.dashboard');
    }
    public function detail($id)
    {
        $kategori = Kategori::find($id);
        return view('admin.kategori.detail', compact('kategori'));
    }
    public function formUbah($id)
    {
        $kategori = Kategori::find($id);
        return view('admin.kategori.form_ubah', compact('kategori'));
    }

    public function ubah(Request $request, $id)
    {
        $kategori = Kategori::find($id);
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->deskripsi = $request->deskripsi;
        $kategori->save();
        return redirect()->route('admin.kategori.detail', ['id' => $kategori->id, 'key' => $kategori->key]);
    }

    public function hapus($id)
    {
        $kategori = Kategori::find($id);
        $kategori->delete();
        return redirect()->route('admin.kategori.dashboard');
    }
}
