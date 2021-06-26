<?php

namespace Konnco\Inadiv;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
            ->hasMigration('create_provinces_table')
            ->hasMigration('create_cities_table')
            ->hasMigration('create_districts_table')
            ->hasMigration('create_subdistricts_table');
    }
}
