<?php

declare(strict_types=1);

namespace JsonBaby\EventBase\Interfaces;

interface EventListenerInterface
{
    public function handle(mixed $event): void;
}
