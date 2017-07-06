<?php

namespace MyPhp\Skeleton;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * @covers MyPhp\Skeleton\Example::__construct
     * @covers MyPhp\Skeleton\Example::getName
     */
    public function testExampleName()
    {
        $example = new Example('Skeleton Test');
        $this->assertSame('Skeleton Test', $example->getName());
    }
}
