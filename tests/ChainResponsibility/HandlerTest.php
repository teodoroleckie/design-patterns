<?php

namespace Tleckie\DesignPatterns\Tests\ChainResponsibility;

use PHPUnit\Framework\TestCase;
use Tleckie\DesignPatterns\ChainResponsibility\DivisionOperation;
use Tleckie\DesignPatterns\ChainResponsibility\SumOperation;
use Tleckie\DesignPatterns\ChainResponsibility\SubtractionOperation;
use Tleckie\DesignPatterns\ChainResponsibility\Operation;

/**
 * Class HandlerTest
 *
 * @package Tleckie\DesignPatterns\Tests\ChainResponsibility
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class HandlerTest extends TestCase
{
    /**
     * @test
     */
    public function handler(): void
    {
        $divisionOperationHandler = new DivisionOperation();
        $sumOperationHandler = new SumOperation();
        $subtractionOperationHandler = new SubtractionOperation();

        $divisionOperationHandler
            ->next($sumOperationHandler)
            ->next($subtractionOperationHandler);

        static::assertEquals(8, $divisionOperationHandler->handle(new Operation('SUBTRACTION', 10,2)) ); // 8
        static::assertEquals(5, $divisionOperationHandler->handle(new Operation('DIVISION', 10,2)) ); // 5
        static::assertEquals(12, $divisionOperationHandler->handle(new Operation('SUM', 10,2)) ); // 12
        static::assertEquals(null, $divisionOperationHandler->handle(new Operation('INVALID', 10,2)) ); // null
    }
}