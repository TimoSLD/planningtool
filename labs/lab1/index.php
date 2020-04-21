<?php 
require("includes/function.php");

$result = getAllMembers();

$count = countChar();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/css/style4.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dynamische applicatie</title>
</head>
<body>
<header>
<h1>alle <?= $count?> characters</h1>
</header>
<div id="container">
    <?php foreach($result as $row) { ?>
        <a class="item" href="character.php?id=<?= $row['id'] ?>">
            <div class="left">
                <img class="avatar" src="assets/images/<?= $row['avatar']?>">
            </div>
            <div class="right">
                <h2> <?= $row['name'] ?></h2>
                <div class="stats">
                    <ul class="fa-ul">
                        <li><span class="fa-li"><i class="fas fa-heart"></i></span><?= $row['health']?></li>
                        <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span><?= $row['attack']?></li>
                        <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span><?= $row['defense']?></li>
                    </ul>
                </div>
            </div>
            <div class="button"><i class="fas fa-search"></i> bekijk</div>
        </a>
        <?php
        }
        ?>
</div>
    <?php include("includes/footer.php") ?>
</body>
</html>