<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Webpage</title>
</head>
<body>
<div class="container my-4">
    <a href="index.php">Home</a>
    <a href="about.php">About Us</a>
    <a href="signup.php">Sign Up</a>
    <a href="login.php">Log In</a>
    <a href="contact.php">Contact Us</a>
    <a href="impact.php">Our Impact</a>
    </div>

    <body style="background-color: turquoise;"></body>
    <?php
include_once("templates/header.php");
include_once("templates/nav.php");
?>

    <h1>Log In</h1>
    <style>
        h1{
            color: black;
            text-transform: uppercase;
            text-decoration: wavy;
        }
    </style>
        <form action="login_action.php" method="post">
    <input type="email" name="email" placeholder="Email Address" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <input type="submit" class="btn btn-default" value="Log In">
</form>

<?php include_once("templates/footer.php"); ?>
</body>
</html>