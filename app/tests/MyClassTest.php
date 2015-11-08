<?php
/**
 * Created by PhpStorm.
 * User: oksana
 * Date: 07.11.15
 * Time: 23:58
 */

namespace MyClassTest;

use MyClass\MyClass;

class MyClassTest extends \PHPUnit_Framework_TestCase
{
    protected $fixture;

    protected function setUp()
    {
        $this->fixture = new MyClass ();
    }

    protected function tearDown()
    {
        $this->fixture = NULL;
    }
    /**
     * @dataProvider providerPower
     */
    public function testPower($a, $b, $c)
    {
        $this->assertEquals($c, $this->fixture->power($a, $b));
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

    public function testSimple()
    {
        $arr=array(2, 3, 5, 7);
        $output = $this->fixture->simple(2, 9);
        $this->assertEquals($arr, $output);
    }


    /**
     * Generated from @assert (15,0) == 0.
     * @expectedException \MyClass\MathException
     */
    public function testDivide()
    {
        $this->assertEquals( 0, $this->fixture->divide(15,0));
    }

    public function testTruePropertyIsTrue()
    {
        $this->assertTrue($this->fixture->trueProperty,"trueProperty isn't true");
    }

    public function testAssertGreaterThan()
    {
         $this->assertGreaterThan($this->fixture->count, $this->fixture->number);
    }

   public function testCount()
   {
       $this->assertCount(4, $this->fixture->simple(2, 9),"error");
   }

    public function testSimple1()
    {
        $this->assertContains(11, $this->fixture->simple(1, 12),"error");
    }

}
