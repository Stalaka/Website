<?php
include_once("db_connect.php");
include_once("header.php");
?>

<div class="container my-4">
    <h1>Home</h1>
    <img src="banner.jpg" class="img-fluid" alt="Banner">
    <p>This is a website that helps you learn. Results guaranteed! Get ahead of your class, give yourself a head start.</p>
    <ul>
        <li>Access Free KCSE lessons</li>
        <li>Evaluation and teacher SUPPORT</li>
        <li>Flexible payment plans</li>
        <li>Practice Questions</li>
    </ul>

    <h2>Our Services</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Service</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT name, description, price FROM services";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>{$row['name']}</td><td>{$row['description']}</td><td>Ksh.{$row['price']}</td></tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No services available</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <h2>Service Details Form</h2>
    <form>
        <div class="mb-3">
            <label for="serviceName" class
