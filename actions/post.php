<?php
session_start();
include("./Connect.php");

$name = $_SESSION['name'];

$fevPhoto = $_SESSION['image'];

$image = rand(0,999).$_FILES['image']['name'];
$tmpImage = $_FILES['image']['tmp_name'];

$description = $_POST['description'];

$date = date("h:i a").'|'.date("l,m,y").'|';

$result = mysqli_query($conn,"INSERT INTO post VALUES(NULL,'$name','$image','$fevPhoto','$date','$description')");

move_uploaded_file($tmpImage,"../uploads/".$image);

header("location: ../admin.php");




