<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $to = "info@doap.com";
    $subject = "Outbound SMS Alert";
    $message = "Hello Team, this is a message from the PBX alerting you to an outbound SMS.  Likely from one of our team members to a customer.

Check it out at:
	https://freepbx.doap.com/ucp/

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
