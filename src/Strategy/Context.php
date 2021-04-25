<?php

namespace Tleckie\DesignPatterns\Strategy;

/**
 * Class Context
 *
 * @package Tleckie\DesignPatterns\Strategy
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class Context implements ContextInterface
{
    /** @var StrategyInterface */
    private StrategyInterface $strategy;

    /**
     * Context constructor.
     *
     * @param StrategyInterface $strategy
     */
    public function __construct(StrategyInterface $strategy)
    {
        $this->changeStrategy($strategy);
    }

    /**
     * @param StrategyInterface $strategy
     * @return ContextInterface
     */
    public function changeStrategy(StrategyInterface $strategy): ContextInterface
    {
        $this->strategy = $strategy;

        return $this;
    }

    /**
     * @param TermsInterface $val
     * @return int|float
     */
    public function execute(TermsInterface $val): int|float
    {
        return $this->strategy->calculate($val);
    }
}
