<?php

namespace App\Providers;

use App\Repositories\CarMaintenanceRepository;
use App\Repositories\CarMaintenanceRepositoryEloquent;
use Illuminate\Support\ServiceProvider;

class CarMaintenceRepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CarMaintenanceRepository::class, CarMaintenanceRepositoryEloquent::class);
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
