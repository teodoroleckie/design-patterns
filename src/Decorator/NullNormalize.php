<?php

namespace Tleckie\DesignPatterns\Decorator;

/**
 * Class NullNormalize
 *
 * @package Tleckie\DesignPatterns\Decorator
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class NullNormalize implements NormalizeInterface
{
    /**
     * @param string $text
     * @return string
     */
    public function normalize(string $text): string
    {
        return $text;
    }
}