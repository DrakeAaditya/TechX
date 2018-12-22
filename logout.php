<?php
session_start();
if ($_SESSION['session']) {
    session_destroy();
    echo "logged out succeccfully";
    header("refresh:5, index.php");
}
else {
    echo "Not logged In";
    header("refresh:5, joinus.php");
}

?>