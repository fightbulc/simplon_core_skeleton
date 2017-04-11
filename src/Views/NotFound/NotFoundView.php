<?php

namespace App\Views\NotFound;

use Simplon\Core\Data\CoreViewData;
use Simplon\Core\Views\View;

/**
 * @package App\Views\NotFound
 */
class NotFoundView extends View
{
    /**
     * @var int
     */
    private $errorHttpCode;

    /**
     * @param CoreViewData $coreViewData
     * @param int $errorHttpCode
     */
    public function __construct(CoreViewData $coreViewData, int $errorHttpCode = 500)
    {
        parent::__construct($coreViewData);
        $this->errorHttpCode = $errorHttpCode;
    }

    /**
     * @return string
     */
    protected function getTemplate(): string
    {
        return __DIR__ . '/NotFoundTemplate.phtml';
    }

    /**
     * @return array
     */
    protected function getData(): array
    {
        return [
            'code' => $this->errorHttpCode,
        ];
    }
}