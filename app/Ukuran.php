<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ukuran extends Model
{
    protected $table = 'ukuran';
    protected $primaryKey= 'id_ukuran';
    protected $guarded =
    [
            'id_ukuran'
    ];

    public function produk()
    {
        return $this->belongsTo(Produk::class,'id_produk');
    }
}
