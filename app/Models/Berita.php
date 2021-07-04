<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kategori;
use App\Models\Trending;
use App\Models\User;

class Berita extends Model
{
    use HasFactory;
    
    protected $table = 'berita';

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function trending()
    {
        return $this->belongsTo(Trending::class);
    }
}
