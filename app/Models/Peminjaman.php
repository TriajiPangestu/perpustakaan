<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Buku;
use App\Models\Siswa;
use App\Models\Riwayat;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjaman';
    protected $fillable = [
        'id_user',
        'id_buku',
        'nama',
        'jurusan',
        'kelas',
        'no_telp',
        'tanggal_pinjam'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function buku() {
        return $this->belongsTo(Buku::class, 'id_buku'); 
    }

    public function siswa() {
        return $this->belongsTo(Siswa::class); 
    }

    public function riwayat() {
        return $this->hasMany(Riwayat::class); 
    }
}
