<?php
include_once("templates/header.php");
include_once("templates/nav.php");
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
</div>

<?php include_once("templates/footer.php"); ?>
