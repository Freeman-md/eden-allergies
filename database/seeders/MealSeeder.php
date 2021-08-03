<?php

namespace Database\Seeders;

use App\Models\Allergy;
use App\Models\Meal;
use Illuminate\Database\Seeder;

class MealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Allergy::all()->each(function($allergy) {
            $allergy->meals()->saveMany(Meal::factory(20)->make());
        });
    }
}
