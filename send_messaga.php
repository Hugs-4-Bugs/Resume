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
    $mailResult = mail($to, $subject, $message, $headers);

    if ($mailResult) {
        // Send a confirmation response to the user
        $response = array("message" => "Message sent successfully");
        echo json_encode($response);
    } else {
        // Send an error response to the user
        http_response_code(500); // Internal Server Error
        $response = array("message" => "Error sending message");
        echo json_encode($response);
    }
}
?>
