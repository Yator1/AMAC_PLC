<!-- a php mailer to send data from the form to the company email -->

<?php
if(isset($_POST['submit'])){
    $to = "info@amacfoods.co.ke"; // this is the email address the form will be sent to
    $from = $_POST['email']; // this is the sender's email address
    $name = $_POST['name']; // this is the sender's name
    $subject = "Form submission";

    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;

    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    }
?>