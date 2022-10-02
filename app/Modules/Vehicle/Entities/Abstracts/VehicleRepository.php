<?php

namespace App\Modules\Vehicle\Entities\Abstracts;

use App\Modules\Vehicle\Entities\Car;
use App\Modules\Vehicle\Entities\Motor;

abstract class VehicleRepository
{
    abstract public function selectMotors(): array;
    abstract public function selectCars(): array;
    abstract public function selectMotorByID(string $vehicleID): Motor;
    abstract public function selectCarByID(string $vehicleID): Car;
    abstract public function insertMotor(Motor $motorData): string;
    abstract public function insertCar(Car $carData): string;
}
