<?php

namespace Tests\Unit;

use App\Models\Month;
use App\Models\Year;
use App\Repositories\HourRepository;
use App\Services\HourService;
use Mockery\MockInterface;
use Tests\TestCase;

class HourServiceTest extends TestCase
{
    private $request;

    private $hour;

    private $hourRepository;

    private $hourService;

    /**
     * A basic unit test example.
     */
    public function setUp(): void
    {
        parent::setUp();

        $mock = $this->mock(HourRepository::class, function (MockInterface $mock) {
            $mock->shouldReceive('getMonth_Id')->once()->with($this->request)->andReturn('exist');
            $mock->shouldReceive('getForm')->once()->with($this->request, $this->hour);
        });

        $hourRepository = app()->make(HourRepository::class);
        $this->instance(HourRepository::class, $hourRepository);
        $hourService = app()->make(HourService::class);
    }

    public function tearDown(): void
    {
        \Mockery::close();
        parent::teraDown();
    }
}
