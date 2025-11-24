<?php

declare(strict_types=1);


function check_signup_errors() {
    if(isset($_SESSION["errors_signup"]) && !empty($_SESSION["errors_signup"])) {
        echo '<div class="error-messages">';
        foreach($_SESSION["errors_signup"] as $error) {
            echo '<p class="error">' . htmlspecialchars($error) . '</p>';
        }
        echo '</div>';
        unset($_SESSION["errors_signup"]);
    }
    else if (isset($_GET['signup']) && $_GET['signup'] === 'success') {
        echo '<div class="success-message">';
        echo '<p class="success">Registration successful! You can now <a href="login.php">log in</a>.</p>';
        echo '</div>';
    }                                                                                                                   
}