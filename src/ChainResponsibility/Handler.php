<?php

namespace Tleckie\DesignPatterns\ChainResponsibility;

/**
 * Class Handler
 *
 * @package Tleckie\DesignPatterns\ChainOfResponsibility
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class Handler implements HandlerInterface
{
    /** @var string */
    protected const TYPE = '';

    /** @var HandlerInterface|null  */
    protected HandlerInterface|null $handler;

    /**
     * Handler constructor.
     */
    public function __construct()
    {
        $this->handler = null;
    }

    /**
     * @param HandlerInterface $handler
     * @return HandlerInterface
     */
    public function next(HandlerInterface $handler): HandlerInterface
    {
        $this->handler = $handler;

        return $handler;
    }

    /**
     * @param OperationInterface $operation
     * @return int|null
     */
    public function handle(OperationInterface $operation): ?int
    {
        if ($this->handler) {
            return $this->handler->handle($operation);
        }

        return null;
    }

}