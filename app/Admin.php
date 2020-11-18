<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;

<<<<<<< HEAD
=======
    protected $guard = 'admin';

>>>>>>> 594946ac7ca7ae577e65bfaaf41e3f1b6fdc82a5
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
<<<<<<< HEAD
    protected $table = 'admin';
    protected $primaryKey= 'id_admin';
    protected $guard = ['admin'];

    protected $hidden = [
      'password'
=======
    protected $primaryKey= 'id_admin';    
    protected $fillable = [
        'username','password',
>>>>>>> 594946ac7ca7ae577e65bfaaf41e3f1b6fdc82a5
    ];

    public $timestamps = false;

<<<<<<< HEAD
    public function getAuthPassword()
    {
      return $this->password;
    }


   
   
    
=======
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $table = 'pelanggan';
>>>>>>> 594946ac7ca7ae577e65bfaaf41e3f1b6fdc82a5
}
