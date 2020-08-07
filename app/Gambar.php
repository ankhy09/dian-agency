<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gambar extends Model
{
    protected $table = 'gambar';
    protected $primaryKey= 'id_gambar';
    protected $fillable =
    [
            'id_produk', 'gambar',
    ];
}

