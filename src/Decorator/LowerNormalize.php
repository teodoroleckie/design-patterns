<?php

namespace Tleckie\DesignPatterns\Decorator;

/**
 * Class LowerNormalize
 *
 * @package Tleckie\DesignPatterns\Decorator
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class LowerNormalize extends TextNormalize
{
    /**
     * @param string $text
     * @return string
     */
    public function normalize(string $text): string
    {
        return strtolower($this->normalize->normalize($text));
    }
}
