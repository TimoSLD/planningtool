<?php
    require('includes/function.php');

    $result = plannerData();

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
            <h1 class="text-center ">planning</h1>
        </div>
    </div>
    <?php 
        require('includes/navbar.php');
    ?>
    <div class="row">
        <?php foreach($result as $row) { ?>
            <div class="img-thumbnail col-4">
                <p class="text-center">datum: <?=$row['date']?></p>
                <p class="text-center">uitlegger: <?=$row['uitlegger']?></p> 
                <p class="text-center">game: <?=$row['game']?></p>
                <div class="d-flex justify-content-center">
                <a href="updateform.php?id=<?php echo $row['id']; ?>"
                class="btn btn-success mr-2">edit</a>
                <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('do you want to delete?')"confirm
                class="btn btn-danger">Delete</a>
                <a href="planningdetail.php?id=<?php echo $row['id']; ?>"
                class="btn btn-primary ml-2">detail</a>
            </div>
            </div>
        <?php } ?>
    </div>
</body>
</html>