<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kategori;
use App\Models\Riwayat;

class Buku extends Model
{
    use HasFactory;

    protected $guard = [];
    protected $table = 'buku';

    public function kategori() {
        return $this->belongsTo(Kategori::class);
    }

    public function riwayat() {
        return $this->hasMany(Riwayat::class); 
    }
}
