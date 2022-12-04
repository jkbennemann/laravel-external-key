<?php

namespace Jkbennemann\ExternalKey\Tests\Stubs;

use Illuminate\Database\Eloquent\Model;
use Jkbennemann\ExternalKey\Models\Concerns\HasKey;

class ExampleModelWithCustomKey extends Model
{
    use HasKey;

    public function getKeyColumn(): string
    {
        return 'reference';
    }
}
