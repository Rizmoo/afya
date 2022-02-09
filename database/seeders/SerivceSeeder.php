<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SerivceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       $serv =  DB::table('service_categories')->updateOrInsert(
           [
               'name' =>'Lab services'
           ],
           [
            'uuid' =>Str::uuid(),
           ]
       );

        DB::table('services')->insert(
            [
                [
                    'name' => 'psa',
                    'description' => 'psa',
                    'service_category_id' => $serv ->id,
                    'uuid' =>Str::uuid(),
                ],
                [
                'name' => 'pas smear',
                'description' => 'psa',
                    'service_category_id' => $serv ->id,
                    'uuid' =>Str::uuid(),
                ],
                [
                    'name' => 'Ocult Stool Blood',
                    'description' => 'psa',
                    'service_category_id' => $serv ->id,
                    'uuid' =>Str::uuid(),
                ],
                [
                    'name' => 'Alpha Feto Protein (AFP)',
                    'description' => 'psa',
                    'service_category_id' => $serv ->id,
                    'uuid' =>Str::uuid(),
                ],
                [
                    'name' => 'Luetinizing Hormone (LH)',
                    'description' => 'psa',
                    'service_category_id' => $serv ->id,
                    'uuid' =>Str::uuid(),
                ],
                [
                    'name' => 'Full Hemoglobin',
                    'description' => 'psa',
                    'service_category_id' => $serv ->id,
                    'uuid' =>Str::uuid(),
                ],
            ]
        );
    }
}
