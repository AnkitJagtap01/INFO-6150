<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // You can do something with the form data here (e.g., send an email, save to a database)

    // Assuming the form submission is successful
    echo "success";
} else {
    // If the request method is not POST, return an error
    header("HTTP/1.1 405 Method Not Allowed");
    echo "Method Not Allowed";
}
?>
