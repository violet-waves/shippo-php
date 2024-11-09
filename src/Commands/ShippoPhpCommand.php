<?php

namespace VioletWaves\ShippoPhp\Commands;

use Illuminate\Console\Command;

class ShippoPhpCommand extends Command
{
    public $signature = 'shippo-php';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
