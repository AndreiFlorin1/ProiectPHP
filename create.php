<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Adaugati carte</title>
</head>
<body>
    <div class="container my-5">
    <header class="d-flex justify-content-between my-4">
            <h1>Adauga carte</h1>
            <div>
            <a href="indexcarti.php" class="btn btn-primary">Inapoi</a>
            </div>
        </header>
        
        <form action="process.php" method="post">
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="Titlu" placeholder="Titlu Carte:">
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="Autor" placeholder="Numele Autorului:">
            </div>
            <div class="form-element my-4">
                <textarea name="Descriere" id="" class="form-control" placeholder="Descrierea Cartii:"></textarea>
            </div>
            <div class="form-element my-4">
                <input type="submit" name="create" value="Add Book" class="btn btn-primary">
            </div>
        </form>
        
        
    </div>
</body>
</html>