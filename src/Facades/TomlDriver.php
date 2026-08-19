<?php

declare(strict_types=1);

namespace LaravelPaperTomlDriver\TomlDriver\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \LaravelPaperTomlDriver\TomlDriver\TomlDriver
 */
class TomlDriver extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \LaravelPaperTomlDriver\TomlDriver\TomlDriver::class;
    }
}
