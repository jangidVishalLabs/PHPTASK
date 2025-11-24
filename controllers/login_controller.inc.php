<?php

declare(strict_types=1);



function is_input_empty(string $email, string $password): bool {
    return empty($email) || empty($password);

}

function is_email_invalid(string $email): bool {
    return !filter_var($email, FILTER_VALIDATE_EMAIL);
}   

function are_credentials_valid(object $pdo, string $email, string $password): bool {
    $user = get_user_by_email($pdo, $email);
    if ($user && password_verify($password, $user['pwd'])) {
        return true;
    }
    return false;
}       


function login_user(array $user): void {
    require_once 'config_session.inc.php';
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
}
