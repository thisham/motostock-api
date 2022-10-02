<?php

namespace App\Modules\Vehicle\Entities\Interfaces;

use App\Modules\Vehicle\Entities\Car;
use App\Modules\Vehicle\Entities\Motor;

interface VehicleUsecase
{
    public function getAllMotor(): array;
    public function getAllCar(): array;
    public function getMotorByID(string $vehicleID): Motor;
    public function getCarByID(string $vehicleID): Car;
    public function addMotor(Motor $motorData): string;
    public function addCar(Car $carData): string;
}
