<?php

session_start();

$con = mysqli_connect('localhost', 'root','');
mysqli_select_db($con , 'reguser');
$name = $_POST['name'];
// $email = $_POST['email'];
$password= $_POST['password'];
$s = "SELECT * FROM `regg` WHERE `name` = '$name' && `password` = '$password'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num == 1){
   $_SESSION['username'] = $name;
   header('location:homee.php');
}
    else{
        header('location:signup.html');
    }
?>