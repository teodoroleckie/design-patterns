<?php

namespace Tleckie\DesignPatterns\State;

/**
 * Class Car
 *
 * @package Tleckie\DesignPatterns\State
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class Car
{
    /** @var CarState */
    private CarState $state;

    /**
     * Car constructor.
     *
     * @param CarState $state
     */
    public function __construct(CarState $state)
    {
        $this->changeState($state);
    }

    /**
     * @param CarState $state
     */
    private function changeState(CarState $state): void
    {
        $this->state = $state;
    }

    /**
     * @return $this
     */
    public function brake(): Car
    {
        $this->changeState($this->state->brake());

        return $this;
    }

    /**
     * @return $this
     */
    public function speedUp(): Car
    {
        $this->changeState($this->state->speedUp());

        return $this;
    }

    /**
     * @return $this
     */
    public function turnOff(): Car
    {
        $this->changeState($this->state->turnOff());

        return $this;
    }

    /**
     * @return $this
     */
    public function turnOn(): Car
    {
        $this->changeState($this->state->turnOn());

        return $this;
    }

    /**
     * @return bool
     */
    public function isOn(): bool
    {
        return !$this->state instanceof OffState;
    }

}