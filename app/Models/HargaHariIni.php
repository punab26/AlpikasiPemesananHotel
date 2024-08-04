<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HargaHariIni extends Model
{
    use HasFactory;

    protected $table = 'harga_hari_ini';
    protected $primaryKey = 'flight_id';

    protected $fillable = [
        'available_room',
        'tanggal',
        'id_kamar',
    ];

    public function kamar()
    {
        return $this->belongsTo(Kamar::class, 'id_kamar');
    }
}
