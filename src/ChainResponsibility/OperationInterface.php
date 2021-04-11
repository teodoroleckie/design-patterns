<?php

namespace Tleckie\DesignPatterns\ChainResponsibility;

/**
 * Interface OperationInterface
 *
 * @package Tleckie\DesignPatterns\ChainOfResponsibility
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
interface OperationInterface
{

    /**
     * @return string
     */
    public function type(): string;

    /**
     * @return int|float
     */
    public function numberOne(): int|float;

    /**
     * @return int|float
     */
    public function numberTwo(): int|float;
}