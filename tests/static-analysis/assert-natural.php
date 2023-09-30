<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @psalm-return positive-int|0
 */
function natural($value): int
{
    Assert::natural($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @psalm-return positive-int|0|null
 */
function nullOrNatural($value): ?int
{
    Assert::nullOrNatural($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<positive-int|0>
 */
function allNatural($value): iterable
{
    Assert::allNatural($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<positive-int|0|null>
 */
function allNullOrNatural($value): iterable
{
    Assert::allNullOrNatural($value);

    return $value;
}
