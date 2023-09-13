<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class CostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('costs')->insert([
            'user_id' => '1',
            'rent' => '57000',
            'water_cost' => '2000',
            'utilitiy_cost' => '10000',
            'food_cost' => '20000',
            'phone_cost' => '1000',
            'other_cost' => '30000',
            'total_cost' => '120000',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ]);
    }
}
