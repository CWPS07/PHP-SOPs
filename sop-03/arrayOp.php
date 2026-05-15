<!DOCTYPE html>
<html>
<body>

<?php
$student = array(
    "RollNo" => 101,
    "Name" => "Dhruv",
    "City" => "Pune"
);

echo "<h3>Array Elements with Keys</h3>";

foreach($student as $key => $value)
{
    echo $key . " : " . $value . "<br>";
}

echo "<h3>Size of Array</h3>";
echo count($student);

echo "<h3>Delete Element</h3>";

unset($student["City"]);

foreach($student as $key => $value)
{
    echo $key . " : " . $value . "<br>";
}
?>

</body>
</html>
