<?php

namespace Tleckie\DesignPatterns\Tests\Strategy;

use Tleckie\DesignPatterns\Strategy\DivisionStrategy;
use Tleckie\DesignPatterns\Strategy\Terms;
use PHPUnit\Framework\TestCase;

/**
 * Class DivisionStrategyTest
 *
 * @package Tleckie\DesignPatterns\Tests\Strategy
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class DivisionStrategyTest extends TestCase
{
    /**
     * @test
     */
    public function calculate(): void
    {
        static::assertEquals(2, (new DivisionStrategy)->calculate(new Terms(6,3)));
    }
}
