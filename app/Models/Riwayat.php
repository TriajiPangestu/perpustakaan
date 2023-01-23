<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Buku;
use App\Models\Peminjaman;

class Riwayat extends Model
{
    use HasFactory;
    protected $guard = [];
    protected $table = 'riwayat';

    public function buku() {
        return $this->belongsTo(Buku::class);
    }

    public function pinjam() {
        return $this->belongsTo(Peminjaman::class);
    }
}
