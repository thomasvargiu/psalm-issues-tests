<?php

use Original\Foo;

require __DIR__ . '/vendor/autoload.php';

/** @psalm-trace $foo */
$foo = new Foo('foo');

/** @psalm-trace $value */
$value = $foo->bind(function (string $a): Foo {
    return new Foo(strlen($a));
});

// Value should be Foo<int>
