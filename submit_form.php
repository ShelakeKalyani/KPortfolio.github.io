<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $sub = $_POST["sub"];
    $msg = $_POST["msg"];
    
    // Validate and sanitize the data (you should add more validation).
    // ...

    // Compose the email.
    $to = "kalyanishelake601@gmail.com";
    $subject = "New Form Submission";
    $message = "Name: $name\nEmail: $email\nSubject: $sub\nMessage: $msg";

    // Send the email.
    mail($to, $subject, $message);

    // Redirect or display a thank you message.
    header("Location: index.html");
    exit();
}
?>
