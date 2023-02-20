<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\RiwayatAdmin;
use App\Models\User;

class Siswa extends Model
{
    use HasFactory;
    
    protected $guarded = [];
    protected $table = 'siswa';

    public function user(){
        return $this->belongsTo(User::class, 'id_user');
    }

    public function riwayat(){
        return $this->belongsTo(RiwayatAdmin::class, 'id_riwayat');
    }
}
