<?php

namespace App\Modules\Vehicle\Contracts\Responses\Mapper;

use App\Modules\Vehicle\Contracts\Responses\DTO\MotorResponse;
use App\Modules\Vehicle\Entities\Motor;

class MotorResponseMapper
{
    public static function toResponse(Motor $motor): MotorResponse
    {
        $motorResponse = new MotorResponse();
        $motorResponse->id = $motor->id;
        $motorResponse->production_year = $motor->productionYear;
        $motorResponse->color = $motor->color;
        $motorResponse->price = $motor->price;
        $motorResponse->machine = $motor->machine;
        $motorResponse->suspension_type = $motor->suspensionType;
        $motorResponse->transmission_type = $motor->transmissionType;

        return $motorResponse;
    }

    public static function toBatchResponse(array $motors): array
    {
        $motorsResponse = [];
        foreach ($motors as $motor) {
            array_push($motorsResponse, self::toResponse($motor));
        }
        return $motorsResponse;
    }
}
