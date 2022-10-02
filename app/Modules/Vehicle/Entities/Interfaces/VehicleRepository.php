<?php

namespace App\Modules\Vehicle\Entities\Interfaces;

use App\Modules\Vehicle\Entities\Car;
use App\Modules\Vehicle\Entities\Motor;

interface VehicleRepository
{
    public function selectMotors(): array;
    public function selectCars(): array;
    public function selectMotorByID(string $vehicleID): Motor;
    public function selectCarByID(string $vehicleID): Car;
    public function insertMotor(Motor $motorData): string;
    public function insertCar(Car $carData): string;
}
