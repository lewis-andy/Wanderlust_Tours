<?php
// The rest of your PHP page content goes here

// Include the footer at the bottom
require_once('header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Destination</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom CSS for additional styling */
        body {
            padding-top: 50px; /* Adjust according to your needs */
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <?php
            include 'config.php'; // Include your database connection

            // Check if the form was submitted
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Retrieve form data
                $city = $_POST['city'];
                $category = $_POST['category'];
                $price = $_POST['price'];
                $description = $_POST['description'];

                // Prepare an insert statement
                $query = "INSERT INTO travel_destinations (city, category, price, description) VALUES (?, ?, ?, ?)";

                if ($stmt = $conn->prepare($query)) {
                    // Bind variables to the prepared statement as parameters
                    $stmt->bind_param("ssds", $city, $category, $price, $description);

                    // Attempt to execute the prepared statement
                    if ($stmt->execute()) {
                        echo "<div class='alert alert-success'>Record inserted successfully.</div>";
                    } else {
                        echo "<div class='alert alert-danger'>Error: " . $stmt->error . "</div>";
                    }

                    // Close statement
                    $stmt->close();
                } else {
                    echo "<div class='alert alert-danger'>Error preparing statement: " . $conn->error . "</div>";
                }
            }

            // Close connection
            $conn->close();
            ?>
            <h2 class="mt-3 mb-3">Add Destination</h2>

            <form action="add_destination.php" method="post">
                <div class="form-group">
                    <label for="city">City:</label>
                    <input type="text" class="form-control" id="city" name="city">
                </div>
                <div class="form-group">
                    <label for="category">Category:</label>
                    <input type="text" class="form-control" id="category" name="category">
                </div>
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="number" step="0.01" class="form-control" id="price" name="price">
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea class="form-control" id="description" name="description"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Upload</button>
            </form>

            <a href="read.php" class="mt-3">View all data</a>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
