<?php

namespace Tleckie\DesignPatterns\ChainResponsibility;

/**
 * Class SubtractionOperation
 *
 * @package Tleckie\DesignPatterns\ChainOfResponsibility
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class SubtractionOperation extends Handler
{
    /** @var string */
    protected const TYPE = 'SUBTRACTION';

    /**
     * @param OperationInterface $operation
     * @return int|null
     */
    public function handle(OperationInterface $operation): ?int
    {
        if ($operation->type() === static::TYPE) {
            return $operation->numberOne() - $operation->numberTwo();
        }

        return parent::handle($operation);
    }
}