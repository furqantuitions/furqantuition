<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];

    // Replace 'your_email@example.com' with your actual email address
    $to = "teapack534@example.com";
    $subject = "Form Submission";
    $message = "Name: $name\nEmail: $email";

    // Send email
    mail($to, $subject, $message);

    // You can also save the data to a database or perform other actions here

    echo "Form submitted successfully!";
} else {
    echo "Invalid request";
}
?>