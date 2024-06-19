<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Webpage</title>
    <style>
        h1 {
            text-align: center;
            color: turquoise;
            text-transform: uppercase;
            text-decoration: underline;
        }
        body {
            background-color: turquoise;
        }
    </style>
    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php require_once("templates/header.php");?>
        <div class="header">
    <?php include_once("templates/nav.php");?>
    <div class="container my-4">
        <a href="index.html">Home</a>
        <a href="about.html">About Us</a>
        <a href="Sign Up.html">Sign Up</a>
        <a href="Log In.html">Log In</a>
        <a href="contact.html">Contact Us</a>
        <a href="impact.html">Our Impact</a>
    </div>
    </div>
    <!--NavBar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">My Webpage</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Sign Up.html">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Log In.html">Log In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="impact.html">Our Impact</a>
                    </li>
                            
                        <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                            <li><a class="dropdown-item" href="#">Service 1</a></li>
                            <li><a class="dropdown-item" href="#">Service 2</a></li>
                            <li><a class="dropdown-item" href="#">Service 3</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
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

        <!-- Table to display goods or services -->
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
                <tr>
                    <td>Service 1</td>
                    <td>Description of service 1</td>
                    <td>Ksh.500</td>
                </tr>
                <tr>
                    <td>Service 2</td>
                    <td>Description of service 2</td>
                    <td>Ksh.1000</td>
                </tr>
                <tr>
                    <td>Service 3</td>
                    <td>Description of service 3</td>
                    <td>Ksh.1500</td>
                </tr>
            </tbody>
        </table>

        <!-- Form to capture goods or service details -->
        <h2>Service Details Form</h2>
        <form>
            <div class="mb-3">
                <label for="serviceName" class="form-label">Service Name</label>
                <input type="text" class="form-control" id="serviceName" placeholder="Enter service name">
            </div>
            <div class="mb-3">
                <label for="serviceDescription" class="form-label">Service Description</label>
                <textarea class="form-control" id="serviceDescription" rows="3" placeholder="Enter service description"></textarea>
            </div>
            <div class="mb-3">
                <label for="servicePrice" class="form-label">Service Price</label>
                <input type="number" class="form-control" id="servicePrice" placeholder="Enter service price">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    
</body>
</html>
