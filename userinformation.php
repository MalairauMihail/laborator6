<?php

$con = new mysqli('localhost', 'root' ,'','laborator6' );

if(!$con) {
    die(mysqli_error($con));
   

}
else{
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $incomingContentType = $_SERVER['CONTENT_TYPE'];
        if($_POST){

            $user = $_POST['user'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            $sql = "INSERT INTO `userinfodata`(`user`,`email`,`message`) VALUES ('$user','$email','$message')";
            mysqli_query($con, $sql);
            header('Content-Type: application/json');
            die;
            
        }
        echo "MESSAGE IS SENT";
    }
}


        
?>