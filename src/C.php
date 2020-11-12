<?php
declare(strict_types=1);

namespace Original;

/**
 * @template T
 * @template-extends B<T>
 */
interface C extends B
{
    /**
     * @template U of C
     * @param callable(T): U $function
     * @return U
     */
    public function bind(callable $function);
}
