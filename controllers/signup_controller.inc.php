<?php

declare(strict_types=1);

function is_input_empty(string $username, string $email, string $password, string $confirm_password, string $first_name, string $last_name, string $mobile): bool {
    return empty($username) || empty($email) || empty($password) || empty($confirm_password) || empty($first_name) || empty($last_name) || empty($mobile);

}

function is_email_invalid(string $email): bool {
    return !filter_var($email, FILTER_VALIDATE_EMAIL);
}   



function is_username_taken(object $pdo, string $username){
    if(get_username($pdo, $username)){
        return true;
    }
    return false;
}

function do_passwords_match(string $password, string $confirm_password): bool {
    return $password !== $confirm_password;
}

function is_email_registered(object $pdo, string $email){
    if(get_email($pdo, $email)){
        return true;
    }
    return false;
}


function create_user(object $pdo, string $first_name, string $last_name, string $username, string $email, string $mobile, string $gender, string $password): void {

    $options = [
        'cost' => 12,
    ];

    $hashed_password = password_hash($password, PASSWORD_BCRYPT, $options);
    insert_user($pdo, $first_name, $last_name, $username, $email, $mobile, $gender, $hashed_password);
}