<?php

namespace Tleckie\DesignPatterns\Tests\Memento;

use PHPUnit\Framework\TestCase;
use Tleckie\DesignPatterns\Memento\State;

/**
 * Class StateTest
 *
 * @package Tleckie\DesignPatterns\Tests\Memento
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class StateTest extends TestCase
{
    /**
     * @test
     */
    public function construct(): void
    {
        $state = new State('The name', 'Same value');

        static::assertSame('The name', $state->name());
        static::assertSame('Same value', $state->value());
    }
}
