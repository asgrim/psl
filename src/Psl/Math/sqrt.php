<?php

declare(strict_types=1);

namespace Psl\Math;

use Psl;

use function sqrt as php_sqrt;

/**
 * Returns the square root of the given number.
 *
 * @pure
 *
 * @throws Psl\Exception\InvariantViolationException If $number is negative.
 */
function sqrt(float $number): float
{
    Psl\invariant($number >= 0.0, 'Expected a non-negative number.', $number);

    return php_sqrt($number);
}
