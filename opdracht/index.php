<?php
     require('includes/function.php');
     $conn = openDatabaseConnection();

     $count = countGames();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planningstool</title>
</head>
<body class="bg-dark">
    <div class="container-fluid img-thumbnail bg-dark">
        <div class="jumbotron mt-3">
        <h1 class="text-center ">welkom</h1>
    </div>
    <?php 
        require_once('includes/navbar.php'); 
    ?>
    </div>
    <div class="container img-thumbnail mt-3 mb-3">
        <h1 class="text-center ">voorbeelden:</h1>
    </div>
    <div class="container img-thumbnail d-flex justify-content-center">
        <img src="img/gizmos.jpg" class="img-thumbnail w-25">
        <img src="img/spyfall.jpg" class="img-thumbnail mr-5 ml-5 w-25">
        <img src="img/climbers.jpg" class="img-thumbnail w-25">
    </div>
    <div class="container img-thumbnail d-flex justify-content-center mt-3">
        <img src="img/concept.jpg" class="img-thumbnail w-25">
        <img src="img/counterfeiters.jpg" class="img-thumbnail mr-5 ml-5 w-25">
        <img src="img/roborally.jpg" class="img-thumbnail w-25">
    </div>
    <div class="container img-thumbnail mt-3 mb-3 d-flex justify-content-center">
        <form method="get" action="games.php">
            <button class="btn btn-dark" type="submit">alle <?= $count?> games bekijken</button>
        </form>  
    </div>
    <div class="container img-thumbnail mb-3">
        <p class="text-center">Timo Lemmen - 2020</p>
    </div>
</body>
</html>