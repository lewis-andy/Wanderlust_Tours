<?php
include 'config.php'; // Include your database connection

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $city = $_POST['city'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    // Check if file was uploaded without errors
    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
        // Get file contents
        $image = file_get_contents($_FILES["image"]["tmp_name"]);

        // Prepare an insert statement
        $query = "INSERT INTO travel_destinations (city, category, price, description, image) VALUES (?, ?, ?, ?, ?)";

        if ($stmt = $conn->prepare($query)) {
            // Bind variables to the prepared statement as parameters
            // The "b" parameter is for blob data
            $stmt->bind_param("ssdss", $city, $category, $price, $description, $image);

            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                echo "Record inserted successfully.";
            } else {
                echo "Error: " . $stmt->error;
            }

            // Close statement
            $stmt->close();
        } else {
            echo "Error preparing statement: " . $conn->error;
        }
    } else {
        echo "Error uploading image: " . $_FILES["image"]["error"];
    }
} else {
    echo "Form not submitted.";
}

// Close connection
$conn->close();
?>


<form action="add_destination.php" method="post" enctype="multipart/form-data">
    City: <input type="text" name="city"><br>
    Image: <input type="file" name="image"><br>
    Category: <input type="text" name="category"><br>
    Price: <input type="number" step="0.01" name="price"><br>
    Description: <textarea name="description"></textarea><br>
    <input type="submit" value="Upload">
</form>

<a href="read.php">view all data</a>