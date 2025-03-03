<?php
//Ascending
$arr = array(21, 44, 2, 12, 14);
echo "Before Ascending Order : " . implode(", ", $arr) . "<br>";
sort($arr);
echo "After Ascending Order: ";
foreach ($arr as $a) {
    echo "$a,";
}
// sort($arr);
// echo "After Ascending Order : " . implode(", ", $arr) . "<br>";

//Descending
echo "<br><br>" . "Before Descending Order : " . implode(", ", $arr) . "<br>";
rsort($arr);
echo "After Descending Order: ";
foreach ($arr as $a) {
    echo "$a,";
}
