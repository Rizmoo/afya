<?php

namespace Database\Seeders;

use App\Models\HomeSlider;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        /*create users*/
//        User::factory(10)->create();
        $this->call([
            SerivceSeeder::class
        ]);

    }
}
