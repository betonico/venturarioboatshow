<?php

namespace RioBoatShow\Validators;

use Prettus\Validator\LaravelValidator;

class InsertValidator extends LaravelValidator
{
    /**
     * Insert rules.
     *
     * @var array
     */
    protected $rules = [
        'name' => 'required|min:3|max:255',
        'email' => 'required|email|unique:inserts|max:255',
        'cpf' => 'required|unique:inserts|max:255',
        'address' => 'required|max:255',
        'city' => 'required|max:255',
        'state' => 'required|max:255',
        'phone' => 'required|max:255',
        'whatsapp' => 'max:255',
        'own_boat' => 'required|integer|max:255',
        'boat_model' => 'max:255',
        'boat_interest' => 'required|max:255',
    ];
}

