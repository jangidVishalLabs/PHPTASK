<?php 
    require_once '../includes/config_session.inc.php';
    require_once '../includes/login_view.inc.php';
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Login</title>
  <link rel="stylesheet" href="../styles/form.css">
  <meta name="robots" content="noindex">
</head>
<body>
  <main class="form-page">
    <section class="form-card">
      <h1>Welcome back</h1>
      <p class="muted">Sign in to continue to your account.</p>

      <form id="loginForm" action="../includes/login.inc.php" method="post" novalidate>
        <div class="row">
          <div class="field">
            <label for="email">Email</label>
            <input id="email" name="email" type="email" required />
          </div>
        </div>

        <div class="row">
          <div class="field">
            <label for="password">Password</label>
            <input id="password" name="password" type="password" required />
          </div>
        </div>

        <div class="row small">
          <label class="checkbox"><input type="checkbox" name="remember"> Remember me</label>
          <a class="link right" href="forgot_password.php">Forgot password?</a>
        </div>

        <div class="actions">
          <button type="submit" class="btn primary">Sign in</button>
          <a class="link" href="signup.php">Create account</a>
        </div>
      </form>
      <?php check_login_errors(); ?>
    </section>
  </main>


</body>
</html>
