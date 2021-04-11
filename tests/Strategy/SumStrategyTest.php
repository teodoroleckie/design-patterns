<?php

namespace Tleckie\DesignPatterns\Tests\Strategy;

use Tleckie\DesignPatterns\Strategy\SumStrategy;
use Tleckie\DesignPatterns\Strategy\Terms;
use PHPUnit\Framework\TestCase;

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
        static::assertEquals(9, (new SumStrategy)->calculate(new Terms(6,3)));
    }
}
