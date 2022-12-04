<?php

declare(strict_types=1);

namespace Jkbennemann\ExternalKey\Tests;

use Jkbennemann\ExternalKey\ExternalKeyServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;
use Spatie\LaravelRay\RayServiceProvider;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app): array
    {
        return [
            ExternalKeyServiceProvider::class,
            RayServiceProvider::class,
        ];
    }
}
