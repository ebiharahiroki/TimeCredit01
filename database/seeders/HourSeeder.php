<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class HourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hours')->insert([
            'user_id' => '1',
            'month_id' => '1',
            'year_id' => '1',
            'rent' => '50000',
            'water_cost' => '2000',
            'utilitiy_cost' => '10000',
            'food_cost' => '20000',
            'phone_cost' => '1000',
            'other_cost' => '17000',
            'total_cost' => '100000',
            'income' => '200000',
            'hourly_wage' => '1000',
            'amount' => '100',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ]);
    }
}
