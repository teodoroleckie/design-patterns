<?php

namespace Tleckie\DesignPatterns\ChainResponsibility;

/**
 * Interface HandlerInterface
 *
 * @package Tleckie\DesignPatterns\ChainOfResponsibility
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
interface HandlerInterface
{
    /**
     * @param HandlerInterface $handler
     * @return HandlerInterface
     */
    public function next(HandlerInterface $handler): HandlerInterface;

    /**
     * @param OperationInterface $operation
     * @return float|null
     */
    public function handle(OperationInterface $operation): float|null;
}
