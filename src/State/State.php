<?php

namespace Tleckie\DesignPatterns\State;

use Exception;

/**
 * Class State
 *
 * @package Tleckie\DesignPatterns\State
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class State implements CarState
{
    /**
     * @return SpeedUpState
     * @throws Exception
     */
    public function speedUp(): SpeedUpState
    {
        throw new Exception;
    }

    /**
     * @return BrakeState
     * @throws Exception
     */
    public function brake(): BrakeState
    {
        throw new Exception;
    }

    /**
     * @return OffState
     * @throws Exception
     */
    public function turnOff(): OffState
    {
        throw new Exception;
    }

    /**
     * @return OnState
     * @throws Exception
     */
    public function turnOn(): OnState
    {
        throw new Exception;
    }
}
