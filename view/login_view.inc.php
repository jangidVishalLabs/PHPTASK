<?php

declare(strict_types=1);

function check_login_errors() {
    if(isset($_SESSION["errors_login"]) && !empty($_SESSION["errors_login"])) {
        echo '<div class="error-messages">';
        foreach($_SESSION["errors_login"] as $error) {
            echo '<p class="error">' . htmlspecialchars($error) . '</p>';
        }
        echo '</div>';
        unset($_SESSION["errors_login"]);
    }
}