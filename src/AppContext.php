<?php

namespace App;

use App\Data\GlobalViewData;
use App\Views\AppPageView;
use Simplon\Core\CoreContext;
use Simplon\Core\Data\CoreViewData;

/**
 * @package App
 */
class AppContext extends CoreContext
{
    const ROOT_PATH = __DIR__;

    /**
     * @param CoreViewData $coreViewData
     * @param GlobalViewData $globalViewData
     *
     * @return AppPageView
     */
    public function getAppPageView(CoreViewData $coreViewData, GlobalViewData $globalViewData): AppPageView
    {
        return new AppPageView($coreViewData, $globalViewData);
    }

    /**
     * @return GlobalViewData
     */
    public function getGlobalViewData(): GlobalViewData
    {
        return new GlobalViewData();
    }

    /**
     * @return string
     */
    protected function getCookieStorageNameSpace(): string
    {
        return 'CORE_SKELETON';
    }
}