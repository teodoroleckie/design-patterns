<?php

namespace Tleckie\DesignPatterns\Decorator;

/**
 * Class TextNormalize
 *
 * @package Tleckie\DesignPatterns\Decorator
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class TextNormalize implements NormalizeInterface
{
    /** @var NormalizeInterface  */
    protected NormalizeInterface $normalize;

    /**
     * TextNormalize constructor.
     *
     * @param NormalizeInterface $normalize
     */
    public function __construct(NormalizeInterface $normalize)
    {
        $this->normalize = $normalize;
    }

    /**
     * @param string $text
     * @return string
     */
    public function normalize(string $text): string
    {
        return $this->normalize->normalize($text);
    }
}