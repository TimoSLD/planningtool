<?php 
    $db = mysqli_connect('localhost', 'root', '', 'games');

    $game = "";
    $date = "";
    $play_minutes = "";
    $uitlegger = "";
    $spelers = "";
    $image = "";
    $description = "";
    $expansions = "";
    $skills = "";
    $url = "";
    $min_players = "";
    $max_players = "";
    $explain_minutes = "";

    if (isset($_POST['save'])) {
        $game = $_POST['game'];
        $date = $_POST['date'];
        $play_minutes = $_POST['play_minutes'];
        $uitlegger = $_POST['uitlegger'];
        $spelers = $_POST['spelers'];
        $image = $_POST['image'];
        $description = $_POST['description'];
        $expansions = $_POST['expansions'];
        $skills = $_POST['skills'];
        $url = $_POST['url'];
        $min_players = $_POST['min_players'];
        $max_players = $_POST['max_players'];
        $explain_minutes = $_POST['explain_minutes'];


        mysqli_query($db, "INSERT INTO planning (game, date, play_minutes, uitlegger, spelers, image, description, expansions, skills, url, min_players, max_players, explain_minutes) 
        VALUES ('$game', '$date', '$play_minutes', '$uitlegger', '$spelers', '$image', '$description', '$expansions', '$skills', '$url', '$min_players', '$max_players', '$explain_minutes')"); 
        header('location: planning.php');
    }
?>