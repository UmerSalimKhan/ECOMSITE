<?php
header('location:contact us.html');
$servername= "localhost";
$username= "root";
$password= "";
$database_name= "new";
$conn =  mysqli_connect($servername, $username, $password, $database_name);
if(!$conn){
    die("Connection Failed". mysqli_connect_error());
}
if(isset($_POST['SEND'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $sql_query = "INSERT INTO `new_table`(`name`, `email`, `phone`, `subject`, `message`) VALUES('$name','$email' , ; $phone', '$subject', '$message' )";
    if(mysqli_query($conn, $sql_query)){
        echo "Submitted";
    }
    else{
        echo "Error". $sql . "" .  mysqli_error($conn);
    }
    mysqli_close($conn);

}
?>