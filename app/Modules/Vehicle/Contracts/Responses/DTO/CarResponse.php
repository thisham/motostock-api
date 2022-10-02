<?php

namespace App\Modules\Vehicle\Contracts\Responses\DTO;

class CarResponse extends VehicleResponse
{
    public string $machine;
    public string $passenger_capacity;
    public string $type;
}
