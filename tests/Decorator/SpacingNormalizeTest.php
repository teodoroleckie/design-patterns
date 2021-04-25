<?php

namespace Tleckie\DesignPatterns\Tests\Decorator;

use PHPUnit\Framework\TestCase;
use Tleckie\DesignPatterns\Decorator\LowerNormalize;
use Tleckie\DesignPatterns\Decorator\NullNormalize;
use Tleckie\DesignPatterns\Decorator\SpacingNormalize;
use Tleckie\DesignPatterns\Decorator\TextNormalize;

/**
 * Class SpacingNormalizeTest
 *
 * @package Tleckie\DesignPatterns\Tests\SpacingNormalizeTest
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class SpacingNormalizeTest extends TestCase
{
    /** @var SpacingNormalize */
    private SpacingNormalize $normalize;

    public function setUp(): void
    {
        $this->normalize = new SpacingNormalize(
            new LowerNormalize(
                new TextNormalize(
                    new NullNormalize()
                )
            )
        );
    }

    /**
     * @test
     */
    public function normalize(): void
    {
        $text = 'SAME random TEXT!';
        static::assertEquals('same-random-text!', $this->normalize->normalize($text));
    }
}
