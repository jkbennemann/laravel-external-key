<?php

declare(strict_types=1);

namespace Jkbennemann\ExternalKey;

use Illuminate\Support\Str;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ExternalKeyServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-external-key')
            ->hasConfigFile();
    }

    public function boot(): void
    {
        parent::boot();

        Str::macro(
            name: 'key',
            macro: fn (string $prefix = '', int | null $length = null) => ExternalKey::generate(
                prefix: $prefix,
                length: $length,
            ),
        );
    }
}
