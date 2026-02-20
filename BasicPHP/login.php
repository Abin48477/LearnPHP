<?php
session_start();
$error = '';
if (isset($_POST['login'])) {
	$username = trim($_POST['username'] ?? '');
	$password = $_POST['password'] ?? '';

	// Simple hard-coded users for demo. Replace with DB lookup as needed.
	$users = [
		'admin' => 'secret',
		'user' => 'password'
	];

	if (isset($users[$username]) && $users[$username] === $password) {
		$_SESSION['user'] = $username;
		header('Location: dashboard.php');
		exit;
	} else {
		$error = 'Invalid username or password';
	}
}
if (isset($_GET['logged_out'])) {
	$error = 'You have been logged out.';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Login</title>
	<style>
		body{font-family:Arial,Helvetica,sans-serif;background:#f4f4f4;padding:40px}
		.card{max-width:380px;margin:0 auto;background:#fff;padding:20px;border-radius:6px;box-shadow:0 2px 8px rgba(0,0,0,.1)}
		input{width:100%;padding:10px;margin:8px 0;box-sizing:border-box}
		button{width:100%;padding:10px;margin-top:10px}
		.error{color:#b00020;margin-bottom:10px}
	</style>
</head>
<body>
<div class="card">
	<h2>Login</h2>
	<?php if ($error): ?>
		<div class="error"><?=htmlspecialchars($error)?></div>
	<?php endif; ?>
	<form method="post" action="">
		<label>Username</label>
		<input type="text" name="username" required autofocus>
		<label>Password</label>
		<input type="password" name="password" required>
		<button type="submit" name="login">Sign in</button>
	</form>
</div>
</body>
</html>