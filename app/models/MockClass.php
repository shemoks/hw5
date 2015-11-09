<?php
/**
 * Created by PhpStorm.
 * User: oksana
 * Date: 09.11.15
 * Time: 0:23
 */

namespace MockClass;

class MockClass
{

    public function getNumber()
    {
        /*виводить значення числа*/
        $number = 12;
        return $number;
    }
    public function getWord()
    {
       $number =  $this->getNumber();
        $number = (int)$number;
        if ($number < 0) {
            return 'below';
        }
        if ($number > 0) {
            return 'exceeds';
        }
        return 'equal';
    }


}