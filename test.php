<?php

require __DIR__ . '/vendor/autoload.php';

$identity = new Original\Identity('foo');
$function = fn (string $a): int => random_int(-1, 1);

/** @psalm-trace $value */
$value = $identity->map($function);
