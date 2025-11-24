<?php

declare(strict_types=1);

function is_email_invalid(string $email): bool {
    return !filter_var($email, FILTER_VALIDATE_EMAIL);
}
    require_once '../models/signup_model.inc.php';


function is_email_registered(PDO $pdo, string $email): bool {
    if(get_email($pdo, $email)){
        return true;
    }
    return false;
}

function send_reset_link(Object $pdo, string $email): bool {
    // In a real application, generate a secure token and store it with an expiration time
    $token = bin2hex(random_bytes(16));
    $reset_link = "https://yourdomain.com/reset_password.php?token=" . $token;

    // Store the token in the database (not implemented here for brevity)
     save_reset_token($pdo, $email, $token);

    // Send the email (using mail function for simplicity; consider using a library like PHPMailer)
    $subject = "Password Reset Request";
    $message = "Click the following link to reset your password: " . $reset_link;
    $headers = "From: no-reply@yourdomain.com";
    return mail($email, $subject, $message, $headers);
}   