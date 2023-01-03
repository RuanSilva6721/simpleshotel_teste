<?php

namespace App\Providers;

use App\Repositories\CarRepository;
use App\Repositories\CarRepositoryEloquent;
use Illuminate\Support\ServiceProvider;

class CarRepositoryProvider extends ServiceProvider
{
    // public $bindings = [
    //     CarRepository::class => CarRepositoryEloquent::class,
    // ];

    public function register()
    {
        $this->app->bind(CarRepository::class, CarRepositoryEloquent::class);
        
    }

  
    public function boot()
    {
        
    }
}
