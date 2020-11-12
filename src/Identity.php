<?php

declare(strict_types=1);

namespace Original;

class Identity implements Functor
{

    /**
     * @var mixed
     */
    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * @inheritdoc
     */
    public function map(callable $transformation): Functor
    {
        return new self($transformation($this->value));
    }
}
