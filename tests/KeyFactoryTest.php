<?php

declare(strict_types=1);

namespace Jkbennemann\ExternalKey\Tests;

use Illuminate\Support\Str;
use Jkbennemann\ExternalKey\ExternalKey;

class KeyFactoryTest extends TestCase
{
    /** @test */
    public function it_can_generate_a_new_key(): void
    {
        $key = ExternalKey::generate(
            prefix: 'test_',
        );

        $this->assertTrue(
            condition: str_contains($key, 'test_'),
        );
    }

    /**
     * @test
     */
    public function it_can_generate_a_new_key_using_the_string_macro()
    {
        $key = Str::key('prefix');

        $this->assertTrue(
            condition: str_contains($key, 'prefix'),
        );
    }
}
