<?php require('includes/function.php'); 

    $id = $_POST['id'];
    $locationName = $_POST["location_name"];

    $pdo = openDatabaseConnection();
    $statement = $pdo->prepare('UPDATE location SET location = :location_name WHERE id=:id');
    $statement->bindParam(":id", $id);
    $statement->bindParam(":location_name", $locationName);

    
    //header('location: character.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>