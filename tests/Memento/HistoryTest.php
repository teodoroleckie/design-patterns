<?php

namespace Tleckie\DesignPatterns\Tests\Memento;

use PHPUnit\Framework\TestCase;
use Tleckie\DesignPatterns\Memento\History;
use Tleckie\DesignPatterns\Memento\Originator;
use Tleckie\DesignPatterns\Memento\State;

/**
 * Class HistoryTest
 *
 * @package Tleckie\DesignPatterns\Tests\Memento
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class HistoryTest extends TestCase
{
    /**
     * @test
     */
    public function save(): void
    {
        $originator = new Originator(new State('Name 1', 'value 1'));
        $historic = new History($originator);

        static::assertSame('Name 1', $originator->state()->name());
        $originator->changeState(new State('Name 1', 'value 1'));
        $historic->save();

        $originator->changeState(new State('Name 2', 'value 2'));
        static::assertSame('Name 2', $originator->state()->name());

        $historic->undo();
        static::assertSame('Name 1', $originator->state()->name());

        $historic->undo();
        static::assertSame('Name 1', $originator->state()->name());
    }
}
