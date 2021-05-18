<?php

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
// class ExampleTest extends \PHPUnit\Framework\TestCase
{
    public function testAddingTwoPlusTwoResultsInFour()
    {
        $this->assertEquals(4, 2 + 2);
    }
}