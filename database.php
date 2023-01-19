<?php
$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "crud";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Nu se poate conecta la baza de date;");
}

?>