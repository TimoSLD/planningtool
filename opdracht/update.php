<?php
$driver = "mysql:dbname=games;host=127.0.0.1";
$user = "root";
$password = "";

$id = $_POST["id"];
$date = $_POST["date"];
$spelers = $_POST["spelers"];
$uitlegger = $_POST["uitlegger"];

$pdo = new PDO($driver, $user, $password);
$stmt = $pdo->prepare("UPDATE planning SET date = :date, spelers = :spelers, uitlegger = :uitlegger WHERE id = :id"
    );
$stmt->bindParam(":id", $id);
$stmt->bindParam(":date", $date);
$stmt->bindParam(":spelers", $spelers);
$stmt->bindParam(":uitlegger", $uitlegger);
$stmt->execute();
header('location: planning.php');
?>