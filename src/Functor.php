<?php

declare(strict_types=1);

namespace Original;

interface Functor
{
    /**
     * @param callable $function
     * @return Functor
     */
    public function map(callable $function): Functor;
}
