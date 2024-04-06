<?php
include 'config.php'; // Include your database connection

// Check if ID parameter is passed in the URL
if (isset($_GET['id']) && !empty($_GET['id'])) {
    // Prepare a delete statement
    $query = "DELETE FROM travel_destinations WHERE id = ?";

    if ($stmt = $conn->prepare($query)) {
        // Bind ID parameter to the prepared statement
        $stmt->bind_param("i", $_GET['id']);

        // Attempt to execute the prepared statement
        if ($stmt->execute()) {
            echo "Record deleted successfully.";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close statement
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }
}

// Close connection
$conn->close();
?>
