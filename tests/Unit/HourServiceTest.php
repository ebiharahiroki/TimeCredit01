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
use App\Models\User;
use App\Http\Requests\HourRequest;
use App\Models\Hour;


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
            // $mock->shouldReceive('getMonthid')->once()->with($this->request)->andReturn('exist');
            // $mock->shouldReceive('getForm')->once()->with($this->request, $this->hour);
        // });

        // $hourRepository = app()->make(HourRepository::class);
        // $this->instance(HourRepository::class, $hourRepository);
        // $hourService = app()->make(HourService::class);
        
        Artisan::call('migrate:fresh');
    }

    public function tearDown(): void
    {
        // \Mockery::close();
        parent::teraDown();
    }
    
    public function test_保存()
    {
        $request = new HourRequest();
        $request->merge([
            'userid' => '1',
            'monthid' => '1',
            'yearid' => '1',
            'targetvalue' => '50',
            'rent' => '50000',
            'watercost' => '2000',
            'utilitycost' => '10000',
            'foodcost' => '30000',
            'phonecost' => '2000',
            'othercost' => '200000',
            'income' => '200000',
            'hourlywage' => '2000',
        ]);

        $hourService = app()->make(HourService::class);
        $result = $hourService->getForm($getFormRequest);
 
        $this->assertDatabaseHas('hours', [
            'userid' => '1',
            'monthid' => '1',
            'yearid' => '1',
            'targetvalue' => '50',
            'rent' => '50000',
            'watercost' => '2000',
            'utilitycost' => '10000',
            'foodcost' => '30000',
            'phonecost' => '2000',
            'othercost' => '200000',
            'income' => '200000',
            'hourlywage' => '2000',
        ]);
    }
}
