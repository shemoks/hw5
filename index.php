<?php

require __DIR__ . '/vendor/autoload.php';

use MyClass\MyClass;


echo "hello!<br>";
$test = new MyClass();
$arr = $test->simple(2,5);
for ($i = 0; $i <= count($arr); $i++)
{
    echo $arr[$i]." ";
}
$result = $test->divide(8,0);
echo "<br>".$result;

