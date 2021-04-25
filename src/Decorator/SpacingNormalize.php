<?php

namespace Tleckie\DesignPatterns\Decorator;

/**
 * Class SpacingNormalize
 *
 * @package Tleckie\DesignPatterns\Decorator
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class SpacingNormalize extends TextNormalize
{
    /**
     * @param string $text
     * @return string
     */
    public function normalize(string $text): string
    {
        return str_replace(' ', '-', $this->normalize->normalize($text));
    }
}
