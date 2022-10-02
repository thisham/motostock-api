<?php

declare(strict_types=1);

namespace App\Modules\Vehicle\Entities;

class Car extends Vehicle
{
    public string $machine;
    public int $passengerCapacity;
    public string $type;
}
