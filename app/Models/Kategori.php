<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Berita;
use App\Models\BeritaPending;

class Kategori extends Model
{
    use HasFactory;
    
    protected $table = 'kategori';

    public function berita()
    {
        return $this->hasMany(Berita::class);
    }

    public function beritaPending()
    {
        return $this->hasMany(Berita::class);
    }
}
