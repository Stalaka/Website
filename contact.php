
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Webpage</title>
</head>
<body>
<?php
    require_once("includes/db_connect.php");
    include_once("templates/header.php");
    include_once("templates/nav.php");
    if(isset($_POST["send_message"])){
        $fullname = mysqli_real_escape_string($conn, addslashes($_POST["fullname"]));
        $email = mysqli_real_escape_string($conn, addslashes($_POST["email_address"]));
        $subject_line = mysqli_real_escape_string($conn, addslashes($_POST["subject_line"]));
        $text_message = mysqli_real_escape_string($conn, addslashes($_POST["message"]));

        $insert_message = "INSERT INTO messages (sender_name, sender_email, subject_line, message) VALUES ('$fullname', '$email', '$subject_line', '$text_message')";
        
        if ($conn->query($insert_message) === TRUE) {
            header("Location: contact.php");
            exit();
        } else {
            echo "Error: " . $insert_message . "<br>" . $conn->error;
        }
    }
?>

<div class="header">
    <div class="container my-4">
        <a href="index.html">Home</a>
        <a href="about.html">About Us</a>
        <a href="Sign Up.html">Sign Up</a>
        <a href="Log In.html">Log In</a>
        <a href="contact.html">Contact Us</a>
        <a href="impact.html">Our Impact</a>
    </div>
</div>
    <h1>Contact Us</h1>
    <p><img src="help.jpg" width="900" height="700"></p>
    <p>Incase of any enquiries or need help signing up feel free to contact us and we will be willing to help. <br>
        Call Us: +2547564321777 <br>
        EmailAddress: saproache@gmail.com"
    </p>
    </form>
</div>
<?php include_once("templates/side_bar.php");?>
        </div>      
<?php include_once("templates/footer.php");?>
</body>
</html>
</div>
