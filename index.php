<!DOCTYPE html>
<html>
	<head>
		<title>Inloggen</title>
	</head>
	<body>
		<h2>Log in met je email en wachtwoord.</h2>
		<div class="InputFields">
			<form method="POST" action="login.php">
				<input type="email" name="email" placeholder="Email" required>
				<br>
				<input type="password" name="password" placeholder="Password" required>
				<br>
				<button type="submit" class="button">Log in</button>
			</form>
		</div>
	</body>
</html>