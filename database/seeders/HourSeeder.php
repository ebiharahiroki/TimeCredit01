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
     * @return void
     */
    public function run()
    {
        DB::table('hours')->insert([
            'userId' => '1',
            'monthId' => '1',
            'yearId' => '1',
            'targetValue' => '50',
            'rent' => '50000',
            'waterCost' => '2000',
            'utilityCost' => '10000',
            'foodCost' => '20000',
            'phoneCost' => '1000',
            'otherCost' => '17000',
            'totalCost' => '100000',
            'income' => '200000',
            'hourlyWage' => '1000',
            'amount' => '100',
            'createdat' => new DateTime(),
            'updatedat' => new DateTime(),
            'deletedat' => null,
        ]);

        DB::table('hours')->insert([
            'userId' => '1',
            'monthId' => '2',
            'yearId' => '1',
            'targetValue' => '56',
            'rent' => '50000',
            'waterCost' => '2000',
            'utilityCost' => '10000',
            'foodCost' => '20000',
            'phoneCost' => '1000',
            'otherCost' => '17000',
            'totalCost' => '100000',
            'income' => '200000',
            'hourlyWage' => '2000',
            'amount' => '50',
            'createdat' => new DateTime(),
            'updatedat' => new DateTime(),
            'deletedat' => null,
        ]);

        DB::table('hours')->insert([
            'userId' => '1',
            'monthId' => '3',
            'yearId' => '1',
            'targetValue' => '40',
            'rent' => '50000',
            'waterCost' => '2000',
            'utilityCost' => '10000',
            'foodCost' => '20000',
            'phoneCost' => '1000',
            'otherCost' => '17000',
            'totalCost' => '100000',
            'income' => '200000',
            'hourlyWage' => '1500',
            'amount' => '75',
            'createdat' => new DateTime(),
            'updatedat' => new DateTime(),
            'deletedat' => null,
        ]);

        DB::table('hours')->insert([
            'userId' => '1',
            'monthId' => '4',
            'yearId' => '1',
            'targetValue' => '70',
            'rent' => '50000',
            'waterCost' => '2000',
            'utilityCost' => '10000',
            'foodCost' => '20000',
            'phoneCost' => '1000',
            'otherCost' => '17000',
            'totalCost' => '100000',
            'income' => '200000',
            'hourlyWage' => '2500',
            'amount' => '25',
            'createdat' => new DateTime(),
            'updatedat' => new DateTime(),
            'deletedat' => null,
        ]);

        DB::table('hours')->insert([
            'userId' => '1',
            'monthId' => '5',
            'yearId' => '1',
            'targetValue' => '90',
            'rent' => '50000',
            'waterCost' => '2000',
            'utilityCost' => '10000',
            'foodCost' => '20000',
            'phoneCost' => '1000',
            'otherCost' => '17000',
            'totalCost' => '100000',
            'income' => '200000',
            'hourlyWage' => '1000',
            'amount' => '100',
            'createdat' => new DateTime(),
            'updatedat' => new DateTime(),
            'deletedat' => null,
        ]);

        DB::table('hours')->insert([
            'userId' => '1',
            'monthId' => '6',
            'yearId' => '1',
            'targetValue' => '80',
            'rent' => '50000',
            'waterCost' => '2000',
            'utilityCost' => '10000',
            'foodCost' => '20000',
            'phoneCost' => '1000',
            'otherCost' => '17000',
            'totalCost' => '100000',
            'income' => '200000',
            'hourlyWage' => '1500',
            'amount' => '75',
            'createdat' => new DateTime(),
            'updatedat' => new DateTime(),
            'deletedat' => null,
        ]);

        DB::table('hours')->insert([
            'userId' => '1',
            'monthId' => '7',
            'yearId' => '1',
            'targetValue' => '50',
            'rent' => '50000',
            'waterCost' => '2000',
            'utilityCost' => '10000',
            'foodCost' => '20000',
            'phoneCost' => '1000',
            'otherCost' => '17000',
            'totalCost' => '100000',
            'income' => '200000',
            'hourlyWage' => '2500',
            'amount' => '25',
            'createdat' => new DateTime(),
            'updatedat' => new DateTime(),
            'deletedat' => null,
        ]);

        DB::table('hours')->insert([
            'userId' => '1',
            'monthId' => '8',
            'yearId' => '1',
            'targetValue' => '98',
            'rent' => '50000',
            'waterCost' => '2000',
            'utilityCost' => '10000',
            'foodCost' => '20000',
            'phoneCost' => '1000',
            'otherCost' => '17000',
            'totalCost' => '100000',
            'income' => '200000',
            'hourlyWage' => '1000',
            'amount' => '100',
            'createdat' => new DateTime(),
            'updatedat' => new DateTime(),
            'deletedat' => null,
        ]);

        DB::table('hours')->insert([
            'userId' => '1',
            'monthId' => '9',
            'yearId' => '1',
            'targetValue' => '77',
            'rent' => '50000',
            'waterCost' => '2000',
            'utilityCost' => '10000',
            'foodCost' => '20000',
            'phoneCost' => '1000',
            'otherCost' => '17000',
            'totalCost' => '100000',
            'income' => '200000',
            'hourlyWage' => '2000',
            'amount' => '50',
            'createdat' => new DateTime(),
            'updatedat' => new DateTime(),
            'deletedat' => null,
        ]);

        DB::table('hours')->insert([
            'userId' => '1',
            'monthId' => '10',
            'yearId' => '1',
            'targetValue' => '30',
            'rent' => '50000',
            'waterCost' => '2000',
            'utilityCost' => '10000',
            'foodCost' => '20000',
            'phoneCost' => '1000',
            'otherCost' => '17000',
            'totalCost' => '100000',
            'income' => '200000',
            'hourlyWage' => '2500',
            'amount' => '25',
            'createdat' => new DateTime(),
            'updatedat' => new DateTime(),
            'deletedat' => null,
        ]);

        DB::table('hours')->insert([
            'userId' => '1',
            'monthId' => '11',
            'yearId' => '1',
            'targetValue' => '60',
            'rent' => '50000',
            'waterCost' => '2000',
            'utilityCost' => '10000',
            'foodCost' => '20000',
            'phoneCost' => '1000',
            'otherCost' => '17000',
            'totalCost' => '100000',
            'income' => '200000',
            'hourlyWage' => '5000',
            'amount' => '20',
            'createdat' => new DateTime(),
            'updatedat' => new DateTime(),
            'deletedat' => null,
        ]);

        DB::table('hours')->insert([
            'userId' => '1',
            'monthId' => '12',
            'yearId' => '1',
            'targetValue' => '50',
            'rent' => '50000',
            'waterCost' => '2000',
            'utilityCost' => '10000',
            'foodCost' => '20000',
            'phoneCost' => '1000',
            'otherCost' => '17000',
            'totalCost' => '100000',
            'income' => '200000',
            'hourlyWage' => '1000',
            'amount' => '100',
            'createdat' => new DateTime(),
            'updatedat' => new DateTime(),
            'deletedat' => null,
        ]);
    }
}
