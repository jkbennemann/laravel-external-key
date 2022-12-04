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
                $model->{$this->getKeyColumn()} = Str::key(
                    $this->keyPrefix()
                );
            }
        );
    }

    public function getKeyColumn(): string
    {
        return 'key';
    }

    protected function keyPrefix(): ?string
    {
        return substr(strtolower(class_basename(self::class)), 0, 3) . '_';
    }

    public function getReference(): ?string
    {
        return $this->{$this->getKeyColumn()};
    }

    public function setReference(string $reference): self
    {
        $this->{$this->getKeyColumn()} = $reference;

        return $this;
    }
}
