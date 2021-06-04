<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];
    
    $email_from = 'Easytutorials@avina.com';
    $email_subject = "";
    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Message: $message.\n";


    $to = "akvignesh05@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Rely-To: $visitor_email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("Location: vicky.html");
?>                    