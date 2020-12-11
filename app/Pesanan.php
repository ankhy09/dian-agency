<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{

    protected $table = 'pesanans';
    protected $primaryKey= 'id_pesanan';
    public $timestamps = false;

    public function pelanggan()
    {
        return $this->belongsTo(User::class,'id_pelanggan');
    }

    public function pesanan_detail()
    {
        return $this->hasMany(PesananDetail::class,'id_pesanan');
    }
}

