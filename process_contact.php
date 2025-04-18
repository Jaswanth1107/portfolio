<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';
    
    // You can add email sending functionality here
    // For now, we'll just redirect back with a success message
    header("Location: contact.php?success=1");
    exit();
}
header("Location: contact.php");
exit();
