<?php

namespace App\Modules\Vehicle\Contracts\Responses\Mapper;

use App\Modules\Vehicle\Contracts\Responses\DTO\CarResponse;
use App\Modules\Vehicle\Entities\Car;

class CarResponseMapper
{
    public static function toResponse(Car $car): CarResponse
    {
        $carResponse = new CarResponse();
        $carResponse->id = $car->id;
        $carResponse->production_year = $car->productionYear;
        $carResponse->color = $car->color;
        $carResponse->price = $car->price;
        $carResponse->machine = $car->machine;
        $carResponse->passenger_capacity = $car->passengerCapacity;
        $carResponse->type = $car->type;

        return $carResponse;
    }

    public static function toBatchResponse(array $cars): array
    {
        $carsResponse = [];
        foreach ($cars as $car) {
            array_push($carsResponse, self::toResponse($car));
        }
        return $carsResponse;
    }
}
