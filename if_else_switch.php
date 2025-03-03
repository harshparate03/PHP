<?php
$a = 10;
if ($a > 0) {
    echo "$a is positive number...<br>";
} else {
    echo "$a is negative number..";
}

$day = 'Sunday';
switch ($day) {
    case 'Sunday':
        echo "holiday";
        break;
    case 'Saturday';
        echo 'holiday';
        break;
    default:
        echo 'working day';
}
