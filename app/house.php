<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class house extends Model
{
 	/**
    *The name de primarykey if is diferente of the id
    *
    *
    */
    protected $primaryKey = 'id_house';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'clave', 'colony', 'municipality', 'price', 'description', 'specification', 'estatus', 'n_bathroom', 'n_room', 'credito_casa'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
