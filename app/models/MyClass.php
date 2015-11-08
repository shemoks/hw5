<?php
/**
 * Created by PhpStorm.
 * User: oksana
 * Date: 06.11.15
 * Time: 23:05
 */

namespace MyClass;

use Exception;

class MathException extends Exception {};

class MyClass
{
    public $trueProperty = true;
    public $falseProperty = false;
    public $count = 8;
    public $number = 12;

    public function power($x, $y)
    {

        return pow($x, $y);
    }
    public function simple($x, $y)
    {
        $key = 0;
        for ($i = $x; $i <= $y; $i++) {
            $count = 0;
            for ($j = 1; $j <= $i; $j++) {
                if ($i % $j == 0) {
                    $count++;
                }
            }
            if ($count == 2 && $i != 1) {
                $node[$key] = $i;
                $key++;
            }
        }

        return $node;
    }
    public function divide($x, $y)
    {
        if (!(boolean)$y)
        {
            throw new MathException('Division by zero');
        }
        return $x / $y;
    }

    public function Count($x, $y)
    {
        $arr = $this->simple($x, $y);
        $count = count($arr);
        return $count;
    }

}