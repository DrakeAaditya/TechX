<?php
$servername = "localhost";
$username = "root";
$password = "aaditya";
$dbname = "addy";



$fname = $_POST['F_Name'];
$lname = $_POST['L_Name'];
$pwd = $_POST['Pwd'];
$email = $_POST['Email'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO TechX (FName, LName, Email, Password)
VALUES ('$fname','$lname','$email', '$pwd')";
if (mysqli_query($conn, $sql)) { ?>
	Account Created Successfully 
     Click 
    <a href="pages/blog.html">HERE </a> To get Redirected to BLOG page
<?php
} else {
    echo "Account Already Exists";
}
mysqli_close($conn);
?>