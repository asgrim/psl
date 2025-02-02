<?php

declare(strict_types=1);

namespace Psl\Str;

use Psl;

use function mb_strtolower;

/**
 * Returns the string with all alphabetic characters converted to lowercase.
 *
 * Example:
 *      Str\lowercase('hello')
 *      => Str('hello')
 *
 *      Str\lowercase('Hello')
 *      => Str('hello')
 *
 *      Str\lowercase('HELLO')
 *      => Str('hello')
 *
 *      Str\lowercase('1337')
 *      => Str('1337')
 *
 *      Str\lowercase('سيف')
 *      => Str('سيف')
 *
 * @pure
 *
 * @throws Psl\Exception\InvariantViolationException If an invalid $encoding is provided.
 */
function lowercase(string $string, Encoding $encoding = Encoding::UTF_8): string
{
    /**
     * @psalm-suppress UndefinedPropertyFetch
     * @psalm-suppress MixedArgument
     */
    return mb_strtolower($string, $encoding->value);
}
