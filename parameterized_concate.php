<?php
//non - parameterised function :
function concate1()
{
    $str1 = "Hello";
    $str2 = "World";
    $result = "$str1 $str2" . "<br>";
    echo "$result";
}
//calling the function
concate1();

//parameterise function :
function concate2($a, $b)
{
    return $a . $b;
}
//calling function...
echo "concatenation of strings : " . concate2("Hello ", "World") . "<br>";
