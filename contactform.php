<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['mail'];
    $message = $_POST['message'];

    $emailFrom = "sarah.nldang@gmail.com";

    $email_subject = "New Form Submission";

    $email_body = "Name: $name.\n".
                    "Email: $visitor_email.\n".
                        "Message: $message.\n";

    $to = "sarah.nldang@gmail.com";

    $headers = "From: .$emailFrom \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";
    
    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");