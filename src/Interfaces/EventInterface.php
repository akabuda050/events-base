<?php

declare(strict_types=1);

namespace JsonBaby\EventBase\Interfaces;

use DateTimeImmutable;

interface EventInterface
{
    public static function getType(): string;
    public function getAt(): DateTimeImmutable;
    public function getData(): array;
}
