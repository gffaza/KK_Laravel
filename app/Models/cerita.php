<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cerita extends Model
{
    //membuat instansiasi tabel
    protected $table = 'cerita';

    //membuat mass effect
    protected $fillable = ['id_cerita', 'judul_cerita', 'topik', 'isi_cerita', 'foto', 'tanggal', 'id_penulis'];
}
