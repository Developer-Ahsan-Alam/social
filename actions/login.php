<?php 
include('./Connect.php');
session_start();


$email = $_POST['email'] ;
$password = $_POST['password'] ;

$result = mysqli_query($conn,"SELECT * FROM user_info WHERE email = '$email' AND password = '$password'");

 $num = mysqli_num_rows($result);

 $result = mysqli_query($conn,"SELECT * FROM user_info WHERE email = '$email' AND password = '$password'");
$info = mysqli_fetch_array($result);

$_SESSION['name'] = $info['name'];
$_SESSION['image'] = $info['image'];






 if($num >= 1){
    header('location: ../admin.php');
    $_SESSION["success"]='success';
 }else{
     header('location: ../index.php');
     $_SESSION["result"]='x';
 }