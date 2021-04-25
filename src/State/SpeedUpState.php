<?php

namespace Tleckie\DesignPatterns\State;

/**
 * Class SpeedUpState
 *
 * @package Tleckie\DesignPatterns\State
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class SpeedUpState extends State
{
    /**
     * @return SpeedUpState
     */
    public function speedUp(): SpeedUpState
    {
        return new self();
    }

    /**
     * @return BrakeState
     */
    public function brake(): BrakeState
    {
        return new BrakeState();
    }
}
