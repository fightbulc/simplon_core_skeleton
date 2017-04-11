<?php

namespace App\Components\Contents\Controllers;

use App\AppContext;
use App\Components\Contents\ContentsContext;
use App\Components\Contents\ContentsRegistry;
use App\Components\Contents\Data\ComponentViewData;
use App\Components\Contents\Views\ContentsPageView;
use App\Data\GlobalViewData;
use Simplon\Core\Controllers\ViewController;
use Simplon\Core\Interfaces\ViewInterface;

/**
 * @package App\Components\Contents\Controllers
 */
abstract class BaseViewController extends ViewController
{
    /**
     * @return ContentsRegistry
     */
    public function getRegistry(): ContentsRegistry
    {
        return $this->registry;
    }

    /**
     * @param ViewInterface $view
     * @param ComponentViewData $componentViewData
     * @param GlobalViewData $globalViewData
     *
     * @return ViewInterface
     * @throws \Exception
     */
    protected function buildPage(ViewInterface $view, ComponentViewData $componentViewData, GlobalViewData $globalViewData): ViewInterface
    {
        $componentView = new ContentsPageView($this->getCoreViewData(), $componentViewData);
        $componentView->implements($view, 'content');

        return $this
            ->getAppContext()
            ->getAppPageView($this->getCoreViewData(), $globalViewData)
            ->implements($componentView, 'content')
            ;
    }

    /**
     * @return ComponentViewData
     */
    protected function getComponentViewData(): ComponentViewData
    {
        return new ComponentViewData();
    }

    /**
     * @return ContentsContext
     */
    protected function getContext(): ContentsContext
    {
        return $this->getRegistry()->getContext();
    }

    /**
     * @return AppContext
     */
    protected function getAppContext(): AppContext
    {
        return $this->getContext()->getAppContext();
    }
}