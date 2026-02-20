<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}
$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Dashboard</title>
    <style>body{font-family:Arial,Helvetica,sans-serif;padding:24px;background:#f9f9f9} .box{background:#fff;padding:20px;border-radius:6px;max-width:700px;margin:0 auto;box-shadow:0 2px 6px rgba(0,0,0,.06)}</style>
</head>
<body>
<div class="box">
    <h1>Welcome, <?=htmlspecialchars($user)?>!</h1>
    <p>This is a protected page. Only authenticated users can see this.</p>
    <p><a href="logout.php">Log out</a></p>
</div>
</body>
</html>
