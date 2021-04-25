<?php

namespace Tleckie\DesignPatterns\Memento;

/**
 * Class Originator
 *
 * @package Tleckie\DesignPatterns\Memento
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class Originator
{
    /** @var State */
    private State $state;

    /**
     * Originator constructor.
     *
     * @param State $state
     */
    public function __construct(State $state)
    {
        $this->changeState($state);
    }

    /**
     * @param State $state
     * @return $this
     */
    public function changeState(State $state): Originator
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return Memento
     */
    public function save(): Memento
    {
        return new Memento($this->state);
    }

    /**
     * @return State
     */
    public function state(): State
    {
        return $this->state;
    }

    /**
     * @param Memento $memento
     * @return Memento
     */
    public function undo(Memento $memento): Memento
    {
        $this->changeState($memento->state());

        return $memento;
    }
}
