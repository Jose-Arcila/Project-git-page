<?php 
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $visitor_phone = $_POST['phone'];
    $message = $_POST['message'];

    $email_from = 'josedaveja@gmail.com';
    
    $email_subject = 'New Form Submission';

    $email_body = "User: $name.\n".
                    "User's email: $visitor_email.\n".
                       "User's phone: $visitor_phone.\n".
                          "Message: $message.\n";

    $to = "jose.arcila@ideaware.co";

    $headers = "From: $email_from \r\n";
    
    $headers .= "Reply-To: $visitor_email \r\n";

    mail ($to,$email_subject,$email_body,$headers);

    header ("Location: ../index.html");

?>

    