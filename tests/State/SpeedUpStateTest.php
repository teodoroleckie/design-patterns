<?php

namespace Tleckie\DesignPatterns\Tests\State;

use Exception;
use PHPUnit\Framework\TestCase;
use Tleckie\DesignPatterns\State\Car;
use Tleckie\DesignPatterns\State\SpeedUpState;

/**
 * Class SpeedUpStateTest
 *
 * @package Tleckie\DesignPatterns\Tests\State
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class SpeedUpStateTest extends TestCase
{
    /** @var Car */
    private Car $car;

    protected function setUp(): void
    {
        $this->car = new Car(new SpeedUpState());
    }

    /**
     * @test
     */
    public function turnOn(): void
    {
        $this->expectException(Exception::class);

        $this->car->turnOn();
    }

    /**
     * @test
     */
    public function canSpeedUp(): void
    {
        static::assertTrue($this->car->isOn());

        static::assertInstanceOf(Car::class, $this->car->speedUp());
    }

    /**
     * @test
     */
    public function brake(): void
    {
        static::assertInstanceOf(Car::class, $this->car->brake());
    }

    /**
     * @test
     */
    public function turnOff(): void
    {
        $this->expectException(Exception::class);

        $this->car->turnOff();
    }

}
