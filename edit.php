<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Edit Book</title>
</head>
<body>
    <div class="container my-5">
    <header class="d-flex justify-content-between my-4">
            <h1>Edit Book</h1>
            <div>
            <a href="indexcarti.php" class="btn btn-primary">Inapoi</a>
            </div>
        </header>
        <form action="process.php" method="post">
            <?php 
            if (isset($_GET['id'])) {
                include("connect.php");
                $id = $_GET['id'];
                $sql = "SELECT * FROM books WHERE id=$id";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_array($result);
                ?>
                     <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="Titlu" placeholder="Titlul Cartii:" value="<?php echo $row["title"]; ?>">
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="Autor" placeholder="Numele Autorului:" value="<?php echo $row["author"]; ?>">
            </div>
            <div class="form-element my-4">
                <textarea name="Descriere" id="" class="form-control" placeholder="Descrierea Cartii:"><?php echo $row["description"]; ?></textarea>
            </div>
            <input type="hidden" value="<?php echo $id; ?>" name="id">
            <div class="form-element my-4">
                <input type="submit" name="edit" value="Edit Carte" class="btn btn-primary">
            </div>
                <?php
            }else{
                echo "<h3>Cartea nu exista</h3>";
            }
            ?>
           
        </form>
        
        
    </div>
</body>
</html>