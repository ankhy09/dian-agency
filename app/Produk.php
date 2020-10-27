<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';
    protected $primaryKey= 'id_produk';
    protected $fillable =
    [
            'nama_produk', 'deskripsi_produk'
    ];


    public function ukuran()
    {
        return $this->hasMany(Ukuran::class,'id_produk');
    }
}
