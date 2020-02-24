<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    //protected $table = 'users';
    
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

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

    public static function findByEmail($email)
    {
        return static::where(compact('email'))->first();
    }
    
    public function isAdmin()
    {
        return $this->is_admin;
    }
    protected $casts = [
        'is_admin' => 'boolean'
    ];

    public function profession()
    {
        return $this->belongsTo(Profession::class);
    }
}
