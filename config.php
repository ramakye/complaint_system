<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "mobile_web";

$classDbLink = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(!$classDbLink){
echo "<h2>Database not connected.</h2>";
}
else{
    echo "<h5 style='display:none;'>Database connected.</h5>";
}

?>