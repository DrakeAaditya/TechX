<?php
$servername = "localhost";
$username = "root";
$password = "aaditya";
$dbname = "addy";



$name = $_POST['Name'];
$email = $_POST['Email'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO newsletter (Name, Email) VALUES ('$name','$email')";
if (mysqli_query($conn, $sql)) { ?>
   Click <a href="home.php">Here</a> To get REDIRECTED To HOME PAGE
 <?php } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>