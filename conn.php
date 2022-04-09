<?php
header('location:contact us.html');
if (isset($_POST['SEND'])) {
    if (isset($_POST['name']) && isset($_POST['email']) &&
        isset($_POST['phone']) && isset($_POST['subject']) &&
        isset($_POST['message'])) {
         
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];
     $message = $_POST['message'];
    
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "contact_us";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT email FROM con WHERE email = ? LIMIT 1";
            $Insert = "INSERT INTO con(name, email, phone,subject, message) values(?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
          
            $rnum = $stmt->num_rows;
            if ($rnum == 0) {
                $stmt->close();
                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("sssss",$name, $email, $phone, $subject, $message);
                if ($stmt->execute()) {
                    echo "Message Sent!";
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "Use diff email pls...";
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        die();
    }
}
else {
    echo "Submit button is not set";
}
?>
