<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class,'id_pelanggan');
    }

    public function pesanan_detail()
    {
        return $this->hasMany(PesananDetail::class,'id_pesanan');
    }
}

