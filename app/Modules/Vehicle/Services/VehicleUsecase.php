<?php

namespace App\Modules\Vehicle\Services;

use App\Modules\Vehicle\Entities\Interfaces\VehicleUsecase as Usecase;
use App\Modules\Vehicle\Entities\Interfaces\VehicleRepository;
use App\Modules\Vehicle\Entities\Car;
use App\Modules\Vehicle\Entities\Motor;

class VehicleUsecase implements Usecase
{
    protected $vehicleRepository;

    public function __construct(VehicleRepository $repo)
    {
        $this->vehicleRepository = $repo;
    }

    public function getAllMotor(): array
    {
        return $this->vehicleRepository->selectMotors();
    }

    public function getAllCar(): array
    {
        return $this->vehicleRepository->selectCars();
    }

    public function getMotorByID(string $vehicleID): Motor
    {
        return $this->vehicleRepository->selectMotorByID($vehicleID);
    }

    public function getCarByID(string $vehicleID): Car
    {
        return $this->vehicleRepository->selectCarByID($vehicleID);
    }

    public function addMotor(Motor $motorData): string
    {
        return $this->vehicleRepository->insertMotor($motorData);
    }

    public function addCar(Car $carData): string
    {
        return $this->vehicleRepository->insertCar($carData);
    }
}
