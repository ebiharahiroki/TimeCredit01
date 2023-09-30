<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class YearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('years')->insert([
            'year' => '2023',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
            
        DB::table('years')->insert([
            'year' => '2024',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
    }
}
