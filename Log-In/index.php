<?php
session_start();
$defaultUsername = "John123";
$defaultPassword = "password123";
$message = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if($username === $defaultUsername && $password === $defaultPassword) {
        $_SESSION["username"] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        $message = "Invalid credentials.";
    }
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <h2> Log In System </h2>
    <form method="POST">
        <label for="username">Enter Username
            <input type="text" placeholder="Username" required name="username">
        </label>
        <br><br>
         <label for="password">Enter Password
            <input type="password" placeholder="Password" required name="password">
        </label>
        <button type="submit">Submit</button>
    </form>
    <p style="color: red;">
        <?php echo $message; ?>
    </p>
    </center>
</body>
</html>