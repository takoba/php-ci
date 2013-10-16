<?php
class ExampleTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function hello()
    {
        $example = new Example();
        $this->assertEquals('hello', $example->hello());
    }
}
