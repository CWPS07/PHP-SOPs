<!DOCTYPE html>
<html>
<body>

<?php
function checkVote($age)
{
    if($age >= 18)
    {
        echo "The person is eligible to vote.";
    }
    else
    {
        echo "The person is not eligible to vote. Minimum age required is 18.";
    }
}

$age = 20;
checkVote($age);
?>

</body>
</html>
