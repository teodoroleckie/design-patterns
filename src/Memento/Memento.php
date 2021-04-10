<?php

namespace Tleckie\DesignPatterns\Memento;

/**
 * Class Memento
 *
 * @package Tleckie\DesignPatterns\Memento
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class Memento
{
    /** @var State */
    private State $state;

    /**
     * Memento constructor.
     *
     * @param State $state
     */
    public function __construct(State $state)
    {
        $this->state = $state;
    }

    /**
     * @return State
     */
    public function state(): State
    {
        return $this->state;
    }
}