<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Provider\Fakecar;

class CarFactory extends Factory
{

    protected $model = Car::class;


    public function definition()
    {
        $this->faker->addProvider(new Fakecar($this->faker));
        $vehicle = $this->faker->vehicleArray();
        return [
           'modelCar' => $this->faker->vehicle,
           'brandCar' => $this->faker->vehicleBrand,
           'version' => rand(1,12),
            'description' => $this->faker->name,
           'user_id' => rand(1,100),
        ];
    }
}
