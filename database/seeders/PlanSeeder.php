<?php

namespace Database\Seeders;

use App\Models\ServiceCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Rinvex\Subscriptions\Models\Plan;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         app('rinvex.subscriptions.plan')->create([
            'name' => 'Pro',
            'description' => 'Pro plan',
            'price' => 9.99,
            'signup_fee' => 1.99,
            'invoice_period' => 1,
            'invoice_interval' => 'month',
            'trial_period' => 15,
            'trial_interval' => 'day',
            'sort_order' => 1,
            'currency' => 'KSH',
        ]);
    }
}
