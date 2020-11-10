<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $primaryKey= 'id_transaksi';
    protected $guarded =
    [
            'id_pemesanan'
    ];
    public $timestamps = false;
    public function pemesanan()
    {
        return $this->belongsTo(pemesanan::class,'id_pemesanan');
    }
}

