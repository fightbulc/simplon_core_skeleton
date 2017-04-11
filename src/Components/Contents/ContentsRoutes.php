<?php

namespace App\Components\Contents;

use Simplon\Core\Utils\Routes;

/**
 * @package App\Components\Contents
 */
class ContentsRoutes extends Routes
{
    const PATTERN_ITEMS = '/content/items';

    /**
     * @return string
     */
    public static function toItems(): string
    {
        return static::render(self::PATTERN_ITEMS);
    }
}