<?php
require_once('connect.php');

// Check if the request is coming with POST method
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Gather the form content
    $fname = $_POST['first_name'] ?? '';
    $lname = $_POST['last_name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone_number = $_POST['phone_number'] ?? ''; // Assuming you have this field in your form
    $msg = $_POST['comments'] ?? '';

    $errors = [];

    // Validate and clean these values
    $fullname = trim($fname . ' ' . $lname);
    $phone_number = trim($phone_number);
    $email = trim($email);
    $msg = trim($msg);

    if (empty($lname)) {
        $errors['last_name'] = 'Last Name cant be empty';
    }

    if (empty($fname)) {
        $errors['first_name'] = 'First Name cant be empty';
    }

    if (empty($msg)) {
        $errors['comments'] = 'Comment field cant be empty';
    }

    if (empty($email)) {
        $errors['email'] = 'You must provide an email';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['legit_email'] = 'You must provide a REAL email';
    }

    if (empty($errors)) {
        // Insert these values as a new row in the contacts table
        $query = "INSERT INTO contacts (fname,lname, phone_number, email, message) VALUES ('$fname','$lname', '$phone_number', '$email', '$msg')";

        if (mysqli_query($connect, $query)) {
            // Format and send these values in an email
            $to = 'devianodames@hotmail.com';
            $subject = 'Message from your Portfolio site!';
            $message = "You have received a new contact form submission:\n\n";
            $message .= "Name: " . $fullname . "\n";
            $message .= "Email: " . $email . "\n";
            $message .= "Message: " . $msg . "\n";

            mail($to, $subject, $message);

            // Send success response
            echo 'Message sent successfully!';
        } else {
            // Send error response if SQL query fails
            echo 'Error: ' . mysqli_error($connect);
        }
    } else {
        // Send JSON-encoded errors array if validation fails
        echo json_encode($errors);
    }
} else {
    // Not a POST request
    echo 'Invalid request method.';
}
?>
