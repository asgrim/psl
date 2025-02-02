<?php

declare(strict_types=1);

namespace Psl\Iter;

/**
 * Returns true if all values in the iterable satisfy the predicate.
 *
 * This function is short-circuiting, i.e. if the predicate fails for one
 * element the remaining elements will not be considered anymore.
 *
 * @template  T
 *
 * @param iterable<T> $iterable Iterable to check against the predicate
 * @param (callable(T): bool) $predicate
 */
function all(iterable $iterable, callable $predicate): bool
{
    foreach ($iterable as $value) {
        if (!$predicate($value)) {
            return false;
        }
    }

    return true;
}
