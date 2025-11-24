<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<title>Sign Up</title>
	<link rel="stylesheet" href="../styles/form.css">
	<meta name="robots" content="noindex">
</head>
<body>
	<main class="form-page">
		<section class="form-card">
			<h1>Create an account</h1>
			<p class="muted">Quick and secure — join us today.</p>

			<form id="signupForm" action="#" method="post" novalidate>
				<div class="row">
					<div class="field half">
						<label for="first_name">First Name</label>
						<input id="first_name" name="first_name" type="text" required />
					</div>
					<div class="field half">
						<label for="last_name">Last Name</label>
						<input id="last_name" name="last_name" type="text" required />
					</div>
				</div>

				<div class="row">
					<div class="field">
						<label for="username">Username</label>
						<input id="username" name="username" type="text" required />
					</div>
				</div>

				<div class="row">
					<div class="field">
						<label for="email">Email</label>
						<input id="email" name="email" type="email" required />
					</div>
				</div>

				<div class="row">
					<div class="field half">
						<label for="mobile">Mobile No</label>
						<input id="mobile" name="mobile" type="tel" pattern="[0-9+\- ]{6,20}" placeholder="e.g. +1234567890" />
					</div>
					<div class="field half">
						<label for="gender">Gender</label>
						<select id="gender" name="gender">
							<option value="">Prefer not to say</option>
							<option value="female">Female</option>
							<option value="male">Male</option>
							<option value="other">Other</option>
						</select>
					</div>
				</div>

				<div class="row">
					<div class="field half">
						<label for="password">Password</label>
						<input id="password" name="password" type="password" minlength="8" required />
					</div>
					<div class="field half">
						<label for="confirm_password">Confirm Password</label>
						<input id="confirm_password" name="confirm_password" type="password" minlength="8" required />
					</div>
				</div>

				<div class="actions">
					<button type="submit" class="btn primary">Register</button>
					<a class="link" href="login.php">Already have an account? Sign in</a>
				</div>
			</form>
		</section>
	</main>

</body>
</html>
