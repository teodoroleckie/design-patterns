<?php

namespace Tleckie\DesignPatterns\Strategy;

/**
 * Interface ContextInterface
 *
 * @package Tleckie\DesignPatterns\Strategy
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
interface ContextInterface
{
    /**
     * @param TermsInterface $val
     * @return int|float
     */
    public function execute(TermsInterface $val): int|float;

    /**
     * @param StrategyInterface $strategy
     * @return ContextInterface
     */
    public function changeStrategy(StrategyInterface $strategy): ContextInterface;
}
