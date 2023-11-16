<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Navbar</title>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <nav>
        <div class="nav-left">
            <img src="gadgex Logo.png" alt="logo">
            <div class="nav-links">
                <a href="../index.php">Login</a>
                <a href="../index.php#">Signup</a>
            </div>
        </div>

        <div class="nav-search">
            <input type="text" placeholder="Search...">
        </div>

        <div class="nav-right">
            <i class='bx bx-package nav-icons'></i>
            <i class='bx bx-cart nav-icons'></i>
            <i class='bx bx-menu nav-icons'></i>
        </div>
    </nav>

    <!-- Product Section -->
    <section>
        <!-- Carousel Container -->
        <div id="carousel-container">
            <div id="carousel-list" class="carousel-list">
                <!-- Your carousel items go here -->
                <div class="carousel-item">
                    <a href="https://example.com/item1">
                        <img src="logo.png" alt="Item 1">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="https://example.com/item2">
                        <img src="gaming-laptops-e.jpg" alt="Item 2">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="https://example.com/item3">
                        <img src="gaming-laptops-e.jpg" alt="Item 3">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="https://example.com/item4">
                        <img src="gaming-laptops-e.jpg" alt="Item 4">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="https://example.com/item5">
                        <img src="gaming-laptops-e.jpg" alt="Item 5">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="https://example.com/item6">
                        <img src="gaming-laptops-e.jpg" alt="Item 6">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="https://example.com/item7">
                        <img src="gaming-laptops-e.jpg" alt="Item 7">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="https://example.com/item8">
                        <img src="gaming-laptops-e.jpg" alt="Item 8">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="https://example.com/item9">
                        <img src="gaming-laptops-e.jpg" alt="Item 9">
                    </a>
                </div>
            </div>
            <!-- Previous and Next Buttons for Carousel -->
            <button id="prevBtn" onclick="prevSlide()">❮</button>
            <button id="nextBtn" onclick="nextSlide()">❯</button>
        </div>

        <!-- Product Details -->
        <div class="product-list">
            <div class="product">
                <div class="item-description">
                    <h2>Product Name 1</h2>
                    <p>Description of the product 1.</p>
                    <p>Price: $999.99</p>
                </div>
                <div class="product-image">
                    <img src="product1.jpg" alt="Product 1">
                </div>
            </div>

            <div class="product">
                <div class="item-description">
                    <h2>Product Name 2</h2>
                    <p>Description of the product 2.</p>
                    <p>Price: $899.99</p>
                </div>
                <div class="product-image">
                    <img src="product2.jpg" alt="Product 2">
                </div>
            </div>

            <div class="product">
                <div class="item-description">
                    <h2>Product Name 3</h2>
                    <p>Description of the product 3.</p>
                    <p>Price: $1099.99</p>
                </div>
                <div class="product-image">
                    <img src="product3.jpg" alt="Product 3">
                </div>
            </div>

            <div class="product">
                <div class="item-description">
                    <h2>Product Name 4</h2>
                    <p>Description of the product 4.</p>
                    <p>Price: $799.99</p>
                </div>
                <div class="product-image">
                    <img src="product4.jpg" alt="Product 4">
                </div>
            </div>

            <div class="product">
                <div class="item-description">
                    <h2>Product Name 5</h2>
                    <p>Description of the product 5.</p>
                    <p>Price: $1299.99</p>
                </div>
                <div class="product-image">
                    <img src="product5.jpg" alt="Product 5">
                </div>
            </div>

            <div class="product">
                <div class="item-description">
                    <h2>Product Name 6</h2>
                    <p>Description of the product 6.</p>
                    <p>Price: $899.99</p>
                </div>
                <div class="product-image">
                    <img src="product6.jpg" alt="Product 6">
                </div>
            </div>
        </div>
    </section>

    <!-- Pop-up Section -->
    <div class="popup" id="popup">
        <div class="popup-content">
            <a href="https://example.com/close-ad" class="close">&times;</a>
            <h2>Special Offer!</h2>
            <p>Don't miss our exclusive deal. Click below to learn more.</p>
            <a href="https://example.com/special-offer" target="_blank">Claim Offer</a>
            <span class="skip" onclick="closePopup()">Skip Ad</span>
        </div>
    </div>
    <script src="main.js"></script>
</body>
</html>
