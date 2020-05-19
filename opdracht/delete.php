<?php

require ("includes/function.php");

$id = $_GET['id'];

deleteLocation($id);

header('location: planning.php');
?>