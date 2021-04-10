<?php

namespace Tleckie\DesignPatterns\Memento;

use function array_pop;
use function count;

/**
 * Class History
 *
 * @package Tleckie\DesignPatterns\Memento
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class History
{
    /** @var Memento[] */
    private array $mementoList;

    /** @var Originator */
    private Originator $originator;

    /**
     * History constructor.
     *
     * @param Originator $originator
     */
    public function __construct(Originator $originator)
    {
        $this->originator = $originator;
    }

    /**
     * @return $this
     */
    public function save(): History
    {
        $this->mementoList[] = $this->originator->save();

        return $this;
    }

    /**
     * @return $this
     */
    public function undo(): History
    {
        if (!count($this->mementoList)) {
            return $this;
        }

        $this->originator->undo(array_pop($this->mementoList));

        return $this;
    }
}