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
    private $year;
    private $month;
    private $hourRepository;
    private $hourService;

    // public function __construct(Year $year, Month $month, HourRepository $hourRepo, HourService $hourService)
    // {
    //     $this->year = $year;
    //     $this->month = $month;
    //     $this->hourRepository = $hourRepo;
    //     $this->hourService = $hourService;
    // }
    /**
     * A basic unit test example.
     */
    public function setUp(): void
    {
        parent::setUp();
        
        $yearInstance = new Year();
        // $yearInstance = app()->make(Year::class);
        $this->year = $yearInstance->year;
        $mock = $this->mock(HourRepository::class, function (MockInterface $mock) {
            $mock->shouldReceive('getIndex')->once()->andReturn('hours');
            $mock->shouldReceive('getHours')->once()->andReturn('hours');
            $mock->shouldReceive('deliverYear')->once()->with($this->year)->andReturn('year');
            $mock->shouldReceive('getYear')->once()->with($this->year)->andReturn('years');
            $mock->shouldReceive('deliverMonth')->once()->with($this->month)->andReturn('month');
            $mock->shouldReceive('getMonth')->once()->with($this->month)->andReturn('months');
        });

        $hourRepository = app()->make(HourRepository::class);
        $this->instance(HourRepository::class, $hourRepository);
        $hourService = app()->make(HourService::class);
        // $month = app()->make(Month::class);
        $instanse = $hourService->getIndex();
        $years = $hourService->deliverYear($this->year);
        $months = $hourService->deliverMonth($this->month);
    }
    
    // (\Mockery::on(function($actual) use ($year) {
    //                             $this->assertInstanceOf(Year::class, $actual);
    //                             $this->assertEquals($year, $actual);
    //                             return true;
    //                         }))

    public function tearDown(): void
    {
        \Mockery::close();
        parent::teraDown();
    }

    public function test_getIndex_Hourクラスのインスタンスか()
    {
        $this->assertContainsOnlyInstancesOf(Hour::class, $instanse);
    }

    public function test_getIndex_インスタンスが空じゃないか()
    {
        $this->assertNotEmpty($instanse);
    }

    public function test_getIndex_インスタンスがNULLじゃないか()
    {
        $this->assertNotNull($instanse);
    }

    public function test_getIndex_インスタンスが配列か()
    {
        $this->assertIsArray($instanse);
    }

    public function test_getIndex_インスタンスの要素数が12個か()
    {
        $this->assertCount(12, $instanse);
    }

    public function test_getIndex_キーyear_idの値が1か()
    {
        $this->assertSame(1, $instanse['year_id']);
    }

    public function test_getIndex_キーdeleted_atの値がNULLか()
    {
        $this->assertSame(1, $instanse['deleted_at']);
    }

    public function test_deliverYear_Yearクラスのインスタンスか()
    {
        $this->assertContainsOnlyInstancesOf(Year::class, $years);
    }

    public function test_deliverYear_インスタンスが空じゃないか()
    {
        $this->assertNotEmpty($years);
    }

    public function test_deliverYear_インスタンスがNULLじゃないか()
    {
        $this->assertNotNull($years);
    }

    public function test_deliverYear_インスタンスが配列か()
    {
        $this->assertIsArray($years);
    }

    public function deliverYear_インスタンスの要素数が1個か()
    {
        $this->assertCount(1, $years);
    }

    public function test_deliverYear_キーidの値が1か()
    {
        $this->assertSame(1, $years['id']);
    }

    public function test_deliverMonth_クラスのインスタンスか()
    {
        $this->assertContainsOnlyInstancesOf(Month::class, $months);
    }

    public function test_deliverMonth_インスタンスが空じゃないか()
    {
        $this->assertNotEmpty($months);
    }

    public function test_deliverMonth_インスタンスがNULLじゃないか()
    {
        $this->assertNotNull($months);
    }

    public function test_deliverMonth_インスタンスが配列か()
    {
        $this->assertIsArray($months);
    }

    public function deliverMonth_インスタンスの要素数が1個か()
    {
        $this->assertCount(1, $months);
    }

    public function test_deliverMonth_キーidの値が1か()
    {
        $this->assertSame(1, $months['id']);
    }
}
