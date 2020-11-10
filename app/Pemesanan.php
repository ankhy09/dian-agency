<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    protected $table = 'pemesanan';
    protected $primaryKey= 'id_pemesanan';
    protected $guarded =
    [
            'id_pemesanan'
    ];
    public $timestamps = false;
    public function transaksi()
    {
        return $this->belongsTo(transaksi::class,'id_pemesanan');
    }
}

