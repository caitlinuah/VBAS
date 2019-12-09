Thank you for your message! VBAS will try to respond as soon as possible.
<?php
    $to = "VonBraunAstronomy@gmail.com";
    $subject = print $_POST['subject'];
    $body = print $_POST['name'] "said" print $_GET['message'] ". Their email address is" print $_POST['email']".";
    mail ($to, $subject, $body);
?>