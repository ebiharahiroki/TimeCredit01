<?php

namespace Tests\Unit;

use App\Repositories\HourRepository;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;

class HouServiceTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function setUp(): void
    {
        parent::setUp();

        $mock = $this->mock(HourRepository::class, function (MockInterface $mock) {
            mock->shouldRecieve('getIndex')->once()->andReturn($hours);
            mock->shouldRecieve('deliverYear')->once()->with($this->year)->andReturn($year);
            mock->shouldRecieve('deliverMonth')->once()->with($this->month)->andReturn($month);
        });

        $this->instance(HourRepository::class, $hourRepository);
        $hourService = app()->make(HourService::class);
        $instanse = $this->hourService->getIndex();
    }

    public function teraDown(): void
    {
        \Mockery::close();
        parent::teraDown();
    }

    public function test_getIndex_Hourクラスのインスタンスか(): void
    {
        $this->assertContainsOnlyInstancesOf(Hour::class, $instanse);
    }

    public function test_getIndex_インスタンスの要素数が12個か(): void
    {
        $this->assertCount(12, $instanse);
    }
}
