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

    /** @var int|float */
    private int|float $numberOne;

    /** @var int|float */
    private int|float $numberTwo;

    /**
     * Operation constructor.
     *
     * @param string    $type
     * @param float|int $numberOne
     * @param float|int $numberTwo
     */
    public function __construct(string $type, float|int $numberOne, float|int $numberTwo)
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
     * @return int|float
     */
    public function numberOne(): int|float
    {
        return $this->numberOne;
    }

    /**
     * @return int|float
     */
    public function numberTwo(): int|float
    {
        return $this->numberTwo;
    }
}