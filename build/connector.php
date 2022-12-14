<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "simpleloginsystem";

if (!$con = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName)) {
    die("failed to connect with DB");
}
?>