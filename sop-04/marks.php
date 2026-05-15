
<!DOCTYPE html>
<html>
<body>

<?php
$marks = array(
    "English" => 81,
    "Hindi" => 80,
    "Marathi" => 86,
    "Maths" => 80,
    "IT" => 90
);

$total = array_sum($marks);
$percentage = $total / count($marks);

echo "<h3>Subject Marks</h3>";

foreach($marks as $subject => $mark)
{
    echo $subject . " : " . $mark . "<br>";
}

echo "<br>Total Marks = " . $total;
echo "<br>Percentage = " . $percentage . "%";
?>

</body>
</html>
