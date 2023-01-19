<?php
$dbName = "crud";
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
if (!$conn) {
    die("Nu se poate conecta la baza de date");
}
?>