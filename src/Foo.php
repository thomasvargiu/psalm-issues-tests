<?php
declare(strict_types=1);

namespace Original;

class Foo implements C
{
    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * @inheritdoc
     */
    public function bind(callable $function)
    {
        return new Foo($function($this->value));
    }
}
