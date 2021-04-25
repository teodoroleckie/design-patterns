<?php

namespace Tleckie\DesignPatterns\State;

/**
 * Class OnState
 *
 * @package Tleckie\DesignPatterns\State
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class OnState extends State
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
        return new BrakeState();
    }

    /**
     * @return OffState
     */
    public function turnOff(): OffState
    {
        return new OffState();
    }
}
