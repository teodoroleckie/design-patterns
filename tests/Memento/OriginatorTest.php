<?php

namespace Tleckie\DesignPatterns\Tests\Memento;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Tleckie\DesignPatterns\Memento\Memento;
use Tleckie\DesignPatterns\Memento\Originator;
use Tleckie\DesignPatterns\Memento\State;

/**
 * Class OriginatorTest
 *
 * @package Tleckie\DesignPatterns\Tests\Memento
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class OriginatorTest extends TestCase
{
    /** @var State|MockObject */
    private State|MockObject $stateMock;

    /**
     * @test
     */
    public function construct(): void
    {
        $this->stateMock
            ->expects(static::once())
            ->method('name')
            ->willReturn('Same name');

        $originator = new Originator($this->stateMock);

        static::assertEquals($this->stateMock, $originator->state());
        static::assertSame('Same name', $originator->state()->name());
    }

    /**
     * @test
     */
    public function undo(): void
    {
        $this->stateMock
            ->expects(static::once())
            ->method('name')
            ->willReturn('Same name');

        $originator = new Originator($this->stateMock);

        static::assertEquals($this->stateMock, $originator->state());
        static::assertSame('Same name', $originator->state()->name());

        $stateMock = $this->createMock(State::class);
        $stateMock->expects(static::once())
            ->method('name')
            ->willReturn('Other name');

        $mementoMock = $this->createMock(Memento::class);
        $mementoMock->expects(static::once())
            ->method('state')
            ->willReturn($stateMock);

        static::assertInstanceOf(Memento::class, $originator->undo($mementoMock));
        static::assertSame('Other name', $originator->state()->name());
    }

    /**
     * @test
     */
    public function save(): void
    {
        $this->stateMock
            ->expects(static::once())
            ->method('name')
            ->willReturn('Same name');

        $originator = new Originator($this->stateMock);

        static::assertEquals($this->stateMock, $originator->save()->state());
        static::assertSame('Same name', $originator->state()->name());
    }

    protected function setUp(): void
    {
        $this->stateMock = $this->createMock(State::class);
    }
}
