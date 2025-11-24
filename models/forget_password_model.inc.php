<?php

declare(strict_types=1);

function  save_reset_token($pdo, $email, $token): void {
    $sql = "UPDATE users SET reset_token = :token, token_expiry = DATE_ADD(NOW(), INTERVAL 1 HOUR) WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['token' => $token, 'email' => $email]);
    
}