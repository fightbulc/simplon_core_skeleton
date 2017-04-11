<?php

namespace App\Components\Contents\Views;

use App\Components\Contents\Data\ComponentViewData;
use Simplon\Core\Data\CoreViewData;
use Simplon\Core\Views\View;

/**
 * @package App\Components\Contents\Views
 */
class ContentsPageView extends View
{
    /**
     * @var ComponentViewData
     */
    private $componentViewData;

    /**
     * @param CoreViewData $coreViewData
     * @param ComponentViewData $componentViewData
     */
    public function __construct(CoreViewData $coreViewData, ComponentViewData $componentViewData)
    {
        parent::__construct($coreViewData);
        $this->componentViewData = $componentViewData;

        $this->addCss(ContentsAssets::COMPONENT_CSS);
    }

    /**
     * @return string
     */
    protected function getTemplate(): string
    {
        return __DIR__ . '/ContentsPageTemplate.phtml';
    }

    /**
     * @return array
     */
    protected function getData(): array
    {
        return $this->componentViewData->toArray(false);
    }
}