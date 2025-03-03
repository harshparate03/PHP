<?php
$count = 0;
$search = 1;

$arr = array(1, 22, 32, 3, 4, 5, 1, 0, 2, 34, 45, 67, 82, 12);

foreach ($arr as $value) {
    if ($value == $search) {
        $count++;
    }
}
echo "$search is found $count times";
