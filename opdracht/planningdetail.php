<?php
     require('includes/function.php');
     $conn = openDatabaseConnection();

     $result = getOnePlanning();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/css/style.css">
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
            <h1 class="text-center"><?= $result['game'] ?></h1>
            <a class="backbutton float-right" href='games.php'><i class="fas fa-long-arrow-alt-left"></i> Terug</a>
        </div>
        <?php 
            require('includes/navbar.php');
        ?>
        </div>
        <div class="container img-thumbnail mt-3">
            <div class="row">
                <img class="mt-2 col-0 p-3 img-thumbnail w-25" src="img/<?= $result['image']?>">
                <div class="mt-2 pt-3 col img-thumbnail"><h2>description</h2><?= $result['description']?><hr>
                <?php if ($result['expansions'] === null) {
                    $result['expansions'] = "geen";
                    }?>
                <div class="pt-3"><a>expansions: </a><?= $result['expansions']?></div>
                <div class=""><a>skills: </a><?= $result['skills']?></div>
                <div class=""><a>minimum players needed: </a><?= $result['min_players']?></div>
                <div class=""><a>maximum players: </a><?= $result['max_players']?></div>
                <div class=""><a>explain minutes: </a><?= $result['explain_minutes']?></div>
                <div class=""><a>play minutes: </a><?= $result['play_minutes']?></div></div>
            </div> 
            <div class="mt-2 pt-3 col img-thumbnail">
            <div class=""><a>starttijd: </a><?= $result['date']?></div>
                <div class=""><a>uitlegger: </a><?= $result['uitlegger']?></div>
                <div class=""><a>spelers: </a><?= $result['spelers']?></div></div>
            </div>
        </div>
</body>
</html>