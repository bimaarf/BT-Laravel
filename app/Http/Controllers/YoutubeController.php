<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Youtube;

class YoutubeController extends Controller
{
    public function formTambah()
    {
        return view('admin.youtube.form_tambah');
    }
    public function tambah(Request $request)
    {
        $youtube = new Youtube();
        $youtube->key = Str::random(50);
        $youtube->judul = $request->judul;
        $youtube->link = $request->link;
        $youtube->save();
        return redirect()->route('admin.youtube.dashboard');
    }
    public function formUbah($id)
    {
        $youtube = Youtube::find($id);
        return view('admin.youtube.form_ubah', compact('youtube'));
    }

    public function ubah(Request $request, $id)
    {
        $youtube = Youtube::find($id);
        $youtube->judul = $request->judul;
        $youtube->link = $request->link;
        $youtube->save();
        return redirect()->route('admin.youtube.dashboard');

    }

    public function hapus($id)
    {
        $youtube = Youtube::find($id);
        $youtube->delete();
        return redirect()->route('admin.youtube.dashboard');
    }
}
