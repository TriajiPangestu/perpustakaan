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
    protected $guard = [];
    protected $table = 'peminjaman';

    public function user() {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function buku() {
        return $this->belongsTo(Buku::class); 
    }

    public function siswa() {
        return $this->belongsTo(Siswa::class); 
    }

    public function riwayat() {
        return $this->hasMany(Riwayat::class); 
    }
}
