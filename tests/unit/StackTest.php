<?php declare(strict_types=1);

namespace Unit;

use PHPUnit\Framework\TestCase;

final class StackTest extends TestCase
{
    public function testEmpty()
    {
        $stack = false;
        $this->assertTrue($stack);
    }
}
