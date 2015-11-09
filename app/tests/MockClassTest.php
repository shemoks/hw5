<?php
/**
 * Created by PhpStorm.
 * User: oksana
 * Date: 09.11.15
 * Time: 0:57
 */

namespace MockClass;

class MockClassTest extends \PHPUnit_Framework_TestCase
{
        public function testGetNumber()
    {
        $stub = $this->getMockBuilder('MockClass\MockClass')
            ->disableOriginalConstructor()
            ->getMock();

        // Настройка заглушки
        $stub->expects($this->any())
            ->method('getNumber')
            ->will($this->returnValue(15));
        $stub->expects($this->any())
            ->method('getWord')
            ->will($this->returnValue('exceeds'));
        //виклик методів
        $this->assertEquals(15, $stub->getNumber());
        $this->assertEquals('exceeds', $stub->getWord());

    }
}
