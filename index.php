<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <title>Search data</title>
</head>
<body>
    <div class="container bg-white justify-content-center">
    <form action="index.php" method="post" class="taille justify content-center">
    <label for="search" class="text-center fw-bold text-primary"> Saisissez une recherche</label>
    <input type="text" class="form-control" placeholder="Search" name="search" id="search">

    <button type="submit"  class="btn btn-primary mt-3" name="research"> Search</button>
</form>

    </div>
    <?php
    include_once('vue.php');
    ?>
    


   <link rel="stylesheet" href="bootstrap-4.5.3-dist/js/bootstrap.min.js"> 
</body>
</html>