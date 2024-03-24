<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $phoneNumber = $_POST['phoneNumber'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $purposeOfLoan = $_POST['purposeOfLoan'];
    $typeOfLoan = $_POST['typeOfLoan'];
    $state = $_POST['state'];

    // Set up email parameters
    $to = "ogungbuyivictor@gmail.com"; // Your Gmail address
    $subject = "New message from your website";
    $body = "Name: $name\nPhonenumber: $phoneNumber\nEmail: $email
             Address: $address\nPurposeOfLoan: $purposeOfLoan\nTypeOfLoan: $typeOfLoan\nstate: $state";
    $headers = "From: $email";

    var_dump($body);


    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Email sent successfully!";
        header("Location: index.html");
    } else {
        echo "Failed to send email. Please try again later.";
    }
}
?>
