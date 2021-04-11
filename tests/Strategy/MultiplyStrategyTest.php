<?php

namespace Tleckie\DesignPatterns\Tests\Strategy;

use Tleckie\DesignPatterns\Strategy\MultiplyStrategy;
use Tleckie\DesignPatterns\Strategy\Terms;
use PHPUnit\Framework\TestCase;

/**
 * Class MultiplyStrategyTest
 *
 * @package Tleckie\DesignPatterns\Tests\Strategy
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class MultiplyStrategyTest extends TestCase
{
    /**
     * @test
     */
    public function calculate(): void
    {
        static::assertEquals(18, (new MultiplyStrategy)->calculate(new Terms(6,3)));
    }
}
