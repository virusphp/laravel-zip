<?php

namespace Virusphp\Zip\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Virusphp\Zip\Zip open($zip_file)
 * @method static \Virusphp\Zip\Zip create($zip_file, $overwrite = false)
 * @method static \Virusphp\Zip\Zip check($zip_file)
 */
class Zip extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'virusphp.zip';
    }
}
