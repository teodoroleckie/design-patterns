<?php

namespace Tleckie\DesignPatterns\Tests\Memento;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Tleckie\DesignPatterns\Memento\Memento;
use Tleckie\DesignPatterns\Memento\State;

/**
 * Class MementoTest
 *
 * @package Tleckie\DesignPatterns\Tests\Memento
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class MementoTest extends TestCase
{
    /** @var State|MockObject */
    private State|MockObject $stateMock;

    /**
     * @test
     */
    public function construct(): void
    {
        $memento = new Memento($this->stateMock);

        static::assertEquals($this->stateMock, $memento->state());
    }

    protected function setUp(): void
    {
        $this->stateMock = $this->createMock(State::class);
    }
}
