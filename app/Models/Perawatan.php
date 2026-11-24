<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perawatan extends Model
{
    protected $table = 'perawatan';

    protected $primaryKey = 'id_perawatan';

    public $timestamps = false;

    protected $fillable = [
        'id_barang',
        'tanggal_perawatan',
        'jenis_perawatan',
        'status',
    ];

    // Relasi ke tabel barang
    public function barang()
    {
        return $this->belongsTo(
            Barang::class,
            'id_barang',
            'id_barang'
        );
    }
}