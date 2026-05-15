
<!DOCTYPE html>
<html>
<body>

<form method="post">
    Roll No: <input type="text" name="rollno" required><br><br>
    Name: <input type="text" name="name" required><br><br>
    <input type="submit" name="save" value="Save">
</form>

<?php
$host = "localhost";
$user = "root";      
$pass = "";          
$db   = "test";      

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

if (isset($_POST['save'])) {
    $roll = $_POST['rollno'];
    $name = $_POST['name'];

    $query = "INSERT INTO student (rollno, name) VALUES ('$roll', '$name')";

    if (mysqli_query($conn, $query)) {
        echo "Record Inserted Successfully";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

</body>
</html>
