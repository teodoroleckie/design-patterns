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
     * @return float
     */
    public function numberOne(): float;

    /**
     * @return float
     */
    public function numberTwo(): float;
}
