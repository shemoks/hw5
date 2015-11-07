<?php
/**
 * Created by PhpStorm.
 * User: oksana
 * Date: 07.11.15
 * Time: 23:58
 */

namespace MyClassTest;
use MyClass\MyClass;


class MyClassTest1 extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider providerPower
     */
    public function testPower($a, $b, $c)
    {
        $my = new MyClass();
        $this->assertEquals($c, $my->power($a, $b));
    }

    /**
     * @return array
     */
    public function providerPower ()
    {
        return array (
            array (2, 2, 4),
            array (2, 3, 8),
            array (3, 5, 243)
        );
    }
}