<?php

declare(strict_types=1);

namespace LaravelPaperTomlDriver\TomlDriver;

use Illuminate\Support\ServiceProvider;
use LaravelPaperTomlDriver\TomlDriver\Console\Commands\TomlDriverCommand;

class TomlDriverServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/laravel-paper-toml-driver.php', 'laravel-paper-toml-driver');

        $this->app->singleton(TomlDriver::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/laravel-paper-toml-driver.php');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-paper-toml-driver');

        $this->loadTranslationsFrom(__DIR__.'/../lang', 'laravel-paper-toml-driver');

        if (! $this->app->runningInConsole()) {
            return;
        }

        $this->publishes([
            __DIR__.'/../config/laravel-paper-toml-driver.php' => config_path('laravel-paper-toml-driver.php'),
        ], ['laravel-paper-toml-driver', 'laravel-paper-toml-driver-config']);

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/laravel-paper-toml-driver'),
        ], ['laravel-paper-toml-driver', 'laravel-paper-toml-driver-views']);

        $this->publishes([
            __DIR__.'/../lang' => $this->app->langPath('vendor/laravel-paper-toml-driver'),
        ], ['laravel-paper-toml-driver', 'laravel-paper-toml-driver-lang']);

        $this->publishes([
            __DIR__.'/../public' => public_path('vendor/laravel-paper-toml-driver'),
        ], ['laravel-paper-toml-driver', 'laravel-paper-toml-driver-assets']);

        $this->publishesMigrations([
            __DIR__.'/../database/migrations' => database_path('migrations'),
        ], ['laravel-paper-toml-driver', 'laravel-paper-toml-driver-migrations']);

        $this->commands([
            TomlDriverCommand::class,
        ]);
    }
}
