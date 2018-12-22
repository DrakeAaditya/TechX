<?php
//Step1
include 'getpostdb.php';

$email =  $_POST['Email'];
$pass = $_POST['Pwd'];

$sql = "SELECT * FROM signup WHERE Username='$email' and Password='$pass'";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) == 1){
        header("refresh:0, pages/blog.html");
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " ;
}
?>
</body>
</html>