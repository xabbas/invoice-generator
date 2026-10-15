<?php
// $username = $_GET["username"] ?? "Guest";
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION["username"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
</head>
<body>
    <h1>Welcome <?= htmlspecialchars($username, ENT_QUOTES, "UTF-8") ?>!</h1>
    <br><br>
    <a href="logout.php">Log out</a>
</body>
</html>
