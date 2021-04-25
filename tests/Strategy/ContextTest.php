<?php

namespace Tleckie\DesignPatterns\Tests\Strategy;

use PHPUnit\Framework\TestCase;
use Tleckie\DesignPatterns\Strategy\Context;
use Tleckie\DesignPatterns\Strategy\SumStrategy;
use Tleckie\DesignPatterns\Strategy\Terms;

/**
 * Class ContextTest
 *
 * @package Tleckie\DesignPatterns\Tests\ContextTest
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class ContextTest extends TestCase
{
    /** @var Context */
    private Context $context;

    public function setUp(): void
    {
        $this->context = new Context(new SumStrategy());
    }

    /**
     * @test
     */
    public function calculate(): void
    {
        static::assertEquals(9, $this->context->execute(new Terms(6, 3)));
    }
}
