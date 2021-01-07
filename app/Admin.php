<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'admin';
    protected $primaryKey= 'id_admin';
    protected $guard = ['admin'];

    protected $hidden = [
      'password'
    ];

    public $timestamps = false;

    public function getAuthPassword()
    {
      return $this->password;
    }
}
