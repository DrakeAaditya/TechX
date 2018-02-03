<?php
$servername = "localhost";
$username = "root";
$password = "aaditya";
$dbname = "addy";



$name = $_POST['Name'];
$email = $_POST['Email'];
$web = $_POST['Website'];
$com = $_POST['Comment'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO comment (Name, Email, Website, Comment) VALUES ('$name','$email','$web','$com')";
if (mysqli_query($conn, $sql)) { ?>
Comment Recieved <br>
   Click <a href="pages/blog.html">Here</a> To get REDIRECTED To Blog page
 <?php } else {
    echo "Comment Already Exists";
}
mysqli_close($conn);
?>