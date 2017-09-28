<?php

declare(strict_types=1);

namespace Tests\Something;

use App\Something\Something;
use PHPUnit\Framework\TestCase;

class SomethingTest extends TestCase
{
    /** @test */
    public function it_can_be_created(): void
    {
        $something = new Something('foo');

        $this->assertInstanceOf(Something::class, $something);
        $this->assertEquals('foo', $something->name());
    }

    /** @test */
    public function it_can_be_renamed(): void
    {
        $something = new Something('foo');

        $something->rename('bar');

        $this->assertEquals('bar', $something->name());
    }
}
