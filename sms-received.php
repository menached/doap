<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $to = "hank@doap.com";
    $subject = "Inbound SMS Alert";
    $message = "Hello Team, this is a message from the PBX alerting you to an inbound SMS.  

Check it out:
	https://sip.doap.com/ucp/

!";
    $headers = "From: info@doap.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "SMS alert sent successfully to Team!";
    } else {
        echo "Failed to send email to Team. Please try again later.";
    }
} else {
    echo "Invalid request method!";
}
?>
