<?php

namespace App\Providers;

use App\Modules\Vehicle\Entities\Interfaces\VehicleRepository as VehicleRepositoryInterface;
use App\Modules\Vehicle\Entities\Interfaces\VehicleUsecase as VehicleUsecaseInterface;
use App\Modules\Vehicle\Repositories\VehicleRepository;
use App\Modules\Vehicle\Services\VehicleUsecase;
use Illuminate\Support\ServiceProvider;

class FactoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(VehicleRepositoryInterface::class, VehicleRepository::class);
        $this->app->bind(VehicleUsecaseInterface::class, VehicleUsecase::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
