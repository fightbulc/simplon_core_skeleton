<?php

namespace App\Components\Contents;

use Simplon\Core\Interfaces\EventsInterface;

/**
 * @package App\Components\Contents
 */
class ContentsContents implements EventsInterface
{
    const EVENT_CONTENT_CREATED = 'event_content_created';

    /**
     * @var ContentsContext
     */
    private $context;

    /**
     * @param ContentsContext $context
     */
    public function __construct(ContentsContext $context)
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
        return [];
    }
}