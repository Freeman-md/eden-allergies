<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\Meal;
use Illuminate\Database\Seeder;

class ItemMealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Meal::all()->each(function($meal) {
            $this->attachItems($meal);
            $this->setMainItem($meal);
        });
    }

    public function attachItems($meal) {
        $randomItems = Item::inRandomOrder()->limit(3)->get();
        $meal->items()->attach($randomItems);
    }

    public function setMainItem($meal) {
        $item = $meal->items()->inRandomOrder()->first();
        $meal->items()->updateExistingPivot($item, array('category' => Item::MAIN_ITEM), false);
    }
}
