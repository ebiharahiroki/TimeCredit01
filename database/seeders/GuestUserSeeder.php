<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class GuestUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('guestuser')->insert([
            'name' => 'ゲストユーザー',
            'email' => 'guest@guest.com',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
    }
}
