<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = trim($_POST['email'] ?? '');
    try {
        require_once 'dbh.inc.php';
        require_once '../models/forget_password_model.inc.php';
        require_once '../controllers/forget_password_controller.inc.php';

        // Error Handlers
        $errors = [];

           if(is_email_invalid($email)) {
            $errors[] = "Please enter a valid email address.";
           }

           if(!is_email_registered($pdo, $email)){
            $errors[] = "Email is not registered.";
           }

            require_once 'config_session.inc.php';

            if($errors){
                $_SESSION["errors_forget_password"] = $errors;

                
                header('Location: ../pages/forgot_password.php');
                die();
            }

            // Send Reset Link
            $response = send_reset_link($pdo, $email);
            header('Location: ../pages/login.php?reset=link_sent');
} catch (Exception $e){
    die("Query failed: " . $e->getMessage());
}

} else{
    header('Location: ../pages/forgot_password.php');
    die();
}