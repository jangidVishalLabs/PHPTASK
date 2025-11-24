<?php

declare(strict_types=1);


function get_username(object $pdo , string $username){
    $query = "SELECT username FROM users WHERE username = :username;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function get_email(object $pdo , string $email){
    $query = "SELECT email FROM users WHERE email = :email;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function insert_user(object $pdo, string $first_name, string $last_name, string $username, string $email, string $mobile, string $gender, string $hashed_password): void {
    $query = "INSERT INTO users (first_name, last_name, username, email, mobile, gender, pwd) VALUES (:first_name, :last_name, :username, :email, :mobile, :gender, :pwd);";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':first_name', $first_name);
    $stmt->bindParam(':last_name', $last_name);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':mobile', $mobile);
    $stmt->bindParam(':gender', $gender);
    $stmt->bindParam(':pwd', $hashed_password);
    $stmt->execute();
}   