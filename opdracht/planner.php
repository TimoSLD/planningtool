<?php
require ("includes/function.php");
require ("includes/navbar.php");
$result = getOneGame();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Plannen</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    <form action="insert.php" method="post">
        <h2 class="mb-4">Je plant nu <?=$result["name"]?></h2><br>
        <label for="spelers">Spelers:</label>
        <input type="text" name="spelers" id="spelers" required><br>
        <label for="uitlegger">uitlegger:</label>
        <input type="text" name="uitlegger" id="uitlegger" required><br>
        <label for="date">Tijd:</label>
        <input type="time" name="date" id="date" required><br>
        <input type="text" name="game" id="game" value="<?=$result["name"]?>" hidden>
        <input type="text" name="play_minutes" id="play_minutes" value="<?=$result["play_minutes"]?>" hidden>
        <input type="text" name="image" id="image" value="<?=$result["image"]?>" hidden>
        <input type="text" name="description" id="description" specialchars(value="<?=$result['description']?>")hidden>
        <input type="text" name="expansions" id="expansions" value="<?=$result["expansions"]?>" hidden>
        <input type="text" name="skills" id="skilss" value="<?=$result["skills"]?>" hidden>
        <input type="text" name="url" id="url" value="<?=$result["url"]?>" hidden>
        <input type="text" name="min_players" id="min_players" value="<?=$result["min_players"]?>" hidden>
        <input type="text" name="max_players" id="max_players" value="<?=$result["max_players"]?>" hidden>
        <input type="text" name="explain_minutes" id="explain_minutes" value="<?=$result["explain_minutes"]?>" hidden>
        <input type="submit" class="btn btn-dark" name="save" >
    </form>
</body>
</html>
