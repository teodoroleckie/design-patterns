<?php

namespace Tleckie\DesignPatterns\Memento;

/**
 * Class State
 *
 * @package Tleckie\DesignPatterns\Memento
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class State
{
    /** @var string */
    private string $name;

    /** @var string */
    private string $value;

    /**
     * State constructor.
     *
     * @param string $name
     * @param string $value
     */
    public function __construct(string $name, string $value)
    {
        $this->name = $name;
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function name(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function value(): string
    {
        return $this->value;
    }
}
