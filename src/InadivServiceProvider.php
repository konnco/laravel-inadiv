<?php

namespace Konnco\Inadiv;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Konnco\Inadiv\Commands\InadivCommand;

class InadivServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-inadiv')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-inadiv_table')
            ->hasCommand(InadivCommand::class);
    }
}