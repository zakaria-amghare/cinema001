<?php
// Database connection parameters
$servername = "localhost";
$username = "your_username";  // Replace with your MySQL username
$password = "your_password";  // Replace with your MySQL password
$dbname = "your_database";    // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch all categories
$sql = "SELECT * FROM categorie";
$result = $conn->query($sql);

// Store categories in an array
$categories = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $categories[] = $row;
    }
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Zaki E-Commerce - Categories</title>
    <style>
        /* Additional styles for category cards */
        .categories-section {
            padding: 60px 0;
            background-color: #f9f9f9;
        }
        
        .categories-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
        }
        
        .category-card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 300px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .category-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }
        
        .category-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        
        .category-content {
            padding: 20px;
        }
        
        .category-name {
            font-size: 22px;
            color: #333;
            margin-bottom: 10px;
            text-transform: capitalize;
        }
        
        .category-description {
            color: #666;
            margin-bottom: 20px;
            line-height: 1.5;
        }
        
        .category-link {
            display: inline-block;
            background-color: #518d2e;
            color: white;
            padding: 10px 20px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        
        .category-link:hover {
            background-color: #3d6b22;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src="images/logo.png" alt="Zaki logo" width="125">
                </div>
                <nav>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="categories.php">Categories</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="account.html">Account</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <section class="categories-section">
        <div class="container">
            <h2 class="section-title">Shop By Category</h2>
            
            <div class="categories-container">
                <?php if(empty($categories)): ?>
                    <p>No categories found.</p>
                <?php else: ?>
                    <?php foreach($categories as $category): ?>
                        <div class="category-card">
                            <img src="<?php echo htmlspecialchars($category['photo_link']); ?>" alt="<?php echo htmlspecialchars($category['name']); ?>" class="category-image">
                            <div class="category-content">
                                <h3 class="category-name"><?php echo htmlspecialchars(str_replace('_', ' ', $category['name'])); ?></h3>
                                <p class="category-description"><?php echo htmlspecialchars($category['description']); ?></p>
                                <a href="products.php?category=<?php echo $category['id']; ?>" class="category-link">View Products</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h3>Zaki</h3>
                    <p>Quality products for your modern lifestyle</p>
                </div>
                <div class="footer-col">
                    <h3>Links</h3>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="categories.php">Categories</a></li>
                        <li><a href="about.html">About</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Contact</h3>
                    <p>Email: info@zaki.com</p>
                    <p>Phone: (123) 456-7890</p>
                </div>
            </div>
            <hr>
            <p class="copyright">© 2025 Zaki - All Rights Reserved</p>
        </div>
    </footer>
</body>
</html>