<?php

namespace Tleckie\DesignPatterns\Decorator;

/**
 * Interface NormalizeInterface
 *
 * @package Tleckie\DesignPatterns\Decorator
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
interface NormalizeInterface
{
    /**
     * @param string $text
     * @return string
     */
    public function normalize(string $text): string;
}
