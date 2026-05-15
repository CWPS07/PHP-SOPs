<!DOCTYPE html>
<html>
<body>

<?php
$students = array(
    "Amit" => array(70, 80, 75, 85, 90),
    "Neha" => array(60, 70, 65, 75, 80),
    "Rohan" => array(88, 77, 66, 99, 55),
    "Pratyusha" => array(90, 85, 80, 95, 92),
    "Arman" => array(50, 60, 55, 65, 70)
);

foreach($students as $name => $marks)
{
    $total = array_sum($marks);
    $percentage = $total / count($marks);

    echo "<h3>$name</h3>";
    echo "Total Marks = $total <br>";
    echo "Percentage = $percentage % <br>";
}
?>

</body>
</html>
