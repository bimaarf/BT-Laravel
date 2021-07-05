<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use App\Models\Kontak;

class KontakController extends Controller
{
    public function tambah(Request $request)
    {
        $kontak = new Kontak();
        $kontak->username = $request->username;
        $kontak->email = $request->email;
        $kontak->subject = $request->subject;
        $kontak->message = $request->message;
        $kontak->save();
        return redirect()->route('fe-berita.index');
    }

    public function detail($id)
    {
        $kontak = Kontak::find($id);
        return view('admin.kontak.detail', compact('kontak'));
    }

    public function hapus($id)
    {
        $kontak = Kontak::find($id);
        $kontak->delete();
        return redirect()->route('admin.kontak.dashboard');
    }
}
