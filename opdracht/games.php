<?php
    require('includes/function.php');
    $conn = openDatabaseConnection();

    $result = getAllGames();
    $count = countGames();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/css/style1.css">
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
            <h1 class="text-center ">alle <?=$count?> games</h1>
        </div>
    </div>
    <nav class="navbar navbar-light bg-light mb-3">
        <a class="navbar-brand" href="index.php"><i class="fas fa-home"></i>home</a>
        <a class="navbar-brand" href="games.php"><i class="fas fa-gamepad"></i>games</a>
        <a class="navbar-brand" href="#"><i class="fas fa-calendar"></i>planner</a>
    </nav>
    <div class="container img-thumbnail">
        <h2>alle <?=$count?> games</h2>
            <div class="row">
                <?php foreach($result as $row) { ?>
                    <div class="img-thumbnail col-4">
                        <p><?= $row['name']?></p>
                        <img class="w-50" src="img/<?= $row['image']?>">
                        <div class="overlay">
                            <a href="detail.php?id=<?= $row['id'] ?>">
                                <button type="button" class="btn btn-dark" title="bekijk game">
                                <i class="fa fa-eye"></i></button>
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>  
</body>
</html>