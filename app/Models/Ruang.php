<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Ruang extends Model
{
    protected $table = 'ruang';

    protected $primaryKey = 'id_ruang';

    public $timestamps = false;

    protected $fillable = [
        'nama_ruangan',
    ];
}
