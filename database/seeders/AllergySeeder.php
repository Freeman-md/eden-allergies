<?php

namespace Database\Seeders;

use App\Models\Allergy;
use Illuminate\Database\Seeder;

class AllergySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $allergies = [
            [
                'title' => 'Nut Allergy',
                'description' => 'Allergic to nuts'
            ], 
            [
                'title' => 'ShellFish Allergy',
                'description' => 'Allergic to shellfish'
            ], 
            [
                'title' => 'SeaFood Allergy',
                'description' => 'Allergic to seafoods'
            ], 
        ];
        
        foreach ($allergies as $allergy) {
            Allergy::create(
                [
                    'title' => $allergy['title'],
                    'description' => $allergy['description']
                ]
            );
        }
    }
}
