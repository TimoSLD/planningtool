<?php

require('includes/function.php');

$result = getOneMember();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/css/style3.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>informatie <?= $result['name'] ?></title>
</head>
<body>
<header><h1><?= $result['name'] ?></h1>
    <a class="backbutton" href='index.php'><i class="fas fa-long-arrow-alt-left"></i> Terug</a></header>
<div id="container">
    <div class="detail">
        <div class="left">
            <img class="avatar" src="assets/images/<?= $result['avatar']?>">
            <div class="stats" style="background-color: <?= $result['color']?>">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span><?= $result['health']?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span><?= $result['attack']?></li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span><?= $result['defense']?></li>
                </ul>
                <ul class="gear">
                    <li><b>location</b>: <?= $result['location']?></li>
                    <li><b>Weapon</b>: <?= $result['weapon']?></li>
                    <li><b>Armor</b>: <?= $result['armor']?></li>
                </ul>
            </div>
        </div>
        <div class="right" >
            <p> <?= $result['bio'] ?>
            </p>
            <form action="update.php?<?= $_GET['id'] ?>" method="post">
                <label><b>Huidige Locatie: <?= $_GET['id'] ?></b></label>
                <select>
                    <option value="1" name="location_name">Bowsers Castle</option>
                    <option value="1" name="location_name">Toy Chest</option>
                    <option value="1" name="location_name">Prison</option>
                    <option value="1" name="location_name">Swamp</option>
                    <option value="1" name="location_name">Hyrule</option>
                    <option value="1" name="location_name">Mushroom Kingdom</option>
                    <option value="1" name="location_name">New York</option>
                    <option value="1" name="location_name">Sunnydale</option>
                </select>
                <input type="submit" value="update">
            </form>
        </div>
        <div style="clear: both"></div>
    </div>
</div>
    <footer>&copy; [Timo Lemmen] 2020</footer>
</body>
</html>

