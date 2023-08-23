<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Set recipient email address
    $to = "prabhatkumarssm72@gmail.com";

    // Create email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    // Send the email
    mail($to, $subject, $message, $headers);

    // Send a confirmation response to the user (optional)
    $response = array("message" => "Message sent successfully");
    echo json_encode($response);
}
?>
