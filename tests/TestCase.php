<?php

declare(strict_types=1);

namespace LaravelPaperTomlDriver\TomlDriver\Tests;

use LaravelPaperTomlDriver\TomlDriver\TomlDriverServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            TomlDriverServiceProvider::class,
        ];
    }
}
