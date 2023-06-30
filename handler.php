<?php
$name = $_POST [' name' ];
$visitor_email = $_POST['email'];
$tel = $_POST['tel'];
$message = $_POST ['message'];

$email_from = 'info@yourwebsite.com';

$email_tel = 'Submittion Number';

$email_body ="User Name: $name. \n".
              "User Email: $visitor email. \n".
                "Subject: $subject. \n".
                "User Message: $message • \n";

$to = 'sswifty656@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to, $email_tel, $email_body, $headers);

header("Location: contact.html");

?>