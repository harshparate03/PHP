<?php
$sub = array("math", "science", "chemistry", "biology", "Engineering");

echo "Using for loop...<br>";
for ($i = 0; $i < count($sub); $i++) {
    echo "$sub[$i]<br>";
}

echo "<br>Using foreach loop...<br>";
foreach ($sub as $subject) {
    echo "$subject <br>";
}
?>
