<?php
require_once("includes/db_connect.php");
include_once("templates/header.php");
include_once("templates/nav.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = mysqli_real_escape_string($conn, $_POST["fullname"]);
    $gender = mysqli_real_escape_string($conn, $_POST["gender"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $form = mysqli_real_escape_string($conn, $_POST["form"]);
    $school = mysqli_real_escape_string($conn, $_POST["school"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (fullname, gender, password, email, form, school, phone)
            VALUES ('$fullname', '$gender', '$hashed_password', '$email', '$form', '$school', '$phone')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        h1 {
            color: black;
            text-transform: uppercase;
            text-decoration: wavy;
        }
        body {
            background-color: turquoise;
        }
    </style>
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

    <h1>Sign Up</h1>
    <form action="signup.php" method="post">
        <label for="Fn">Fullname:</label><br>
        <input type="text" id="Fn" name="fullname" placeholder="Fullname" required><br><br>
        <input type="text" name="gender" placeholder="Gender" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <input type="email" name="email" placeholder="Email Address" required><br><br>
        <input type="number" name="form" placeholder="Form" required><br><br>
        <input type="text" name="school" placeholder="School" required><br><br>
        <input type="text" name="phone" placeholder="Phone Number" required><br><br>
        <input type="submit" class="btn btn-default" value="Sign Up">
    </form>

    <?php include_once("templates/footer.php"); ?>
</body>
</html>
