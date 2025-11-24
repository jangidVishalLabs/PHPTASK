<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username= trim($_POST['username'] ?? '');
    $email = trim($_POST['email'] ?? ''); 
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';
    $first_name = trim($_POST['first_name'] ?? '');
    $last_name = trim($_POST['last_name'] ?? '');
    $mobile = trim($_POST['mobile'] ?? '');
    $gender = $_POST['gender'] ?? '';




    try {
        require_once 'dbh.inc.php';
        require_once 'signup_model.inc.php';
        require_once 'signup_controller.inc.php';

        // Error Handlers
        $errors = [];



           if(is_input_empty($username, $email, $password, $confirm_password, $first_name, $last_name || $mobile, $gender)) {
            $errors[] = "Please fill in all required fields.";
           }

           if(is_email_invalid($email)) {
            $errors[] = "Please enter a valid email address.";
           }
           
           if(is_username_taken($pdo, $username)){
            $errors[] = "Username is already taken.";
           }

           if(is_email_registered($pdo, $email)){
            $errors[] = "Email is already registered.";
           }

           if(do_passwords_match($password, $confirm_password)) {
            $errors[] = "Passwords do not match.";
        }


            require_once 'config_session.inc.php';

            if($errors){
                $_SESSION["errors_signup"] = $errors;

                
                header('Location: ../pages/signup.php');
                die();
            }


            // Create User
            $response = create_user($pdo, $first_name, $last_name, $username, $email, $mobile, $gender, $password);
            header('Location: ../index.php?signup=success');

            $pdo = null;
            $stmt = null;

            die();

    } catch (Exception $e) {
        die("Query failed: " . $e->getMessage());
    }

} else{
    header('Location: ../pages/signup.php');
    die();
}