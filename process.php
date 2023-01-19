<?php
include('connect.php');
if (isset($_POST["create"])) {
    $title = mysqli_real_escape_string($conn, $_POST["Titlu"]);
    $author = mysqli_real_escape_string($conn, $_POST["Autor"]);
    $description = mysqli_real_escape_string($conn, $_POST["Descriere"]);
    $sqlInsert = "INSERT INTO books(title , author ,  description) VALUES ('$title','$author', '$description')";
    if(mysqli_query($conn,$sqlInsert)){
        session_start();
        $_SESSION["create"] = "Cartea a fost adaugata!";
        header("Location:indexcarti.php");
    }else{
        die("Nu am reusit sa adaugam cartea!");
    }
}
if (isset($_POST["edit"])) {
    $title = mysqli_real_escape_string($conn, $_POST["Titlu"]);
    $author = mysqli_real_escape_string($conn, $_POST["Autor"]);
    $description = mysqli_real_escape_string($conn, $_POST["Descriere"]);
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $sqlUpdate = "UPDATE books SET title = '$title', author = '$author', description = '$description' WHERE id='$id'";
    if(mysqli_query($conn,$sqlUpdate)){
        session_start();
        $_SESSION["update"] = "Cartea a fost actualizata!";
        header("Location:indexcarti.php");
    }else{
        die("Nu am reusit sa actualizam cartea");
    }
}
?>