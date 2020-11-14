<?php
declare(strict_types=1);

namespace Original;

interface B
{
    /**
     * @param callable $function
     * @return mixed
     */
    public function bind(callable $function);
}

