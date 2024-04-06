<?php
require_once 'header.php';
?>

<?php
require 'config.php'; // Include your database connection

// Initialize variables for form data and errors
$id = $city = $category = $price = $description = "";
$id_err = $city_err = $category_err = $price_err = $description_err = "";

// Process form submission when the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate ID
    if (empty(trim($_POST["id"]))) {
        $id_err = "ID is required.";
    } else {
        $id = trim($_POST["id"]);
    }

    // Validate City
    if (empty(trim($_POST["city"]))) {
        $city_err = "City is required.";
    } else {
        $city = trim($_POST["city"]);
    }

    // Validate Category
    if (empty(trim($_POST["category"]))) {
        $category_err = "Category is required.";
    } else {
        $category = trim($_POST["category"]);
    }

    // Validate Price
    if (empty(trim($_POST["price"]))) {
        $price_err = "Price is required.";
    } elseif (!is_numeric(trim($_POST["price"]))) {
        $price_err = "Price must be a numeric value.";
    } else {
        $price = trim($_POST["price"]);
    }

    // Validate Description
    if (empty(trim($_POST["description"]))) {
        $description_err = "Description is required.";
    } else {
        $description = trim($_POST["description"]);
    }

    // Check for errors before updating the database
    if (empty($id_err) && empty($city_err) && empty($category_err) && empty($price_err) && empty($description_err)) {
        // Prepare an update statement
        $sql = "UPDATE travel_destinations SET city=?, category=?, price=?, description=? WHERE id=?";

        if ($stmt = $conn->prepare($sql)) {
            // Bind parameters to the prepared statement
            $stmt->bind_param("ssdsi", $param_city, $param_category, $param_price, $param_description, $param_id);

            // Set parameters
            $param_city = $city;
            $param_category = $category;
            $param_price = $price;
            $param_description = $description;
            $param_id = $id;

            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                // Redirect to the destination list page after successful update
                header("Location: read.php");
                exit;
            } else {
                echo "<div class='alert alert-danger'>Error updating record: " . $stmt->error . "</div>";
            }

            // Close statement
            $stmt->close();
        } else {
            echo "<div class='alert alert-danger'>Error preparing statement: " . $conn->error . "</div>";
        }
    }

    // Close connection
    $conn->close();
} else { // Retrieve data from database if not submitted
    // Check if the 'id' parameter is set and not empty
    if (!isset($_GET['id']) || empty($_GET['id'])) {
        header('Location: travel_destinations.php');
        exit;
    }

    // Get the ID from the URL parameter
    $id = (int) $_GET['id'];

    // Prepare a select statement
    $sql = "SELECT * FROM travel_destinations WHERE id = ?";

    if ($stmt = $conn->prepare($sql)) {
        // Bind variables to the prepared statement as parameters
        $stmt->bind_param("i", $id);

        // Attempt to execute the prepared statement
        if ($stmt->execute()) {
            // Store result
            $result = $stmt->get_result();

            // Check if destination exists
            if ($result->num_rows == 1) {
                // Fetch result row
                $row = $result->fetch_assoc();

                // Retrieve individual field values
                $city = $row['city'];
                $category = $row['category'];
                $price = $row['price'];
                $description = $row['description'];
            } else {
                // Redirect to the error page if the destination ID does not exist
                header("Location: error.php");
                exit;
            }
        } else {
            echo "<div class='alert alert-danger'>Error executing statement: " . $stmt->error . "</div>";
        }

        // Close statement
        $stmt->close();
    } else {
        echo "<div class='alert alert-danger'>Error preparing statement: " . $conn->error . "</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Destination</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
<div class="container">
    <h2>Edit Destination</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="hidden" name="id" value="<?php echo isset($row['id']) ? $row['id'] : ''; ?>">
        <div class="form-group">
            <label for="city">City:</label>
            <input type="text" class="form-control" id="city" name="city"
                   value="<?php echo isset($row['city']) ? $row['city'] : ''; ?>">
        </div>
        <div class="form-group">
            <label for="category">Category:</label>
            <input type="text" class="form-control" id="category" name="category"
                   value="<?php echo isset($row['category']) ? $row['category'] : ''; ?>">
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price"
                   value="<?php echo isset($row['price']) ? $row['price'] : ''; ?>">
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description"
                      name="description"><?php echo isset($row['description']) ? $row['description'] : ''; ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Destination</button>
    </form>
</div>
</body>

</html>
