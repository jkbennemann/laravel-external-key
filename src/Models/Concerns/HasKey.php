<?php

declare(strict_types=1);

namespace Jkbennemann\ExternalKey\Models\Concerns;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

trait HasKey
{
    public static function bootHasKey(): void
    {
        static::creating(
            function (Model $model) {
                $model->{$model->getKeyColumn()} = Str::key(
                    substr(strtolower(class_basename($model)), 0, 3) . '_'
                );
            }
        );
    }

    public function getKeyColumn(): string
    {
        return 'key';
    }
}
