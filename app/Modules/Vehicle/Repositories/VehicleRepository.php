<?php

namespace App\Modules\Vehicle\Repositories;

use App\Models\Vehicle;
use App\Modules\Vehicle\Contracts\Models\Mapper\CarMapper;
use App\Modules\Vehicle\Contracts\Models\Mapper\MotorMapper;
use App\Modules\Vehicle\Entities\Interfaces\VehicleRepository as Repository;
use App\Modules\Vehicle\Entities\Car;
use App\Modules\Vehicle\Entities\Motor;
use Illuminate\Support\Facades\DB;

class VehicleRepository implements Repository
{
    protected $vehicleModel;

    public function __construct(Vehicle $model)
    {
        $this->vehicleModel = $model;
    }

    public function selectMotors(): array
    {
        $vehicle = MotorMapper::toBatchEntity(
            DB::collection('vehicles')->where('vehicle_type', 'motor')->get()
        );
        return $vehicle;
    }

    public function selectCars(): array
    {
        $vehicle = CarMapper::toBatchEntity(
            DB::table('vehicles')->where('vehicle_type', 'car')->get()
        );
        return $vehicle;
    }

    public function selectMotorByID(string $vehicleID): Motor
    {
        $vehicle = MotorMapper::toEntity(
            (object) DB::table('vehicles')->find($vehicleID)
        );
        return $vehicle;
    }

    public function selectCarByID(string $vehicleID): Car
    {
        $vehicle = CarMapper::toEntity(
            (object) DB::table('vehicles')->find($vehicleID)
        );
        return $vehicle;
    }

    public function insertMotor(Motor $motorData): string
    {
        $this->vehicleModel = MotorMapper::toEloquent($motorData);
        $this->vehicleModel->save();
        return $this->vehicleModel->id;
    }

    public function insertCar(Car $carData): string
    {
        $this->vehicleModel = CarMapper::toEloquent($carData);
        $this->vehicleModel->save();
        return $this->vehicleModel->id;
    }
}
