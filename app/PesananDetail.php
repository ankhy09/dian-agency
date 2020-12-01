<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PesananDetail extends Model
{  
    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class,'id_pesanan');
    }

    public function ukuran()
    {
        return $this->belongsTo(Ukuran::class,'id_ukuran');
    }
}
