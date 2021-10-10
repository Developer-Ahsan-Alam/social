<?php
include('./Connect.php');


$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$ConPassword = $_POST['confirmPassword'];

$image = $_FILES['image']['name'];
$tmpImage = $_FILES['image']['tmp_name'];

if($name && $email &&  $password && $ConPassword &&  $image){

    move_uploaded_file($tmpImage,"../accountUp/".$image);

    mysqli_query($conn , "INSERT INTO user_info VALUES(NULL,'$name','$email','$password','$image')");

    header("location: ../index.php?done='done'");
}else{
    header("location: ../index.php");
}

