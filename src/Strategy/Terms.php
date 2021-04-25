<?php

namespace Tleckie\DesignPatterns\Strategy;

/**
 * Class Term
 *
 * @package Tleckie\DesignPatterns\Strategy
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class Terms implements TermsInterface
{
    /** @var int|float */
    private int|float $one;

    /** @var int|float */
    private int|float $two;

    /**
     * Terms constructor.
     *
     * @param int|float $one
     * @param int|float $two
     */
    public function __construct(int|float $one, int|float $two)
    {
        $this->one = $one;
        $this->two = $two;
    }

    /**
     * @return int|float
     */
    public function termOne(): int|float
    {
        return $this->one;
    }

    /**
     * @return int|float
     */
    public function termTwo(): int|float
    {
        return $this->two;
    }
}
