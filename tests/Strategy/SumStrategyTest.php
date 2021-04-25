<?php

namespace Tleckie\DesignPatterns\Tests\Strategy;

use PHPUnit\Framework\TestCase;
use Tleckie\DesignPatterns\Strategy\SumStrategy;
use Tleckie\DesignPatterns\Strategy\Terms;

/**
 * Class SumStrategyTest
 *
 * @package Tleckie\DesignPatterns\Tests\Strategy
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class SumStrategyTest extends TestCase
{
    /**
     * @test
     */
    public function calculate(): void
    {
        static::assertEquals(9, (new SumStrategy())->calculate(new Terms(6, 3)));
    }
}
