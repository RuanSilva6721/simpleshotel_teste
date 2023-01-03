<?php

namespace Database\Seeders;
use App\Models\CarMaintenance;
use Illuminate\Database\Seeder;

class CarMaintenanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CarMaintenance::factory(300)->create();
    }
}
