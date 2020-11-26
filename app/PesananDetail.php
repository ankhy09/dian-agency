<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PesananDetail extends Model
{  
    public function pesanan()
    {
        return $this->belongsTo(pesanan::class,'id_pesanan');
    }

    public function produk()
    {
        return $this->belongsTo(produk::class,'id_produk');
    }
}
