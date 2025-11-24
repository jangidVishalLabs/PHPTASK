<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? ''); 
    $password = $_POST['password'] ?? '';

    try {
        require_once 'dbh.inc.php';
        require_once 'login_model.inc.php';
        require_once 'login_controller.inc.php';

        // Error Handlers
        $errors = [];

           if(is_input_empty($email, $password)) {
            $errors[] = "Please fill in all required fields.";
           }

           if(is_email_invalid($email)) {
            $errors[] = "Please enter a valid email address.";
           }

           if(!are_credentials_valid($pdo, $email, $password)) {
            $errors[] = "Incorrect email or password.";
           }

            require_once 'config_session.inc.php';

            if($errors){
                $_SESSION["errors_login"] = $errors;

                
                header('Location: ../pages/login.php');
                die();
            }

            // Log In User
            $user = get_user_by_email($pdo, $email);
            login_user($user);
            header('Location: ../index.php');


} catch (Exception $e){
    die("Query failed: " . $e->getMessage());
}

} else{
    header('Location: ../pages/login.php');
    die();
}