<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MonthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('months')->insert([
            'month' => '1月',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('months')->insert([
            'month' => '2月',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('months')->insert([
            'month' => '3月',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('months')->insert([
            'month' => '4月',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('months')->insert([
            'month' => '5月',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('months')->insert([
            'month' => '6月',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('months')->insert([
            'month' => '7月',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('months')->insert([
            'month' => '8月',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('months')->insert([
            'month' => '9月',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('months')->insert([
            'month' => '10月',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('months')->insert([
            'month' => '11月',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('months')->insert([
            'month' => '12月',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
