<?php

namespace Tal7aouy\LaraCurrency\Facades;

use Illuminate\Support\Facades\Facade;

class Currency extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'currency';
    }
}
