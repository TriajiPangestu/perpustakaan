<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Buku;
use App\Models\Siswa;

class Riwayat extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'riwayats';

    public function buku() {
        return $this->belongsTo(Buku::class, 'id_buku');
    }

    public function siswa() {
        return $this->hasOne(Siswa::class);
    }

    public function user() {
        return $this->belongsTo(User::class, 'id_user');
    }
}
