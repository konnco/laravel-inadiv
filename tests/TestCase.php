<?php

namespace Konnco\Inadiv\Tests;

use Konnco\Inadiv\InadivServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            InadivServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        include_once __DIR__.'/../database/migrations/create_provinces_table.php.stub';
        (new \CreateProvincesTable())->up();

        include_once __DIR__.'/../database/migrations/create_cities_table.php.stub';
        (new \CreateCitiesTable())->up();

        include_once __DIR__.'/../database/migrations/create_districts_table.php.stub';
        (new \CreateDistrictsTable())->up();

        include_once __DIR__.'/../database/migrations/create_subdistricts_table.php.stub';
        (new \CreateSubdistrictsTable())->up();
    }
}
