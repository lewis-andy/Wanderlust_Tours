<?php
// The rest of your PHP page content goes here

// Include the footer at the bottom
require_once('header.php');
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<?php
include 'config.php'; // Include your database connection

// Delete record if delete button is clicked
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $delete_query = "DELETE FROM travel_destinations WHERE id = ?";
    if ($stmt = $conn->prepare($delete_query)) {
        $stmt->bind_param("i", $delete_id);
        if ($stmt->execute()) {
            echo "<div class='alert alert-success'>Record deleted successfully.</div>";
        } else {
            echo "<div class='alert alert-danger'>Error deleting record: " . $stmt->error . "</div>";
        }
        $stmt->close();
    } else {
        echo "<div class='alert alert-danger'>Error preparing statement: " . $conn->error . "</div>";
    }
}

// Fetch all records from the travel_destinations table
$query = "SELECT * FROM travel_destinations";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    echo "<table class='table table-striped'>";
    echo "<thead><tr><th>ID</th><th>City</th><th>Category</th><th>Price</th><th>Description</th><th>Action</th></tr></thead>";
    echo "<tbody>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['city'] . "</td>";
        echo "<td>" . $row['category'] . "</td>";
        echo "<td>$" . $row['price'] . "</td>";
        echo "<td>" . $row['description'] . "</td>";
        echo "<td><a href='edit_destination.php?id=" . $row['id'] . "' class='btn btn-primary'>Edit</a> <a href='?delete_id=" . $row['id'] . "' class='btn btn-danger' onclick=\"return confirm('Are you sure you want to delete this record?');\">Delete</a></td>";
        echo "</tr>";
    }
    echo "</tbody></table>";
} else {
    echo "<div class='alert alert-info'>No records found.</div>";
}

// Close connection
$conn->close();
?>
