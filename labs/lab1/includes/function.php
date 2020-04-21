<?php
function openDatabaseConnection(){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dynamischeapplicatie";
$usrtable= "characters";

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

function countChar(){
    $conn = openDatabaseConnection();
    $query = $conn->prepare("SELECT id FROM characters ");
    $query->execute();
    $count = $query->rowCount();
    return $count;
}

function getOneMember(){
    $conn = openDatabaseConnection();
    $query = $conn->prepare("SELECT * FROM characters where id=:id");
    $query->execute(['id' => $_GET['id']]);
    $result = $query->fetch();

    return $result;
}

function getAllMembers(){
    $conn = openDatabaseConnection();
    $result = $conn->prepare('SELECT * FROM characters ORDER BY name');
    $result->execute();
    return $result->fetchAll();
}

?>
