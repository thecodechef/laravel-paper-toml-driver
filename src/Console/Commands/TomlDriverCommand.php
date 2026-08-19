<?php

declare(strict_types=1);

namespace LaravelPaperTomlDriver\TomlDriver\Console\Commands;

use Illuminate\Console\Command;

class TomlDriverCommand extends Command
{
    /**
     * The command signature.
     */
    protected $signature = 'laravel-paper-toml-driver:placeholder';

    /**
     * The command description.
     */
    protected $description = 'Placeholder Artisan command shipped by the package laravel-paper-toml-driver.';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $this->line('TomlDriver placeholder command executed.');

        return self::SUCCESS;
    }
}
