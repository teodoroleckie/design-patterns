<?php

namespace Tleckie\DesignPatterns\Tests\State;

use Exception;
use PHPUnit\Framework\TestCase;
use Tleckie\DesignPatterns\State\Car;
use Tleckie\DesignPatterns\State\OnState;

/**
 * Class OnStateTest
 *
 * @package Tleckie\DesignPatterns\Tests\State
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class OnStateTest extends TestCase
{
    /** @var Car */
    private Car $car;

    protected function setUp(): void
    {
        $this->car = new Car(new OnState());
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
        static::assertTrue($this->car->isOn());

        static::assertInstanceOf(Car::class, $this->car->turnOff());

        static::assertFalse($this->car->isOn());
    }

}
