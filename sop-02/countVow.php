
<!DOCTYPE html>
<html>
<body>

<form method="post">
    Enter String:
    <input type="text" name="str">
    <input type="submit" value="Count Vowels">
</form>

<?php
function countVowels($str)
{
    $count = 0;
    $str = strtolower($str);

    for($i = 0; $i < strlen($str); $i++)
    {
        if($str[$i]=='a' || $str[$i]=='e' || $str[$i]=='i' || $str[$i]=='o' || $str[$i]=='u' || $str[$i]=='A' || $str[$i]=='E' || $str[$i]=='I' || $str[$i]=='O' || $str[$i]=='U')
        {
            $count++;
        }
    }

    return $count;
}

if($_POST)
{
    $string = $_POST['str'];
    echo "Total vowels are: " . countVowels($string);
}
?>

</body>
</html>
