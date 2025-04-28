<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Zaki E-Commerce</title>
</head>
<body>

    <?php include_once 'includes/header.php'; ?>
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <h1>Give your work a new style with <br> Zaki</h1>
                    <p>Discover unique products that enhance your lifestyle and workspace.</p>
                    <a href="products.html" class="btn">Explore Now &#8594;</a>
                </div>
                <div class="col-2">
                    <img src="assets/images/costumer.png" alt="Featured customer">
                </div>
            </div>
        </div>
    </section>

    <section class="featured">
        <div class="container">
            <h2 class="section-title">Featured Products</h2>
            <div class="row">
                <!-- Featured product items would go here -->
                <div class="col-3">

                <?php include 'functions.php'; ?>
                <?php
                echo '<h2 class="section-title">Products</h2>';
                    // Display featured products
                    displayProductCards(3, true, true);
                ?>
                </div>
            </div>
        </div>
    </section>

    <?php include_once 'includes/footer.php'; ?>
   
</body>
</html>