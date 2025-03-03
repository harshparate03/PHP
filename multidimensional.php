<?php
$students = array(
array("Name" => "Harsh","Age" => 20, "Grade" => "A"),
array("Name" => "Ronak","Age" => 22, "Grade" => "B"),
array("Name" => "Sahil","Age" => 23, "Grade" => "A"),
array("Name" => "Hardik","Age" => 21, "Grade" => "C")
);
echo "<h3>Student Details:</h3>";
echo "<table border = '2' , cellspacing = '0' , cellpadding ='2' , style = 'background-color : cyan;'>";
echo "<tr><th>Name</th><th>Age</th><th>Grade</th></tr>";

foreach($students as $student)
{
    echo "<tr>";
    echo "<td>" . $student["Name"] . "</td>";
    echo "<td>" . $student["Age"] . "</td>";;
    echo "<td>" . $student["Grade"] . "</td>";;
    echo "</tr>";
}

echo "</table>"
?>