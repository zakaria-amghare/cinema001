<?php 
$servername = "localhost"; // Replace with your server name if not localhost
$username = "zakaria";        // Replace with your MySQL username
$password = "nzizou123";            // Replace with your MySQL password
$database = "cenema";     // Your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection     
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit']))
{
     
}
    
?>