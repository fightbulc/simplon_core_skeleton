<?php

namespace App\Components\Simple;

use Simplon\Core\Interfaces\EventsInterface;

/**
 * @package App\Components\Simple
 */
class SimpleEvents implements EventsInterface
{
    const OFFER_HELLO_WORLD = 'offer_simple_hello_world';

    /**
     * @var SimpleContext
     */
    private $context;

    /**
     * @param SimpleContext $context
     */
    public function __construct(SimpleContext $context)
    {
        $this->context = $context;
    }

    /**
     * @return array
     */
    public function getSubscriptions(): array
    {
        return [];
    }

    /**
     * @return array
     */
    public function getOffers(): array
    {
        return [
            self::OFFER_HELLO_WORLD => function ()
            {
                return 'HELLO WORLD';
            },
        ];
    }
}