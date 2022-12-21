<?php 
#this file is used to begin , stop and exit website.
#begininging the file
session_start();
#killing 
session_destroy();
#redirecting
header("location:sample.php");
#exiting the file
exit();
?>