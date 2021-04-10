<?php

namespace Tleckie\DesignPatterns\State;

/**
 * Interface CarState
 *
 * @package Tleckie\DesignPatterns\State
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
interface CarState
{
    /**
     * @return SpeedUpState
     */
    public function speedUp(): SpeedUpState;

    /**
     * @return BrakeState
     */
    public function brake(): BrakeState;

    /**
     * @return OffState
     */
    public function turnOff(): OffState;

    /**
     * @return OnState
     */
    public function turnOn(): OnState;
}