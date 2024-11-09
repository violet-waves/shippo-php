<?php

namespace VioletWaves\ShippoPhp;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use VioletWaves\ShippoPhp\Commands\ShippoPhpCommand;

class ShippoPhpServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('shippo-php')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_shippo_php_table')
            ->hasCommand(ShippoPhpCommand::class);
    }
}
