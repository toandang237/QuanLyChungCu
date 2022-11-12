<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customer';
    protected $timestamps = true;
    protected $filltable = [
        'id',
        'customer_name',
        'day_of_birth',
        'gender',
        'phone_number',
        'id_card',
        'address',
        'owner',
        'apartment_id',
    ];
}