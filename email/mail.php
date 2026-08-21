<?php

$to = 'bhaveshborse44@gmail.com';
$subject = 'Simple Email';
$message = 'Hi, this is text mail';
$from = 'yashmahajan99@gmail.com';   // Sending email

if(mail($to, $subject, $message, $from))
{
    echo "Your mail has been sent successfully.";
}
else
{
    echo "Unable to send email. Please try again!";
}

?>