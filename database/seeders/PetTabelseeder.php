<?php

namespace Database\Seeders;
use App\Models\Pet;

use Illuminate\Database\Seeder;

class PetTabelseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pet::create ([
            'pet_type'=>'Dog',
            'age'=>'7 days',
            'life_span' =>'12 to 15 years',
            'height'=> '15 to 19 inches tall at the shoulder',
            'weight'=>'Starts at 30 pounds',
            'breed'=>'Companion Dogs',
            'size'=>'medium',
            'color'=>'black',
        ]);

    
        Pet::create ([
            'pet_type'=>'Cat',
            'age'=>'2 days',
            'life_span' =>'12 to 15 years',
            'height'=> '8 to 15 inches tall at the shoulder',
            'weight'=>'Starts at 9 to 15 pounds',
            'breed'=>'Companion Cats',
            'size'=>'medium',
            'color'=>'white',
        ]);
    }
}
