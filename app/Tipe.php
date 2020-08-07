<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipe extends Model
{
    protected $table = 'tipe';
    protected $primaryKey= 'id_tipe';
    protected $fillable =
    [
            'id_produk', 'ukuran', 'harga'
    ];
}

