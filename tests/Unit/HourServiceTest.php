<?php

namespace Tests\Unit;

use App\Repositories\HourRepository;
// use App\Repositories\HourRepositoryInterface as HourRepository;
use App\Services\HourService;
// use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Mockery\MockInterface;
use Tests\TestCase;
use Illuminate\Support\Facades\Artisan;
use App\Services\GetFormRequest;
use App\Models\User;

class HourServiceTest extends TestCase
{
    use RefreshDatabase;
    
    /**
     * A basic unit test example.
     */
    public function setUp(): void
    {
        parent::setUp();
        
        // $mock = $this->mock(HourRepository::class, function (MockInterface $mock) {
            // $mock->shouldReceive('getMonth_id')->once()->with($this->request)->andReturn('exist');
            // $mock->shouldReceive('getForm')->once()->with($this->request, $this->hour);
        // });

        // $hourRepository = app()->make(HourRepository::class);
        // $this->instance(HourRepository::class, $hourRepository);
        // $hourService = app()->make(HourService::class);
        
        // Artisan::call('migrate:fresh');
    }

    public function tearDown(): void
    {
        // \Mockery::close();
        parent::teraDown();
    }
    
    public function test_保存()
    {
        $request['hour'] = [
            'user_id' => '1',
            'year_id' => '1',
            'month_id' => '1',
            'target_value' => '50',
            'rent' => '50000',
            'water_cost' => '2000',
            'utility_cost' => '10000',
            'food_cost' => '30000',
            'phone_cost' => '2000',
            'other_cost' => '200000',
            'income' => '200000',
            'hourly_wage' => '2000',
        ];
        
        $input = $request['hour'];
        $user_id = $input['user_id'];
        $year_id = $input['year_id'];
        $month_id = $input['month_id'];
        $target_value = $input['target_value'];
        $rent = $input['rent'];
        $water_cost = $input['water_cost'];
        $utility_cost = $input['utility_cost'];
        $food_cost = $input['food_cost'];
        $phone_cost = $input['phone_cost'];
        $other_cost = $input['other_cost'];
        $income = $input['income'];
        $hourly_wage = $input['hourly_wage'];
        
        $getFormRequest = new GetFormRequest($user_id, $year_id, $month_id, $target_value, $rent, $water_cost, 
        $utility_cost, $food_cost, $phone_cost, $other_cost, $income, $hourly_wage);

        $hourService = app()->make(HourService::class);
        $result = $hourService->getForm($getFormRequest);
 
        $this->assertDatabaseHas('hours', [
            'user_id' => '1',
            'year_id' => '1',
            'month_id' => '1',
            'target_value' => '50',
            'rent' => '50000',
            'water_cost' => '2000',
            'utility_cost' => '10000',
            'food_cost' => '30000',
            'phone_cost' => '2000',
            'other_cost' => '200000',
            'income' => '200000',
            'hourly_wage' => '2000',
        ]);
    }
}
