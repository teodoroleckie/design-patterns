<?php

namespace Tleckie\DesignPatterns\Strategy;

/**
 * Class MultiplyStrategy
 *
 * @package Tleckie\DesignPatterns\Strategy
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class MultiplyStrategy implements StrategyInterface
{
    /**
     * @param TermsInterface $term
     * @return int|float
     */
    public function calculate(TermsInterface $term): int|float
    {
        return $term->termOne() * $term->termTwo();
    }
}
