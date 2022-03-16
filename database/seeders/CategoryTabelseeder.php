<?php

namespace Database\Seeders;
use App\Models\Category;

use Illuminate\Database\Seeder;

class CategoryTabelseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create ([
            'name'=>'wood',
            'detailes'=>'munmun',
            'price' =>'9000',
        ]);

    
      Category::create ([
            'name'=>'booked',
            'detailes'=>'gfyjfmun',
            'price' =>'5000',
        ]);
    }
}
