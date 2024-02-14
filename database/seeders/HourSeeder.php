<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return vo_id
     */
    public function run()
    {
        DB::table('hours')->insert([
            'user_id' => '1',
            'month_id' => '1',
            'year_id' => '1',
            'target_value' => '50',
            'rent' => '50000',
            'water_cost' => '2000',
            'utility_cost' => '10000',
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

        DB::table('hours')->insert([
            'user_id' => '1',
            'month_id' => '2',
            'year_id' => '1',
            'target_value' => '56',
            'rent' => '50000',
            'water_cost' => '2000',
            'utility_cost' => '10000',
            'food_cost' => '20000',
            'phone_cost' => '1000',
            'other_cost' => '17000',
            'total_cost' => '100000',
            'income' => '200000',
            'hourly_wage' => '2000',
            'amount' => '50',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);

        DB::table('hours')->insert([
            'user_id' => '1',
            'month_id' => '3',
            'year_id' => '1',
            'target_value' => '40',
            'rent' => '50000',
            'water_cost' => '2000',
            'utility_cost' => '10000',
            'food_cost' => '20000',
            'phone_cost' => '1000',
            'other_cost' => '17000',
            'total_cost' => '100000',
            'income' => '200000',
            'hourly_wage' => '1500',
            'amount' => '75',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);

        DB::table('hours')->insert([
            'user_id' => '1',
            'month_id' => '4',
            'year_id' => '1',
            'target_value' => '70',
            'rent' => '50000',
            'water_cost' => '2000',
            'utility_cost' => '10000',
            'food_cost' => '20000',
            'phone_cost' => '1000',
            'other_cost' => '17000',
            'total_cost' => '100000',
            'income' => '200000',
            'hourly_wage' => '2500',
            'amount' => '25',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);

        DB::table('hours')->insert([
            'user_id' => '1',
            'month_id' => '5',
            'year_id' => '1',
            'target_value' => '90',
            'rent' => '50000',
            'water_cost' => '2000',
            'utility_cost' => '10000',
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

        DB::table('hours')->insert([
            'user_id' => '1',
            'month_id' => '6',
            'year_id' => '1',
            'target_value' => '80',
            'rent' => '50000',
            'water_cost' => '2000',
            'utility_cost' => '10000',
            'food_cost' => '20000',
            'phone_cost' => '1000',
            'other_cost' => '17000',
            'total_cost' => '100000',
            'income' => '200000',
            'hourly_wage' => '1500',
            'amount' => '75',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);

        DB::table('hours')->insert([
            'user_id' => '1',
            'month_id' => '7',
            'year_id' => '1',
            'target_value' => '50',
            'rent' => '50000',
            'water_cost' => '2000',
            'utility_cost' => '10000',
            'food_cost' => '20000',
            'phone_cost' => '1000',
            'other_cost' => '17000',
            'total_cost' => '100000',
            'income' => '200000',
            'hourly_wage' => '2500',
            'amount' => '25',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);

        DB::table('hours')->insert([
            'user_id' => '1',
            'month_id' => '8',
            'year_id' => '1',
            'target_value' => '98',
            'rent' => '50000',
            'water_cost' => '2000',
            'utility_cost' => '10000',
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

        DB::table('hours')->insert([
            'user_id' => '1',
            'month_id' => '9',
            'year_id' => '1',
            'target_value' => '77',
            'rent' => '50000',
            'water_cost' => '2000',
            'utility_cost' => '10000',
            'food_cost' => '20000',
            'phone_cost' => '1000',
            'other_cost' => '17000',
            'total_cost' => '100000',
            'income' => '200000',
            'hourly_wage' => '2000',
            'amount' => '50',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);

        DB::table('hours')->insert([
            'user_id' => '1',
            'month_id' => '10',
            'year_id' => '1',
            'target_value' => '30',
            'rent' => '50000',
            'water_cost' => '2000',
            'utility_cost' => '10000',
            'food_cost' => '20000',
            'phone_cost' => '1000',
            'other_cost' => '17000',
            'total_cost' => '100000',
            'income' => '200000',
            'hourly_wage' => '2500',
            'amount' => '25',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);

        DB::table('hours')->insert([
            'user_id' => '1',
            'month_id' => '11',
            'year_id' => '1',
            'target_value' => '60',
            'rent' => '50000',
            'water_cost' => '2000',
            'utility_cost' => '10000',
            'food_cost' => '20000',
            'phone_cost' => '1000',
            'other_cost' => '17000',
            'total_cost' => '100000',
            'income' => '200000',
            'hourly_wage' => '5000',
            'amount' => '20',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);

        DB::table('hours')->insert([
            'user_id' => '1',
            'month_id' => '12',
            'year_id' => '1',
            'target_value' => '50',
            'rent' => '50000',
            'water_cost' => '2000',
            'utility_cost' => '10000',
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
