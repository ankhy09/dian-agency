<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KonfirmasiPembayaran extends Model
{
    protected $table = 'pembayaran';
    protected $primaryKey= 'id_pembayaran';
    public $timestamps = false;

    protected $guarded =
    [
            'id_pembayaran'
    ];
}
