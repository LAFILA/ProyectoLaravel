<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Botin extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'botines';
    protected $fillable = [
        'id_botines', 'name', 'marca','genero','tipo','modalidad',
    ];
}