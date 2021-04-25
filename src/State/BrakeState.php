<?php

namespace Tleckie\DesignPatterns\State;

/**
 * Class BrakeState
 *
 * @package Tleckie\DesignPatterns\State
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class BrakeState extends State
{
    /**
     * @return SpeedUpState
     */
    public function speedUp(): SpeedUpState
    {
        return new SpeedUpState();
    }

    /**
     * @return BrakeState
     */
    public function brake(): BrakeState
    {
        return new self();
    }

    /**
     * @return OffState
     */
    public function turnOff(): OffState
    {
        return new OffState();
    }
}
