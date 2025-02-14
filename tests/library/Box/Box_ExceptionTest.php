<?php
/**
 * @group Core
 */
class Box_ExceptionTest extends PHPUnit\Framework\TestCase
{

    public function testException()
    {
        $e = new Box_Exception('php :msg', array(':msg'=>'unit'), 789);
        $this->assertEquals('php unit', $e->getMessage());
        $this->assertEquals(789, $e->getCode());
    }
}