<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Berita;

class Trending extends Model
{
    use HasFactory;

    protected $table = 'trending';
    
    public function berita()
    {
        return $this->belongsTo(Berita::class);
    }
}
