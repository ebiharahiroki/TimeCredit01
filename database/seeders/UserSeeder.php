<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => '蛯原弘貴',
            'email' => 'ebihara.engineer@gmail.com',
            'password' => Hash::make('nxc@mcp1enk7PBW4gnw'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
