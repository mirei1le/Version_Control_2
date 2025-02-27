<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Page</title>
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="CSS/technology.css">
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

    
    <div class="banner">
    <img src="IMG/design.png" alt="Baxiosofa">
    </div>

    <div class="product-container">
    <!--IPAD-->
   <div class="product-card">
        <div class="product-image">
            <img src="IMG/iPadproblack.jpg" alt="iPad">
            <i class="fa-regular fa-heart wishlist-icon"></i>
        </div>
        <div class="product-details">
            <p class="product-brand">BLACK APPLE</p>
            <h3 class="product-title">iPad</h3>
            <p class="product-price">€128.75</p>
            <button class="add-to-bag">Add to bag</button>
        </div>
    </div>
    
    
    
    <div class="product-card">
        <div class="product-image">
            <img src="IMG/macbookairsilver.jpeg" alt="Macbook">
            <i class="fa-regular fa-heart wishlist-icon"></i>
        </div>
        <div class="product-details">
            <p class="product-brand">SILVER</p>
            <h3 class="product-title">Macbook</h3>
            <p class="product-price">€128.75</p>
            <button class="add-to-bag">Add to bag</button>
        </div>
    </div>
    
    
    
    
    <div class="product-card">
        <div class="product-image">
            <img src="IMG/SamsungTv.jpg" alt="SamsungTv">
            <i class="fa-regular fa-heart wishlist-icon"></i>
        </div>
        <div class="product-details">
            <p class="product-brand">BLACK</p>
            <h3 class="product-title">SamsungTV</h3>
            <p class="product-price">€128.75</p>
            <button class="add-to-bag">Add to bag</button>
        </div>
    </div>
    
    
    
    <div class="product-card">
        <div class="product-image">
            <img src="IMG/huaweip30.jpg" alt="Huaweiip30">
            <i class="fa-regular fa-heart wishlist-icon"></i>
        </div>
        <div class="product-details">
            <p class="product-brand">BLUE</p>
            <h3 class="product-title">Huawei ip30</h3>
            <p class="product-price">€128.75</p>
            <button class="add-to-bag">Add to bag</button>
        </div>
    </div>
    
    
    <div class="product-card">
        <div class="product-image">
            <img src="IMG/Goldiphone16pm.jpg" alt="GoldIphone">
            <i class="fa-regular fa-heart wishlist-icon"></i>
        </div>
        <div class="product-details">
            <p class="product-brand">GOLD</p>
            <h3 class="product-title">iPhone</h3>
            <p class="product-price">€128.75</p>
            <button class="add-to-bag">Add to bag</button>
        </div>
    </div>
    
    
    <div class="product-card">
        <div class="product-image">
            <img src="IMG/HuaweiWatch.jpg" alt="HuaweiWatch">
            <i class="fa-regular fa-heart wishlist-icon"></i>
        </div>
        <div class="product-details">
            <p class="product-brand">Black</p>
            <h3 class="product-title">Huawei Watch</h3>
            <p class="product-price">€128.75</p>
            <button class="add-to-bag">Add to bag</button>
        </div>
    </div>
    
    
    
    
    <div class="product-card">
        <div class="product-image">
            <img src="IMG/GalaxytabA9.jpg" alt="Galaxytab">
            <i class="fa-regular fa-heart wishlist-icon"></i>
        </div>
        <div class="product-details">
            <p class="product-brand">BLUE</p>
            <h3 class="product-title">TabA9</h3>
            <p class="product-price">€128.75</p>
            <button class="add-to-bag">Add to bag</button>
        </div>
    </div>
    
    
    
    
    <div class="product-card">
        <div class="product-image">
            <img src="IMG/GalaxyBook3.jpg" alt="GalaxyBook">
            <i class="fa-regular fa-heart wishlist-icon"></i>
        </div>
        <div class="product-details">
            <p class="product-brand">BLACK</p>
            <h3 class="product-title">Sansung Laptop</h3>
            <p class="product-price">€128.75</p>
            <button class="add-to-bag">Add to bag</button>
        </div>
    </div>
    
    
    
    
    
    <div class="product-card">
        <div class="product-image">
            <img src="IMG/appleheadphones.jpg" alt="AppleHeadphones">
            <i class="fa-regular fa-heart wishlist-icon"></i>
        </div>
        <div class="product-details">
            <p class="product-brand">PURPLE</p>
            <h3 class="product-title">Apple HeadPhones</h3>
            <p class="product-price">€128.75</p>
            <button class="add-to-bag">Add to bag</button>
        </div>
    </div>
    
    
    
    
    <div class="product-card">
        <div class="product-image">
            <img src="IMG/SamsungWatch.jpg" alt="SamsungWatch">
            <i class="fa-regular fa-heart wishlist-icon"></i>
        </div>
        <div class="product-details">
            <p class="product-brand">GOLD</p>
            <h3 class="product-title">Samsung Watch</h3>
            <p class="product-price">€128.75</p>
            <button class="add-to-bag">Add to bag</button>
        </div>
    </div>
    <div class="product-card">
        <div class="product-image">
            <img src="IMG/airpodspro-2.jpg" alt="Airpods">
            <i class="fa-regular fa-heart wishlist-icon"></i>
        </div>
        <div class="product-details">
            <p class="product-brand">WHITE</p>
            <h3 class="product-title">Airpods</h3>
            <p class="product-price">€128.75</p>
            <button class="add-to-bag">Add to bag</button>
        </div>
    </div>
    
    <div class="product-card">
        <div class="product-image">
            <img src="IMG/HuaweiTablet.jpg" alt="HuaweiTablet">
            <i class="fa-regular fa-heart wishlist-icon"></i>
        </div>
        <div class="product-details">
            <p class="product-brand">PURPLE</p>
            <h3 class="product-title">Huawei Tablet</h3>
            <p class="product-price">€128.75</p>
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
