<?php

namespace App\Components\Simple;

use App\AppContext;
use Simplon\Core\Interfaces\ComponentContextInterface;
use Simplon\Core\Utils\Config;
use Simplon\Locale\Locale;

/**
 * @package App\Components\Simple
 */
class SimpleContext implements ComponentContextInterface
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
     * @return AppContext
     */
    public function getAppContext(): AppContext
    {
        return $this->appContext;
    }

    /**
     * @return null|Config
     */
    public function getConfig(): ?Config
    {
        return $this->getAppContext()->getConfig(__DIR__);
    }

    /**
     * @return null|Locale
     */
    public function getLocale(): ?Locale
    {
        return $this->getAppContext()->getLocale(__DIR__);
    }

}