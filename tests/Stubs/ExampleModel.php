<?php

namespace Jkbennemann\ExternalKey\Tests\Stubs;

use Illuminate\Database\Eloquent\Model;
use Jkbennemann\ExternalKey\Models\Concerns\HasKey;

class ExampleModel extends Model
{
    use HasKey;
}
