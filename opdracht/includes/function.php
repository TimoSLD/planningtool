<?php
function openDatabaseConnection() {
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "games";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
    return $conn;
}
catch(PDOException $e)
    {
    echo "connection failed: " . $e->getMessage();
    }
}

function getAllGames() {
    $conn = openDatabaseConnection();
    $result = $conn->prepare('SELECT * FROM games ORDER BY name');
    $result->execute();
    return $result->fetchAll();
}

function getOneGame() {
    $conn = openDatabaseConnection();
    $query = $conn->prepare("SELECT * FROM games where id=:id");
    $query->execute(['id' => $_GET['id']]);
    $result = $query->fetch();
    return $result;
}

function countGames() {
    $conn = openDatabaseConnection();
    $query = $conn->prepare("SELECT id FROM games");
    $query->execute();
    $count = $query->rowCount();
    return $count;
}

function plannerData(){
    $conn = openDatabaseConnection();
    $stmt = $conn->prepare('SELECT * FROM planning ORDER BY DATE');
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
}

function getOnePlannerData(){
    $conn = openDatabaseConnection();
    $query = $conn->prepare("SELECT * FROM planning where id=:id");
    $query->execute(['id' => $_GET['id']]);
    $result = $query->fetch();
    return $result;
}

function deleteLocation($id){
    $conn = openDatabaseConnection();
    $stmt = $conn->prepare("DELETE FROM planning WHERE id= :deleteid");
    $stmt->execute([":deleteid" =>$id]);
}

function getOnePlanning() {
    $conn = openDatabaseConnection();
    $query = $conn->prepare("SELECT * FROM planning where id=:id");
    $query->execute(['id' => $_GET['id']]);
    $result = $query->fetch();
    return $result;
}


