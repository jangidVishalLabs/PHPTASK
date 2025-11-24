<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Reset Password</title>
  <link rel="stylesheet" href="../styles/form.css">
</head>
<body>
  <main class="form-page">
    <section class="form-card">
      <h1>Reset password</h1>
      <p class="muted">Enter your email and we'll send reset instructions.</p>

      <form action="#" method="post">
        <div class="field">
          <label for="email">Email</label>
          <input id="email" name="email" type="email" required />
        </div>
        <div class="actions">
          <button class="btn primary" type="submit">Send reset link</button>
          <a class="link" href="login.php">Back to login</a>
        </div>
      </form>
    </section>
  </main>
</body>
</html>
