<?php
// Include the configuration file to access database credentials
require_once 'config.php';

// Create a database connection
$conn = new mysqli($servername, $username, $password, $database);

// Check if the connection was successful
if ($conn->connect_error) {
    // If connection fails, terminate the script and display error
    die("Database connection failed: " . $conn->connect_error);
}

// Optional: Set character set to ensure proper handling of special characters
$conn->set_charset("utf8mb4");

// Test connection and display number of rows
$sql = "SELECT * FROM categories";
$result = $conn->query($sql);

if ($result) {
    echo '<h2>Number of rows: ' . $result->num_rows . '</h2>';
    
    // Display the data
    while ($row = $result->fetch_assoc()) {
        echo '<pre>';
        print_r($row);
        echo '</pre>';
    }
} else {
    echo "Error: " . $conn->error;
}
?>