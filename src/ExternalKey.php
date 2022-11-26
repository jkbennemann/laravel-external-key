<?php

declare(strict_types=1);

namespace Jkbennemann\ExternalKey;

use Hashids\Hashids;
use Illuminate\Support\Str;

class ExternalKey
{
    /**
     * Generate a new Key.
     *
     * @param string $prefix
     * @param int|null $length Defaults to null.
     *
     * @return string
     */
    public static function generate(string $prefix, int | null $length = null): string
    {
        if ($length === null || $length < 0) {
            $length = config(
                key: 'external-key.key.length',
            );
        }

        $string = Str::random(
            length: $length,
        );

        return "{$prefix}{$string}";
    }
}
