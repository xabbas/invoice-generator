<?php
session_start();

// checks if there is a logged in session
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
}

// logout
$_SESSION = [];
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="refresh" content="5;url=login.php">
	<title>Logging out</title>
</head>
<body>
	<h1>Logging out...</h1>
	<p>You will be redirected to the login page in <strong><span id="counter">5</span></strong>

	<script>

	let seconds = 5;

	const countdown = document.getElementById("counter");

	const timer = setInterval(function () {
	        seconds--;
			countdown.textContent = seconds;

			if (seconds <= 0) {
			  clearInterval(timer)
			}

	}, 1000)
	</script>
</body>
</html>
