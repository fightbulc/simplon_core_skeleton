<?php

namespace App\Components\Simple;

use App\AppContext;
use Simplon\Core\Components\Registry;
use Simplon\Core\Interfaces\EventsInterface;

/**
 * @package App\Components\Simple
 */
class SimpleRegistry extends Registry
{
    /**
     * @var AppContext
     */
    private $appContext;

    /**
     * @param AppContext $appContext
     */
    public function __construct(AppContext $appContext)
    {
        $this->appContext = $appContext;
    }

    /**
     * @return SimpleContext
     */
    public function getContext(): SimpleContext
    {
        return new SimpleContext($this->appContext);
    }

    /**
     * @return null|EventsInterface
     */
    public function getEvents(): ?EventsInterface
    {
        return new SimpleEvents($this->getContext());
    }
}