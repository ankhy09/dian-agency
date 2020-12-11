<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PesananDetail extends Model
{  
    protected $table = 'pesanan_details';
    protected $primaryKey= 'id_pesanandetail';
    public $timestamps = false;

    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class,'id_pesanan');
    }

    public function ukuran()
    {
        return $this->belongsTo(Ukuran::class,'id_ukuran');
    }
}
