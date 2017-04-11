<?php

namespace App\Components\Contents;

use App\AppContext;
use App\Components\Contents\Controllers\ItemsViewController;
use Simplon\Core\Components\Registry;
use Simplon\Core\Data\RouteData;
use Simplon\Core\Utils\RoutesCollection;

/**
 * @package App\Components\Contents
 */
class ContentsRegistry extends Registry
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
     * @return ContentsContext
     */
    public function getContext(): ContentsContext
    {
        return new ContentsContext($this->appContext);
    }

    /**
     * @return RoutesCollection
     */
    public function getRoutes(): RoutesCollection
    {
        return (new RoutesCollection())
            ->addRouteData(new RouteData(ContentsRoutes::PATTERN_ITEMS, ItemsViewController::class));
    }
}