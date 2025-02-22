<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Page</title>
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="CSS/HomeStore.css">
</head>
<body>
    <!--  SEARCH BUTTON & TITLE STARTS HERE !-->
    
    <h1>SHOPAHOLICS</h1>
    <form action="#" method="get" class="search-bar">
    <input type="text" name="q" placeholder="Search products, brands..." required>
    <button type="submit">🔍</button>
</form>

    <ul>
        <!-- MENU ITEMS START HERE !-->
        
        <ul>
        <?php
        $menu_items = [
            "Home Page" => "index.php",
            "Home Store" => "homeStore.php",
            "Technology" => "technology.php",
            "Skincare" => "skincare.php",
            "Makeup" => "makeup.php"
        ];
        foreach ($menu_items as $name => $link) {
            echo "<li><a href='" . htmlspecialchars($link) . "'>" . htmlspecialchars($name) . "</a></li>";
        }
        ?>
            </ul>
    </ul>
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
   

</body>
</html>
