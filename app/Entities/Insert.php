<?php

namespace RioBoatShow\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Insert extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'name',
        'email',
        'cpf',
        'address',
        'city',
        'state',
        'phone',
        'whatsapp',
        'own_boat',
        'boat_model',
        'boat_interest',
    ];

}
