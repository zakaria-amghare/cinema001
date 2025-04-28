<?php
// Test if MySQLi is available
if (extension_loaded('mysqli')) {
    echo "MySQLi extension is loaded\n";
} else {
    echo "MySQLi extension is NOT loaded\n";
}

// Try to create a new MySQLi instance
try {
    $mysqli = new mysqli('localhost', 'root', '', 'test');
    echo "MySQLi connection successful\n";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
?> 