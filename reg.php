<?php
session_start();
header('location:signup.html');
$con = mysqli_connect('localhost:3306', 'root','Umer1234');
mysqli_select_db($con, 'reguser');
$name = $_POST['name'];
$email = $_POST['email'];
$password= $_POST['password'];
$s = "SELECT * FROM `regg` WHERE `name` = '$name'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num == 1){
    echo  "Username Already Taken!";
    }
    else $reg = "INSERT INTO `regg`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";
    mysqli_query($con, $regg);
    echo "Registration Successful";
?>