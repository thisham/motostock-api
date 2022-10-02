<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as EloquentModel;

class Vehicle extends EloquentModel
{
    use HasFactory;

    protected $fillable = [
        'production_year',
        'color',
        'price',
        'machine',
        'suspension_type',
        'transmission_type',
        'passenger_capacity',
        'type'
    ];

    protected $collection = 'vehicles';
}
