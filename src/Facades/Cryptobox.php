<?php
namespace Tuyenlaptrinh\Cryptobox\Facades;
use Illuminate\Support\Facades\Facade;

class Cryptobox extends Facade {
    /**
     * @return string
     */
    protected static function getFacadeAccessor() { return 'cryptobox'; }
}
