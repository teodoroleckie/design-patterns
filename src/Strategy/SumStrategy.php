<?php

namespace Tleckie\DesignPatterns\Strategy;

/**
 * Class SumStrategy
 *
 * @package Tleckie\DesignPatterns\Strategy
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class SumStrategy implements StrategyInterface
{
    /**
     * @param TermsInterface $term
     * @return int|float
     */
    public function calculate(TermsInterface $term): int|float
    {
        return $term->termOne() + $term->termTwo();
    }
}
