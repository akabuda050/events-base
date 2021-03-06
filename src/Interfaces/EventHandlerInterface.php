<?php

declare(strict_types=1);

namespace JsonBaby\EventBase\Interfaces;

interface EventHandlerInterface
{
    public function handle(EventInterface $event, string|null $channel = null): void;
}
