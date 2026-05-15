<!DOCTYPE html>
<html>
<body>

<?php
$units = 250;
$bill = 0;

if($units <= 100)
{
    $bill = $units * 4;
}
else if($units <= 200)
{
    $bill = (100 * 4) + (($units - 100) * 5);
}
else
{
    $bill = (100 * 4) + (100 * 5) + (($units - 200) * 6);
}

echo "Total Bill = Rs. " . $bill;
?>

</body>
</html>
