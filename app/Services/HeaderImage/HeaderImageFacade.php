<?php

namespace App\Services\HeaderImage;

/**
 * @see \Illuminate\Foundation\Application
 */

use App\Services\HeaderImage\HeaderImage;
use Illuminate\Support\Facades\Facade;
class HeaderImageFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return HeaderImage::class;
    }
}
