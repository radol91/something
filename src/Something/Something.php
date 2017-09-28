<?php

declare(strict_types=1);

namespace App\Something;

class Something
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function rename(string $name): void
    {
        $this->name = $name;
    }

    public function name(): string
    {
        return $this->name;
    }
}
