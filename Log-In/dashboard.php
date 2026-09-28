<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit();
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
     <form method="POST">
        <h2> Hello <?php echo $_SESSION["username"]; ?> </h2>
        <p> You have succesfully logged in! </p>
         <label for="edit">EDIT PROFILE
            <button><a href="edit.php">Edit Profile</a></button>s
            
        </label>
    </form>

    <a href="logout.php">Logout</a>
</body>
</html>