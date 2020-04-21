<?php

namespace Xitox97\LaravelOpendota;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Xitox97\LaravelOpendota\Skeleton\SkeletonClass
 */
class LaravelOpendotaFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'opendota';
    }
}
