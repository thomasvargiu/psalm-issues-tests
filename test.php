<?php

use Original\A;
use Original\B;
use Original\C;

require __DIR__ . '/vendor/autoload.php';

/**
 * @template T
 * @template-implements C<T>
 */
class FakeC implements C
{
    /**
     * @psalm-param T $value
     */
    public function __construct($value)
    {
    }

    /** @psalm-suppress InvalidReturnType */
    public function bind(callable $function)
    {
    }
}

/** @psalm-trace $foo */
$foo = new FakeC('foo');

/** @psalm-trace $value */
$value = $foo->bind(function (string $a): FakeC {
    return new FakeC(strlen($a));
});

// Value should be FakeC<int>
