<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Riwayat;
use App\Models\Kategori;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'buku';
    protected $fillable = [
        'id_kategori',
        'kode',
        'judul',
        'sinopsis',
        'qty',
        'foto'
    ];

    public function riwayat() {
        return $this->hasMany(Riwayat::class); 
    }

    public function kategori() {
        return $this->belongsTo(Kategori::class, 'id_kategori'); 
    }
}
