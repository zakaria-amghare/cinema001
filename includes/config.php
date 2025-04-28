<?php
$servername = "localhost"; // Replace with your server name if not localhost
$username = "root";        // Replace with your MySQL username
$password = "nzizou123";            // Replace with your MySQL password
$database = "Ecomerce";     // Your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

echo '<h2>test conn</h2>';
        $sql = "SELECT * FROM categories";
        $result = $conn->query($sql);
        $result->fetch_assoc();

        $rowCount = $result->num_rows;
echo "<h2>$rowCount</h2>";

?>
