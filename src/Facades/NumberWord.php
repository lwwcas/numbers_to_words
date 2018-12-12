<?php

namespace Lwwcas\NumbersToWords\Facades;

use Illuminate\Support\Facades\Facade;

class NumberWord extends Facade {
    protected static function getFacadeAccessor()
    {
        return 'number-word';
    }
}
