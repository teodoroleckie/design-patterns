<?php

namespace Tleckie\DesignPatterns\ChainResponsibility;

/**
 * Class DivisionOperation
 *
 * @package Tleckie\DesignPatterns\ChainOfResponsibility
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class DivisionOperation extends Handler
{
    /** @var string */
    protected const TYPE = 'DIVISION';

    /**
     * @param OperationInterface $operation
     * @return float|null
     */
    public function handle(OperationInterface $operation): float|null
    {
        if ($operation->type() === static::TYPE) {
            return $operation->numberOne() / $operation->numberTwo();
        }

        return parent::handle($operation);
    }
}
