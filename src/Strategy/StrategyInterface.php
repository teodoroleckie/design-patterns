<?php

namespace Tleckie\DesignPatterns\Strategy;

/**
 * Interface StrategyInterface
 *
 * @package Tleckie\DesignPatterns\Strategy
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
interface StrategyInterface
{
    /**
     * @param TermsInterface $term
     * @return int|float
     */
    public function calculate(TermsInterface $term): int|float;
}
