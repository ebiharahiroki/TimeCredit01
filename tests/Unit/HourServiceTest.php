<?php

namespace Tests\Unit;

use App\Repositories\HourRepository;
use App\Services\HourService;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Mockery\MockInterface;
use Tests\TestCase;
use Illuminate\Support\Facades\Artisan;
use App\Models\User;


class HourServiceTest extends TestCase
{
    use DatabaseMigrations;
    
    private $hourRepository;

    // private $hourService;

    /**
     * A basic unit test example.
     */
    public function setUp(): void
    {
        parent::setUp();

        // $mock = $this->mock(HourRepository::class, function (MockInterface $mock) {
            // $mock->shouldReceive('getMonth_Id')->once()->with($this->request)->andReturn('exist');
            // $mock->shouldReceive('getForm')->once()->with($this->request, $this->hour);
        // });

        // $hourRepository = app()->make(HourRepository::class);
        // $this->instance(HourRepository::class, $hourRepository);
        // $hourService = app()->make(HourService::class);
        
        Artisan::call('db:seed');
    }

    public function tearDown(): void
    {
        // \Mockery::close();
        parent::teraDown();
    }
    
    public function test_保存()
    {
        $user = User::factory()->create();
        
        $request = [
            'user_id' => $user->id,
            'month_id' => '1',
            'year_id' => '1',
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

        $hourService = new HourService($this->hourRepository);
        $result = $hourService->getForm($request, $hour);
 
        $this->assertDatabaseHas('hours', [
            'user_id' => $user->id,
            'month_id' => '1',
            'year_id' => '1',
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
