<?php

namespace Konnco\Inadiv\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Konnco\Inadiv\InadivServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Konnco\\Inadiv\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
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

        /*
        include_once __DIR__.'/../database/migrations/create_laravel-inadiv_table.php.stub';
        (new \CreatePackageTable())->up();
        */
    }
}
