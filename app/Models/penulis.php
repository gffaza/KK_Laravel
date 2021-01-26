<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penulis extends Model
{
    //membuat instansiasi tabel
    protected $table = 'penulis';

    //membuat mass effect
    protected $fillable = ['id_penulis', 'username', 'email', 'pass', 'status', 'instansi', 'foto_ktm'];
}
