<?php

namespace App\Components\Contents;

use App\AppContext;
use Simplon\Core\Interfaces\ComponentContextInterface;
use Simplon\Core\Utils\Config;
use Simplon\Locale\Locale;

/**
 * @package App\Components\Contents
 */
class ContentsContext implements ComponentContextInterface
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
     * @return Config|null
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