<?php
if (isset($_GET['id'])) {
include("connect.php");
$id = $_GET['id'];
$sql = "DELETE FROM books WHERE id='$id'";
if(mysqli_query($conn,$sql)){
    session_start();
    $_SESSION["delete"] = "Cartea a fost stearsa!";
    header("Location:indexcarti.php");
}else{
    die("Nu se poate sterge");
}
}else{
    echo "Cartea nu exista";
}
?>