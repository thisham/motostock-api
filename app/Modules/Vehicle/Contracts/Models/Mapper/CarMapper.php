<?php

namespace App\Modules\Vehicle\Contracts\Models\Mapper;

use App\Models\Vehicle;
use App\Modules\Vehicle\Entities\Car;
use Illuminate\Support\Collection;
use Ramsey\Uuid\Uuid;

class CarMapper
{
    public static function toEntity(Collection $carQuery): Car
    {
        $car = new Car();

        $car->id = $carQuery->_id;
        $car->productionYear = $carQuery->production_year;
        $car->color = $carQuery->color;
        $car->price = $carQuery->price;
        $car->machine = $carQuery->machine;
        $car->passengerCapacity = $carQuery->passenger_capacity;
        $car->type = $carQuery->type;
        return $car;
    }

    public static function toBatchEntity(Collection $carQuery): array
    {
        $cars = [];
        foreach ($carQuery as $car) {
            array_push($cars, self::toEntity($car));
        }
        return $cars;
    }

    public static function toEloquent(Car $car): Vehicle
    {
        $vehicle = new Vehicle();
        $vehicle->_id = Uuid::uuid4()->toString();
        $vehicle->vehicle_type = 'car';
        $vehicle->production_year = $car->productionYear;
        $vehicle->color = $car->color;
        $vehicle->price = $car->price;
        $vehicle->machine = $car->machine;
        $vehicle->passenger_capacity = $car->passengerCapacity;
        $vehicle->type = $car->type;
        return $vehicle;
    }
}
