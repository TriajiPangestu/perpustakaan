<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Buku;
use App\Models\Siswa;
use App\Models\Peminjaman;
use App\Models\User;

class RiwayatAdmin extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'riwayat_admin';

    public function buku() {
        return $this->belongsTo(Buku::class, 'id_buku');
    }

    public function user() {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function siswa() {
        return $this->hasOne(Siswa::class);
    }

    public function pinjam() {
        return $this->belongsTo(Peminjaman::class);
    }
}
