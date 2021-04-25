<?php

namespace Tleckie\DesignPatterns\Strategy;

/**
 * Interface TermInterface
 *
 * @package Tleckie\DesignPatterns\Strategy
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
interface TermsInterface
{
    /**
     * @return int|float
     */
    public function termOne(): int|float;

    /**
     * @return int|float
     */
    public function termTwo(): int|float;
}
