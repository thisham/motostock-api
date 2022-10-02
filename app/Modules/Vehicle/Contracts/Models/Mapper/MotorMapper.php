<?php

namespace App\Modules\Vehicle\Contracts\Models\Mapper;

use App\Models\Vehicle;
use App\Modules\Vehicle\Entities\Motor;
use Illuminate\Support\Collection;
use Ramsey\Uuid\Uuid;

class MotorMapper
{
    public static function toEntity(object $motorQuery): Motor
    {
        $motor = new Motor();

        $motor->id = $motorQuery->_id;
        $motor->productionYear = $motorQuery->production_year;
        $motor->color = $motorQuery->color;
        $motor->price = $motorQuery->price;
        $motor->machine = $motorQuery->machine;
        $motor->suspensionType = $motorQuery->suspension_type;
        $motor->transmissionType = $motorQuery->transmission_type;
        return $motor;
    }

    public static function toBatchEntity(Collection $motorQuery): array
    {
        $motors = [];
        foreach ($motorQuery as $motor) {
            array_push($motors, self::toEntity((object) $motor));
        }
        return $motors;
    }

    public static function toEloquent(Motor $motor): Vehicle
    {
        $vehicle = new Vehicle();
        $vehicle->_id = Uuid::uuid4()->toString();
        $vehicle->vehicle_type = 'motor';
        $vehicle->production_year = $motor->productionYear;
        $vehicle->color = $motor->color;
        $vehicle->price = $motor->price;
        $vehicle->machine = $motor->machine;
        $vehicle->suspension_type = $motor->suspensionType;
        $vehicle->transmission_type = $motor->transmissionType;
        return $vehicle;
    }
}
