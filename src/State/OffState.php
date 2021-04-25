<?php

namespace Tleckie\DesignPatterns\State;

/**
 * Class OffState
 *
 * @package Tleckie\DesignPatterns\State
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class OffState extends State
{
    /**
     * @return OnState
     */
    public function turnOn(): OnState
    {
        return new OnState();
    }
}
