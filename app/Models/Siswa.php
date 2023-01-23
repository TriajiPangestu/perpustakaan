<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Peminjaman;

class Siswa extends Model
{
    use HasFactory;
    
    protected $guard = [];
    protected $table = 'siswa';

    public function pinjam(){
        return $this->hasMany(Peminjaman::class, 'id_siswa');
    }
}
