<?php
include 'getpostdb.php';



$fname = $_POST['F_Name'];
$lname = $_POST['L_Name'];
$pwd = $_POST['Pwd'];
$email = $_POST['Email'];

$sql = "INSERT INTO signup (FirstName, LastName, Username, Password)
VALUES ('$fname','$lname','$email', '$pwd')";
if (mysqli_query($conn, $sql)) {
	header("refresh:0, pages/blog.php");
} else {
    echo "Account Already Exists";
}
mysqli_close($conn);
?>