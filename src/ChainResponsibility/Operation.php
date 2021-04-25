<?php

namespace Tleckie\DesignPatterns\ChainResponsibility;

/**
 * Class Operation
 *
 * @package Tleckie\DesignPatterns\ChainOfResponsibility
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class Operation implements OperationInterface
{
    /** @var string */
    private string $type;

    /** @var float */
    private float $numberOne;

    /** @var float */
    private float $numberTwo;

    /**
     * Operation constructor.
     *
     * @param string $type
     * @param float  $numberOne
     * @param float  $numberTwo
     */
    public function __construct(string $type, float $numberOne, float $numberTwo)
    {
        $this->type = $type;
        $this->numberOne = $numberOne;
        $this->numberTwo = $numberTwo;
    }

    /**
     * @return string
     */
    public function type(): string
    {
        return $this->type;
    }

    /**
     * @return float
     */
    public function numberOne(): float
    {
        return $this->numberOne;
    }

    /**
     * @return float
     */
    public function numberTwo(): float
    {
        return $this->numberTwo;
    }
}
