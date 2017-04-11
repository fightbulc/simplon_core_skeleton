<?php

namespace App\Components\Contents\Views\Items;

use Simplon\Core\Data\CoreViewData;
use Simplon\Core\Views\View;

/**
 * @package App\Components\Contents\Views\Items
 */
class ItemsView extends View
{
    /**
     * @param CoreViewData $coreViewData
     */
    public function __construct(CoreViewData $coreViewData)
    {
        parent::__construct($coreViewData);
    }

    /**
     * @return string
     */
    protected function getTemplate(): string
    {
        return __DIR__ . '/ItemTemplate.phtml';
    }

    /**
     * @return array
     */
    protected function getData(): array
    {
        return [];
    }
}