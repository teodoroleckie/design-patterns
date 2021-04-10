<?php

namespace Tleckie\DesignPatterns\Tests\State;

use Exception;
use PHPUnit\Framework\TestCase;
use Tleckie\DesignPatterns\State\Car;
use Tleckie\DesignPatterns\State\OffState;

/**
 * Class OffStateTest
 *
 * @package Tleckie\DesignPatterns\Tests\State
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class OffStateTest extends TestCase
{
    /** @var Car */
    private Car $car;

    protected function setUp(): void
    {
        $this->car = new Car(new OffState());
    }

    /**
     * @test
     */
    public function turnOn(): void
    {

        static::assertFalse($this->car->isOn());

        static::assertInstanceOf(Car::class, $this->car->turnOn());

        static::assertTrue($this->car->isOn());
    }

    /**
     * @test
     */
    public function canSpeedUp(): void
    {
        $this->expectException(Exception::class);

        $this->car->speedUp();
    }

    /**
     * @test
     */
    public function brake(): void
    {
        $this->expectException(Exception::class);

        $this->car->brake();
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
