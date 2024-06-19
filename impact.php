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
<?php
include_once("templates/header.php");
include_once("templates/nav.php");
?>
    <h1>Our Impact</h1>
    <p><img src="impact.jpg" width="400" height="400"></p>
    <p>Online learning websites have profoundly revolutionized education by offering unprecedented access to knowledge and skills. With the convenience of anytime, anywhere learning, these platforms have democratized education, breaking down barriers of geography and socioeconomic status. Students can now tailor their learning experiences to their individual needs and pace, fostering a more personalized approach to education. Furthermore, online learning websites have empowered learners to explore diverse subjects and disciplines beyond traditional classroom boundaries, fostering a culture of lifelong learning. However, their impact extends beyond students; educators can reach wider audiences and employ innovative teaching methods, while employers benefit from a more skilled and adaptable workforce. Despite challenges such as the digital divide and concerns about the quality of online education, these platforms continue to shape the future of learning, offering boundless opportunities for personal and professional growth.</p>
    <?php include_once("templates/footer.php"); ?>
</body>
</html>