<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teclado extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_teclados', 'name', 'idioma','tamano','tipo','cherry',
    ];
}