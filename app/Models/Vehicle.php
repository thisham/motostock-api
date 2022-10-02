<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
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
}
