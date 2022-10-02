<?php

namespace App\Modules\Vehicle\Contracts\Responses\DTO;

class MotorResponse extends VehicleResponse
{
    public string $machine;
    public string $suspension_type;
    public string $transmission_type;
}
