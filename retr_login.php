<?php
//Step1
 $db = mysqli_connect('localhost','root','aaditya','addy')
 or die('Error connecting to MySQL server.');

$email =  $_POST['Email'];
$pass = $_POST['Pwd'];

$sql = "SELECT * FROM TechX WHERE Email='$email' and Password='$pass'";
if($result = mysqli_query($db, $sql)){
    if(mysqli_num_rows($result) > 0){ ?>
    Click 
    <a href="pages/blog.html">HERE</a> To get Redirected to BLOG page
    <!--/*	$sql1 = "SELECT FName FROM TechX WHERE Email='$email'";
    	$result1 = mysqli_query($db, $sql);
    	while($row=mysql_fetch_array($sql1))
    	{
    	$name1=$row['Fname'];
}
echo "name=$name1";
*/-->
<?php

} else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " ;
}
?>
</body>
</html>