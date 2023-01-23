<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Buku;

class Kategori extends Model
{
    use HasFactory;

    protected $guard = [];
    protected $table = 'kategori';

    public function buku(){
        return $this->hasMany(Buku::class, 'kategori_id');
    }
}