<?php

namespace Database\Factories;

use App\Models\CarMaintenance;
use Illuminate\Database\Eloquent\Factories\Factory;
class CarMaintenanceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CarMaintenance::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'maintenance' => 'trocar a roda',
            'date' => $this->faker->date('Y-m-d'),
            'car_id' => rand(1,100),
        ];
    }
}
