<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Page</title>
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="CSS/HomeStore.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

</head>
<body>
    <!-- HEADER & NAVIGATION -->
    <header>
        <h3  class="promo"> USE CODE [NEW2025] FOR EXTRA UP TO 20% SKINCARE PRODUCTS </h3>
        
    
    </header>
    
      <!-- NAVIGATION MENU WITH SEARCH BAR -->
      <nav>
    <div class="logo">
         <h1> <a href ="index.php"> SHOPAHOLICS <a/> </h1>
    </div>
    
    <ul class="nav-menu">
        <?php
        $menu_items = [
            "Home Page  " => "index.php",
            "Home" => "homeStore.php",
            "Technology" => "technology.php",
            "Skincare" => "skincare.php",
            "Makeup" => "makeup.php"
        ];
        foreach ($menu_items as $name => $link) {
            echo "<li><a href='" . htmlspecialchars($link) . "'>" . htmlspecialchars($name) . "</a></li>";
        }
        ?>
    </ul>

    <div class="nav-right">
        <form action="#" method="get" class="search-bar">
            <input type="text" name="q" placeholder="Search" required>
            <button type="submit"><i class="fas fa-search"></i></button>
        </form>

        <div class="header-icons">
            <div class="country-selector">
                <img src="IMG/eu-flag.png" alt="EU Flag">
            </div>
            <a href="signup_login.php">
                <i class="fas fa-user"></i>
            </a>
            <i class="fas fa-heart"></i>
            <div class="cart">
                <i class="fas fa-shopping-cart"></i>
                <span class="cart-count">0</span>
            </div>
        </div>
    </div>
</nav>
    <img src="IMG/Homebanner.jpg" alt="Home Banner" class="banner-image">
     <!-- PRODUCT CONTAINER -->
    <div class="product-container">
        <!-- PRODUCT 1 -->
        <div class="product-card">
            <div class="product-image">
                <img src="IMG/sofa.jpg" alt="Baxiosofa">
                <i class="fa-regular fa-heart wishlist-icon"></i>
            </div>
            <div class="product-details">
                <p class="product-brand">CREAM</p>
                <h3 class="product-title">Baxio Sofa</h3>
                <p class="product-price">€128.75</p>
                <button class="add-to-bag">Add to bag</button>
            </div>
        </div>

        <!-- TABLE -->
        <div class="product-card">
            <div class="product-image">
                <img src="IMG/woodentable.jpg" alt="Wooden Table">
                <i class="fa-regular fa-heart wishlist-icon"></i>
            </div>
            <div class="product-details">
                <p class="product-brand">WOOD</p>
                <h3 class="product-title">Table</h3>
                <p class="product-price">€80.50</p>
                <button class="add-to-bag">Add to bag</button>
            </div>
        </div>

        <!-- PLANT  -->
        <div class="product-card">
            <div class="product-image">
                <img src="IMG/plant.jpg" alt="Modern Lamp">
                <i class="fa-regular fa-heart wishlist-icon"></i>
            </div>
            <div class="product-details">
                <p class="product-brand">PLANT</p>
                <h3 class="product-title">Mini Palm tree</h3>
                <p class="product-price">€45.99</p>
                <button class="add-to-bag">Add to bag</button>
            </div>
        </div>
        <!-- ROUND COUCHES  -->
        <div class="product-card">
            <div class="product-image">
                <img src="IMG/roundcouch.jpg" alt="Round Couches">
                <i class="fa-regular fa-heart wishlist-icon"></i>
            </div>
            <div class="product-details">
                <p class="product-brand">BEIGE</p>
                <h3 class="product-title">2pcs Round Couches</h3>
                <p class="product-price">€139.99</p>
                <button class="add-to-bag">Add to bag</button>
            </div>
        </div>
         <!-- STAND ALONE CHAIR  -->
        <div class="product-card">
            <div class="product-image">
                <img src="IMG/chair.jpg" alt="Stand alone chair">
                <i class="fa-regular fa-heart wishlist-icon"></i>
            </div>
            <div class="product-details">
                <p class="product-brand">BEIGE AND BROWN</p>
                <h3 class="product-title">Stand alone chair</h3>
                <p class="product-price">€51.99</p>
                <button class="add-to-bag">Add to bag</button>
            </div>
        </div>
        
         <!-- GOLD MIRROR  -->
        <div class="product-card">
            <div class="product-image">
                <img src="IMG/goldmirror.jpg" alt="goldmirror">
                <i class="fa-regular fa-heart wishlist-icon"></i>
            </div>
            <div class="product-details">
                <p class="product-brand">GOLD</p>
                <h3 class="product-title">Gold Mirror</h3>
                <p class="product-price">€26.99</p>
                <button class="add-to-bag">Add to bag</button>
            </div>
        </div>


         <!-- GREY COUCH  -->
        <div class="product-card">
            <div class="product-image">
                <img src="IMG/greycouch.jpg" alt="greycouch">
                <i class="fa-regular fa-heart wishlist-icon"></i>
            </div>
            <div class="product-details">
                <p class="product-brand">GREY</p>
                <h3 class="product-title">Family Couch</h3>
                <p class="product-price">€250.00</p>
                <button class="add-to-bag">Add to bag</button>
            </div>
        </div>
         <!-- LUCA COFFEE  -->
        <div class="product-card">
            <div class="product-image">
                <img src="IMG/lucacoffeetable.jpg" alt="lucacoffeetable">
                <i class="fa-regular fa-heart wishlist-icon"></i>
            </div>
            <div class="product-details">
                <p class="product-brand">WHITE</p>
                <h3 class="product-title">Luca table</h3>
                <p class="product-price">€175.00</p>
                <button class="add-to-bag">Add to bag</button>
            </div>
        </div>
        <!-- POT SET  -->
        <div class="product-card">
            <div class="product-image">
                <img src="IMG/whitepot.jpg" alt="lucacoffeetable">
                <i class="fa-regular fa-heart wishlist-icon"></i>
            </div>
            <div class="product-details">
                <p class="product-brand">CREAM</p>
                <h3 class="product-title">Pot set</h3>
                <p class="product-price">€55.00</p>
                <button class="add-to-bag">Add to bag</button>
            </div>
        </div>
        
        <!-- BLACK AND GOLD SET -->
        <div class="product-card">
            <div class="product-image">
                <img src="IMG/dinningtablesetgoldnblack.jpg" alt="lucacoffeetable">
                <i class="fa-regular fa-heart wishlist-icon"></i>
            </div>
            <div class="product-details">
                <p class="product-brand">BLACK AND GOLD</p>
                <h3 class="product-title">Table set</h3>
                <p class="product-price">€450.00</p>
                <button class="add-to-bag">Add to bag</button>
            </div>
        </div>
        
         <!-- QUEEN SIZE BED  -->
        <div class="product-card">
            <div class="product-image">
                <img src="IMG/creamsidestoragebed.jpg" alt="creamsidestoragebed">
                <i class="fa-regular fa-heart wishlist-icon"></i>
            </div>
            <div class="product-details">
                <p class="product-brand">WHITE</p>
                <h3 class="product-title">Queen size bed</h3>
                <p class="product-price">€650.00</p>
                <button class="add-to-bag">Add to bag</button>
            </div>
        </div>
        
         <!-- PLAIN WHITE PLATES  -->
        <div class="product-card">
            <div class="product-image">
                <img src="IMG/plainwhiteplates.jpg" alt="plainwhiteplates">
                <i class="fa-regular fa-heart wishlist-icon"></i>
            </div>
            <div class="product-details">
                <p class="product-brand">WHITE</p>
                <h3 class="product-title">Plate set</h3>
                <p class="product-price">€20.00</p>
                <button class="add-to-bag">Add to bag</button>
            </div>
        </div>


    
    </div>
      <!-- FOOTER -->
      <footer>
    <div class="footer-container">
        <div class="footer-section">
            <h3>About Us</h3>
            <p>Shopaholics - Your go-to store for tech, skincare, and more.</p>

        </div>
        <div class="footer-section">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="technology.php">Technology</a></li>
                <li><a href="skincare.php">Skincare</a></li>
                <li><a href="makeup.php">Makeup</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3> Meet yout Owners </h3>
            <p> Cheryl Donga </p>
            <p> Mireille Aka </p>
            <p> Vivien Obi </p>
        </div>
        <div class="footer-section">
            <h3>Follow Us</h3>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-tiktok"></i></a>
            </div>
        </div>
    </div>
    <p class="footer-bottom">&copy; 2025 Shopaholics. All rights reserved.</p>
</footer>

</body>
</html>
   

</body>
</html>
