<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Riwayat;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'buku';
    protected $fillable = [
        'kode',
        'judul',
        'kategori',
        'sinopsis',
        'qty'
    ];

    public function riwayat() {
        return $this->hasMany(Riwayat::class); 
    }
}
