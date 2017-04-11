<?php

namespace App\Components\Contents\Controllers;

use App\Components\Contents\Views\Items\ItemsView;
use Simplon\Core\Data\ResponseViewData;

/**
 * @package App\Components\Contents\Controllers
 */
class ItemsViewController extends BaseViewController
{
    /**
     * @param array $params
     *
     * @return ResponseViewData
     * @throws \Exception
     */
    public function __invoke(array $params): ResponseViewData
    {
        return $this->respond(
            $this->buildPage(
                new ItemsView($this->getCoreViewData()),
                $this->getComponentViewData(),
                $this->getContext()->getAppContext()->getGlobalViewData()
            )
        );
    }
}