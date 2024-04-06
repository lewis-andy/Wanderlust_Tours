# Wanderlust_Tours
This repository houses the codebase for Wanderlust Tours, a comprehensive travel booking platform designed to inspire and facilitate unforgettable travel experiences around the globe. 

### Features
- view a list of travel destinations
- Add new travel destinations
- Edit existing travel destinations
-   Delete travel destinations
- Upload images for each destination
 -  Responsive design for mobile and desktop

### Technologies Used
- PHP
- MySQL
- HTML
- CSS 

### installation
1. Import the database.sql file into your MySQL database to create the necessary tables.
2. Update the config.php file with your database credentials.

```php
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wanderlust_tours";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

```


3. start php development server(Xampp)
4. Open your web browser and navigate to `localhost/Wanderlust_Tours/index.php` to access the application.

### usage 
- Navigate to the homepage to view the list of travel destinations.
- Click on the "Edit" button next to a destination to edit its details.
- Click on the "Delete" button to remove a destination from the list.
- Use the form to add a new destination by providing the city, category, price, description, and an optional image.