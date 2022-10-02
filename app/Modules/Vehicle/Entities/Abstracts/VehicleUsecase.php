<?php

namespace App\Modules\Vehicle\Entities\Abstracts;

use App\Modules\Vehicle\Entities\Car;
use App\Modules\Vehicle\Entities\Motor;

abstract class VehicleUsecase
{
    abstract public function getAllMotor(): array;
    abstract public function getAllCar(): array;
    abstract public function getMotorByID(string $vehicleID): Motor;
    abstract public function getCarByID(string $vehicleID): Car;
    abstract public function addMotor(Motor $motorData): string;
    abstract public function addCar(Car $carData): string;
}
