<?php

if(isset($_POST['submit'])){
    $username = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    if(empty($username) || empty($email) || empty($subject) || empty($message)){
        header('location:index.php?');
    }
    else{
        $to = "bmeher249@gmail.com";

        if (mail($to,$subject,$message,$email)) {
            header("location:index.php?success");
        }
    }
}
else{
    header("location:index.php");
}
?>