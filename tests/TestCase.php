<?php

namespace Sdkconsultoria\WhatsappBussinessApi\Tests;

use Faker\Factory;
use Orchestra\Testbench\TestCase as OrchestraTestCase;
use Sdkconsultoria\WhatsappBussinessApi\ServiceProvider;

abstract class TestCase extends OrchestraTestCase
{
    protected $faker;

    public function setUp(): void
    {
        parent::setUp();
        $this->faker = Factory::create();
    }

    /**
     * @param  \Illuminate\Foundation\Application  $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            ServiceProvider::class,
        ];
    }

    /**
     * Ignore package discovery from.
     *
     * @return array
     */
    public function ignorePackageDiscoveriesFrom()
    {
        return [];
    }
}
