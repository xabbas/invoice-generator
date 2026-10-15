<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $correctUsername = "abbas";
    $correctPassword = "12345";
    $error = "";

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $correctUsername && $password === $correctPassword){

        $_SESSION["username"] = $username;
        // header("Location: dashboard.php?username=" . urlencode($username));
        header("Location: dashboard.php");
        exit;
    }
    else{
        $error = "Incorrect username or password!";
    }
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=`">
    <title>Login</title>
</head>
<body>
    <form method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username"> <br>

        <label for="password">Password</label>
        <input type="password" name="password" id="password"> <br>

        <input type="submit" id="login" value="Login">
    </form>

    <?php if($error !== "")?>
        <p style="color: red;">
            <?= htmlspecialchars($error, ENT_QUOTES, "UTF-8") ?>
        </p>
    </php enif; ?>
</body>
</html>