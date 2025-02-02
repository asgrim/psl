<?php

declare(strict_types=1);

namespace Psl\Async;

/**
 * Non-blocking sleep for the specified number of seconds.
 */
function sleep(float $seconds): void
{
    $suspension = Scheduler::createSuspension();
    $watcher = Scheduler::delay($seconds, static fn () => $suspension->resume(null));

    try {
        $suspension->suspend();
    } finally {
        Scheduler::cancel($watcher);
    }
}
