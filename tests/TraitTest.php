<?php

declare(strict_types=1);

namespace Jkbennemann\ExternalKey\Tests;

use Jkbennemann\ExternalKey\Tests\Stubs\ExampleModel;
use Jkbennemann\ExternalKey\Tests\Stubs\ExampleModelWithCustomKey;

class TraitTest extends TestCase
{
    /** @test */
    public function it_can_get_the_key_column(): void
    {
        $model = ExampleModel::make();

        $this->assertEquals('key', $model->getKeyColumn());
    }
    /** @test */
    public function it_can_set_a_custom_key_column(): void
    {
        $model = new ExampleModelWithCustomKey();

        $this->assertEquals('reference', $model->getKeyColumn());
    }
}
