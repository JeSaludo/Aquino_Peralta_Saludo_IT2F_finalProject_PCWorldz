<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, minimum-scale=1.0">
  <!-- styles -->
  <link rel="stylesheet" href="css/vendor/font-awesome.min.css">
  <link rel="stylesheet" href="css/vendor/simple-line-icons.css">
  <link rel="stylesheet" href="css/vendor/magnific-popup.css">
  <link rel="stylesheet" href="css/style.min.css">
  <!-- favicon -->
  <link rel="icon" href="favicon.ico">
  <title>PC WORLDZ | Cart</title>
</head>
<body>

  <!-- FORM POPUP -->
  <div id="login-popup" class="form-popup medium mfp-hide">
    <?php
    echo '<svg class="svg-cross medium close-btn">';
    echo '<use xlink:href="#svg-cross"></use>';
    echo '</svg>';
    ?>
    <!-- FORM POPUP COLUMN -->
    <div class="form-popup-column small">
      <?php
        echo '<h2 class="subsection-title medium">Register now!</h2>';
        echo '<hr class="line-separator">';
        echo '<p class="small">Fill all the requirements on the space provided.</p>';
        echo '<!-- FORM -->';
        echo '<form>';
        echo '<!-- FORM ROW -->';
        echo '<div class="form-row">';
        echo '<label for="email" class="rl-label">Email</label>';
        echo '<input type="text" id="email" name="email" placeholder="Enter your email...">';
        echo '</div>';
        echo '<!-- /FORM ROW -->';
        echo '';
        echo '<!-- FORM ROW -->';
        echo '<div class="form-row">';
        echo '<label for="password" class="rl-label">Password</label>';
        echo '<input type="password" id="password" name="password" placeholder="Enter your password...">';
        echo '</div>';
        echo '<!-- /FORM ROW -->';
        echo '';
        echo '<!-- FORM ROW -->';
        echo '<div class="form-row separated">';
        echo '<button class="button dark full">Register to Trickster!</button>';
        echo '</div>';
        echo '<!-- /FORM ROW -->';
        echo '</form>';
        echo '<!-- /FORM -->';
        ?>
    </div>
    <!-- /FORM POPUP COLUMN -->

    <!-- FORM POPUP COLUMN SEPARATOR -->
    <div class="form-popup-column-separator"></div>
    <!-- /FORM POPUP COLUMN SEPARATOR -->

    <!-- FORM POPUP COLUMN -->
    <div class="form-popup-column small">
      
      <form>
        <!-- FORM ROW -->
        <div class="form-row">
        <?php
          echo '<label for="username" class="rl-label">Username</label>';
          echo '<input type="text" id="username" name="username" placeholder="Enter your username...">';
          ?>
        </div>
        <!-- /FORM ROW -->
        <?php
          echo '<h2 class="subsection-title medium">Login to Trickster</h2>';
          echo '<hr class="line-separator">';
          echo '<!-- FORM -->';
          ?>
        <!-- FORM ROW -->
        <div class="form-row">
        <?php
          echo '<label for="password2" class="rl-label">Password</label>';
          echo '<input type="password" id="password2" name="password2" placeholder="Enter your password...">';
          ?>
        </div>
        <!-- /FORM ROW -->

        <!-- FORM ROW -->
        <div class="form-row">
        <?php
          echo '<!-- CHECKBOX -->';
          echo '<input type="checkbox" id="keep_logged" name="keep_logged" checked>';
          echo '<label class="checkbox" for="keep_logged">';
          echo '<span class="box">';
          echo '<!-- SVG CHECK -->';
          echo '<svg class="svg-check">';
          echo '<use xlink:href="#svg-check"></use>';
          echo '</svg>';
          echo '<!-- /SVG CHECK -->';
          echo '</span>';
          echo 'Keep me logged in';
          echo '</label>';
          echo '<!-- /CHECKBOX -->';
          echo '';
          echo '<a href="#" class="link">Forgot password?</a>';
          ?>
        </div>
        <!-- /FORM ROW -->

        <!-- FORM ROW -->
        <div class="form-row short-space separated">
          
        </div>
          <?php
          echo '<button class="button full">Login to your Account</button>';
          ?>

        <!-- FORM ROW -->
        <div class="form-row">
          <div class="half">
          <?php
          echo '<a href="#" class="button blue full">Facebook Login</a>';
          ?>
          </div>
          <div class="half">
          <?php
          echo '<a href="#" class="button lightblue full">Twitter Login</a>';
          ?>
          </div>
        </div>
        <!-- /FORM ROW -->
      </form>
      <!-- /FORM -->
    </div>
    <!-- /FORM POPUP COLUMN -->
  </div>
  <!-- /FORM POPUP -->

  <!-- WIDGET LINE WRAP -->
  <div class="widget-line-wrap widget-line-1">
    <!-- WIDGET LINE -->
    <div class="widget-line">
      <!-- ACTIONS LIST -->
      <?php
        echo '<ul class="actions-list left">';
        echo '<!-- ACTIONS LIST ITEM -->';
        echo '<li class="actions-list-item">';
        echo '<!-- SOCIAL LINK -->';
        echo '<div class="social-link">';
        echo '<a href="#">';
        echo '<i class="fa fa-facebook"></i>';
        echo '</a>';
        echo '</div>';
        echo '<!-- /SOCIAL LINK -->';
        echo '</li>';
        echo '<!-- ACTIONS LIST ITEM -->';
        echo '';
        echo '<!-- ACTIONS LIST ITEM -->';
        echo '<li class="actions-list-item">';
        echo '<!-- SOCIAL LINK -->';
        echo '<div class="social-link">';
        echo '<a href="#">';
        echo '<i class="fa fa-twitter"></i>';
        echo '</a>';
        echo '</div>';
        echo '<!-- /SOCIAL LINK -->';
        echo '</li>';
        echo '<!-- ACTIONS LIST ITEM -->';
        echo '';
        echo '<!-- ACTIONS LIST ITEM -->';
        echo '<li class="actions-list-item">';
        echo '<!-- SOCIAL LINK -->';
        echo '<div class="social-link">';
        echo '<a href="#">';
        echo '<i class="fa fa-google-plus"></i>';
        echo '</a>';
        echo '</div>';
        echo '<!-- /SOCIAL LINK -->';
        echo '</li>';
        echo '<!-- ACTIONS LIST ITEM -->';
        echo '';
        echo '<!-- ACTIONS LIST ITEM -->';
        echo '<li class="actions-list-item">';
        echo '<!-- SOCIAL LINK -->';
        echo '<div class="social-link">';
        echo '<a href="#">';
        echo '<i class="fa fa-rss"></i>';
        echo '</a>';
        echo '</div>';
        echo '<!-- /SOCIAL LINK -->';
        echo '</li>';
        echo '<!-- ACTIONS LIST ITEM -->';
        echo '';
        echo '<!-- ACTIONS LIST ITEM -->';
        echo '<li class="actions-list-item">';
        echo '<!-- SOCIAL LINK -->';
        echo '<div class="social-link">';
        echo '<a href="#">';
        echo '<i class="fa fa-vimeo"></i>';
        echo '</a>';
        echo '</div>';
        echo '<!-- /SOCIAL LINK -->';
        echo '</li>';
        echo '<!-- ACTIONS LIST ITEM -->';
        echo '</ul>';
        ?>
      <!-- ACTIONS LIST -->

      <!-- ACTIONS LIST -->
      <?php
      echo '<ul class="actions-list right">';
      echo '<!-- ACTIONS LIST ITEM -->';
      echo '<li class="actions-list-item">';
      echo '<a class="action-button options-dropdown dropdown-control click-closable" href="#">';
      echo '<span class="language-selected-option">eng</span>';
      echo '<!-- SVG ARROW -->';
      echo '<svg class="svg-arrow small face-down">';
      echo '<use xlink:href="#svg-arrow"></use>';
      echo '</svg>';
      echo '<!-- /SVG ARROW -->';
      echo '</a>';
      echo '';
      echo '<!-- DROPDOWN LIST -->';
      echo '<ul class="dropdown-list dropdown">';
      echo '<li data-language="eng" class="dropdown-list-item language-option selected">';
      echo '<a href="#">eng</a>';
      echo '</li>';
      echo '<li data-language="spa" class="dropdown-list-item language-option">';
      echo '<a href="#">spa</a>';
      echo '</li>';
      echo '<li data-language="ger" class="dropdown-list-item language-option">';
      echo '<a href="#">ger</a>';
      echo '</li>';
      echo '</ul>';
      echo '<!-- /DROPDOWN LIST -->';
      echo '</li>';
      echo '<!-- ACTIONS LIST ITEM -->';
      echo '';
      echo '<!-- ACTIONS LIST ITEM -->';
      echo '<li class="actions-list-item">';
      echo '<a class="action-button options-dropdown dropdown-control click-closable" href="#">';
      echo '<span class="currency-selected-option">usd</span>';
      echo '<!-- SVG ARROW -->';
      echo '<svg class="svg-arrow small face-down">';
      echo '<use xlink:href="#svg-arrow"></use>';
      echo '</svg>';
      echo '<!-- /SVG ARROW -->';
      echo '</a>';
      echo '';
      echo '<!-- DROPDOWN LIST -->';
      echo '<ul class="dropdown-list dropdown">';
      echo '<li data-currency="usd" class="dropdown-list-item currency-option selected">';
      echo '<a href="#">usd</a>';
      echo '</li>';
      echo '<li data-currency="euro" class="dropdown-list-item currency-option">';
      echo '<a href="#">euro</a>';
      echo '</li>';
      echo '</ul>';
      echo '<!-- /DROPDOWN LIST -->';
      echo '</li>';
      echo '<!-- ACTIONS LIST ITEM -->';
      echo '';
      echo '<!-- ACTIONS LIST ITEM -->';
      echo '<li class="actions-list-item">';
      echo '<a class="action-button" href="profile.php">My Account</a>';
      echo '</li>';
      echo '<!-- ACTIONS LIST ITEM -->';
      echo '';
      echo '<!-- ACTIONS LIST ITEM -->';
      echo '<li class="actions-list-item">';
      echo '<a class="action-button" href="wishlist.php">Wishlist<span class="bold">4</span></a>';
      echo '</li>';
      echo '<!-- ACTIONS LIST ITEM -->';
      echo '';
      echo '<!-- ACTIONS LIST ITEM -->';
      echo '<li class="actions-list-item">';
      echo '<a class="action-button" href="index.html">Logout</a>';
      echo '</li>';
      echo '<!-- ACTIONS LIST ITEM -->';
      echo '';
      echo '<!-- ACTIONS LIST ITEM -->';
      echo '<li class="actions-list-item">';
      echo '<!-- SEARCH FORM -->';
      echo '<form class="search-form">';
      echo '<input type="text" name="search" autocomplete="off" placeholder="Search products here...">';
      echo '<!-- SEARCH SUBMIT -->';
      echo '<div class="search-submit">';
      echo '<!-- SVG MAG GLASS -->';
      echo '<svg class="svg-mag-glass">';
      echo '<use xlink:href="#svg-mag-glass"></use>';
      echo '</svg>';
      echo '<!-- /SVG MAG GLASS -->';
      echo '</div>';
      echo '<!-- /SEARCH SUBMIT -->';
      echo '';
      echo '<!-- SEARCH CANCEL -->';
      echo '<div class="search-cancel hidden">';
      echo '<!-- SVG CROSS -->';
      echo '<svg class="svg-cross">';
      echo '<use xlink:href="#svg-cross"></use>';
      echo '</svg>';
      echo '<!-- /SVG CROSS -->';
      echo '</div>';
      echo '<!-- /SEARCH CANCEL -->';
      echo '</form>';
      echo '<!-- /SEARCH FORM -->';
      echo '</li>';
      echo '<!-- ACTIONS LIST ITEM -->';
      echo '</ul>';
      echo '<!-- ACTIONS LIST -->';
      echo '</div>';
      echo '<!-- WIDGET LINE -->';
      echo '</div>';
      echo '<!-- WIDGET LINE WRAP -->';
      echo '';
      echo '<!-- WIDGET LINE WRAP -->';
      echo '<div class="widget-line-wrap widget-line-2">';
      echo '<!-- WIDGET LINE -->';
      echo '<div class="widget-line">';
      echo '<!-- ACTIONS LIST -->';
      echo '<ul class="actions-list">';
      echo '<!-- ACTIONS LIST ITEM -->';
      echo '<li class="actions-list-item full void">';
      echo '<!-- SEARCH FORM -->';
      echo '<form class="search-form">';
      echo '<input type="text" name="search" autocomplete="off" placeholder="Search products here...">';
      echo '<!-- SEARCH SUBMIT -->';
      echo '<div class="search-submit">';
      echo '<!-- SVG MAG GLASS -->';
      echo '<svg class="svg-mag-glass">';
      echo '<use xlink:href="#svg-mag-glass"></use>';
      echo '</svg>';
      echo '<!-- /SVG MAG GLASS -->';
      echo '</div>';
      echo '<!-- /SEARCH SUBMIT -->';
      echo '';
      echo '<!-- SEARCH CANCEL -->';
      echo '<div class="search-cancel hidden">';
      echo '<!-- SVG CROSS -->';
      echo '<svg class="svg-cross">';
      echo '<use xlink:href="#svg-cross"></use>';
      echo '</svg>';
      echo '<!-- /SVG CROSS -->';
      echo '</div>';
      echo '<!-- /SEARCH CANCEL -->';
      echo '</form>';
      echo '<!-- /SEARCH FORM -->';
      echo '</li>';
      echo '<!-- ACTIONS LIST ITEM -->';
      echo '</ul>';
      ?>
      <!-- ACTIONS LIST -->
    </div>
    <!-- WIDGET LINE -->
  </div>
  <!-- WIDGET LINE WRAP -->

  <!-- NAVIGATION WRAP -->
  <div class="navigation-wrap">
    <!-- NAVIGATION -->
    <nav class="navigation">
      <!-- LOGO -->
      <?php
      echo '<figure class="logo">';
      echo '<img src="img/logo.png" alt="logo">';
      echo '<figcaption>PC WORLDZ</figcaption>';
      echo '</figure>';
      ?>
      <!-- /LOGO -->

      <!-- CART DROPDOWN WRAP -->
      <div class="cart-dropdown-wrap">
        <!-- CART DROPDOWN CONTROL -->
        <div class="cart-dropdown-control">
          <!-- SVG CART -->
          <?php
          echo '<svg class="svg-cart">';
          echo '<use xlink:href="#svg-cart"></use>';
          echo '</svg>';
          ?>
          <!-- /SVG CART -->

          <!-- SVG CROSS -->
          <?php
          echo '<svg class="svg-cross medium hidden">';
          echo '<use xlink:href="#svg-cross"></use>';
          echo '</svg>';
          ?>
          <!-- /SVG CROSS -->

          <!-- CART ITEM QUANTITY -->
          <div class="cart-item-quantity">
            <p>3</p>
          </div>
          <!-- /CART ITEM QUANTITY -->
        </div>
        <!-- /CART DROPDOWN CONTROL -->

        <!-- CART DROPDOWN -->
        <div class="cart-dropdown">
          <!-- CART DROPDOWN ITEMS -->
          <div class="cart-dropdown-items">
            <!-- CART DROPDOWN ITEM -->
            <div class="cart-dropdown-item">
              <!-- PRODUCT IMG -->
              <?php
              echo '<a href="product-page-v1.php">';
              echo '<figure class="product-img small">';
              echo '<img src="img/products/01.png" alt="02">';
              echo '</figure>';
              echo '</a>';
              ?>
              <!-- /PRODUCT IMG -->

              <!-- CART DROPDOWN ITEM INFO -->
              <div class="cart-dropdown-item-info">
                <a href="product-page-v1.html"><h6 class="title small">              
              <?php
              $item = simplexml_load_file('data/Saludo-Peralta-Aquino_IT2F_PcWorldz.xml');
              echo $item->product[0]->name;
              ?>
              </h6></a>
              <?php
              echo '<p class="product-description small">Gaming</p>';
              echo '<!-- RATING -->';
              echo '<ul class="rating small">';
              echo '<!-- RATING ITEM -->';
              echo '<li class="rating-item filled">';
              echo '<!-- SVG STAR -->';
              echo '<svg class="svg-star">';
              echo '<use xlink:href="#svg-star"></use>';
              echo '</svg>';
              echo '<!-- /SVG STAR -->';
              echo '</li>';
              echo '<!-- /RATING ITEM -->';
              echo '';
              echo '<!-- RATING ITEM -->';
              echo '<li class="rating-item filled">';
              echo '<!-- SVG STAR -->';
              echo '<svg class="svg-star">';
              echo '<use xlink:href="#svg-star"></use>';
              echo '</svg>';
              echo '<!-- /SVG STAR -->';
              echo '</li>';
              echo '<!-- /RATING ITEM -->';
              echo '';
              echo '<!-- RATING ITEM -->';
              echo '<li class="rating-item filled">';
              echo '<!-- SVG STAR -->';
              echo '<svg class="svg-star">';
              echo '<use xlink:href="#svg-star"></use>';
              echo '</svg>';
              echo '<!-- /SVG STAR -->';
              echo '</li>';
              echo '<!-- /RATING ITEM -->';
              echo '';
              echo '<!-- RATING ITEM -->';
              echo '<li class="rating-item filled">';
              echo '<!-- SVG STAR -->';
              echo '<svg class="svg-star">';
              echo '<use xlink:href="#svg-star"></use>';
              echo '</svg>';
              echo '<!-- /SVG STAR -->';
              echo '</li>';
              echo '<!-- /RATING ITEM -->';
              echo '';
              echo '<!-- RATING ITEM -->';
              echo '<li class="rating-item">';
              echo '<!-- SVG STAR -->';
              echo '<svg class="svg-star">';
              echo '<use xlink:href="#svg-star"></use>';
              echo '</svg>';
              echo '<!-- /SVG STAR -->';
              echo '</li>';
              echo '<!-- /RATING ITEM -->';
              echo '</ul>';
              echo '<!-- /RATING -->';
              echo '<p class="product-quantity">x4</p>';
              echo '<p class="product-price"><br><br>';
              echo '₱233,848';
              echo '</p>';
              echo '</div>';
              echo '<!-- /CART DROPDOWN ITEM INFO -->';
              echo '';
              echo '<!-- SVG CROSS -->';
              echo '<svg class="svg-cross medium">';
              echo '<use xlink:href="#svg-cross"></use>';
              echo '</svg>';
              echo '<!-- /SVG CROSS -->';
              echo '</div>';
              echo '<!-- /CART DROPDOWN ITEM -->';
              echo '';
              echo '<!-- CART DROPDOWN ITEM -->';
              echo '<div class="cart-dropdown-item">';
              echo '<!-- PRODUCT IMG -->';
              echo '<a href="product-page-v1.php">';
              echo '<figure class="product-img small">';
              echo '<img src="img/products/02.png" alt="06">';
              echo '</figure>';
              echo '</a>';
              echo '<!-- /PRODUCT IMG -->';
              ?>

              <!-- CART DROPDOWN ITEM INFO -->
              <div class="cart-dropdown-item-info">
                <a href="product-page-v1.html"><h6 class="title small">              
              <?php
              $item = simplexml_load_file('data/Saludo-Peralta-Aquino_IT2F_PcWorldz.xml');
              echo $item->product[1]->name;
              ?>
              </h6></a>
              <?php
              echo '<p class="product-description small">Gaming</p>';
              echo '<!-- RATING -->';
              echo '<ul class="rating small">';
              echo '<!-- RATING ITEM -->';
              echo '<li class="rating-item filled">';
              echo '<!-- SVG STAR -->';
              echo '<svg class="svg-star">';
              echo '<use xlink:href="#svg-star"></use>';
              echo '</svg>';
              echo '<!-- /SVG STAR -->';
              echo '</li>';
              echo '<!-- /RATING ITEM -->';
              echo '';
              echo '<!-- RATING ITEM -->';
              echo '<li class="rating-item filled">';
              echo '<!-- SVG STAR -->';
              echo '<svg class="svg-star">';
              echo '<use xlink:href="#svg-star"></use>';
              echo '</svg>';
              echo '<!-- /SVG STAR -->';
              echo '</li>';
              echo '<!-- /RATING ITEM -->';
              echo '';
              echo '<!-- RATING ITEM -->';
              echo '<li class="rating-item filled">';
              echo '<!-- SVG STAR -->';
              echo '<svg class="svg-star">';
              echo '<use xlink:href="#svg-star"></use>';
              echo '</svg>';
              echo '<!-- /SVG STAR -->';
              echo '</li>';
              echo '<!-- /RATING ITEM -->';
              echo '';
              echo '<!-- RATING ITEM -->';
              echo '<li class="rating-item">';
              echo '<!-- SVG STAR -->';
              echo '<svg class="svg-star">';
              echo '<use xlink:href="#svg-star"></use>';
              echo '</svg>';
              echo '<!-- /SVG STAR -->';
              echo '</li>';
              echo '<!-- /RATING ITEM -->';
              echo '';
              echo '<!-- RATING ITEM -->';
              echo '<li class="rating-item">';
              echo '<!-- SVG STAR -->';
              echo '<svg class="svg-star">';
              echo '<use xlink:href="#svg-star"></use>';
              echo '</svg>';
              echo '<!-- /SVG STAR -->';
              echo '</li>';
              echo '<!-- /RATING ITEM -->';
              echo '</ul>';
              echo '<!-- /RATING -->';
              echo '<p class="product-quantity">x2</p>';
              echo '<p class="product-price"><br><br>';
              echo '₱57,032';
              echo '</p>';
              echo '</div>';
              echo '<!-- /CART DROPDOWN ITEM INFO -->';
              echo '';
              echo '<!-- SVG CROSS -->';
              echo '<svg class="svg-cross medium">';
              echo '<use xlink:href="#svg-cross"></use>';
              echo '</svg>';
              echo '<!-- /SVG CROSS -->';
              echo '</div>';
              echo '<!-- /CART DROPDOWN ITEM -->';
              echo '';
              echo '<!-- CART DROPDOWN ITEM -->';
              echo '<div class="cart-dropdown-item">';
              echo '<!-- PRODUCT IMG -->';
              echo '<a href="product-page-v1.php">';
              echo '<figure class="product-img small">';
              echo '<img src="img/products/03.png" alt="05">';
              echo '</figure>';
              echo '</a>';
              echo '<!-- /PRODUCT IMG -->';
              ?> 

              <!-- CART DROPDOWN ITEM INFO -->
              <div class="cart-dropdown-item-info">
                <a href="product-page-v1.html"><h6 class="title small">              
              <?php
              $item = simplexml_load_file('data/Saludo-Peralta-Aquino_IT2F_PcWorldz.xml');
              echo $item->product[2]->name;
              ?>
                </h6></a>
                <?php
                echo '<p class="product-description small">Gaming</p>';
                echo '<!-- RATING -->';
                echo '<ul class="rating small">';
                echo '<!-- RATING ITEM -->';
                echo '<li class="rating-item filled">';
                echo '<!-- SVG STAR -->';
                echo '<svg class="svg-star">';
                echo '<use xlink:href="#svg-star"></use>';
                echo '</svg>';
                echo '<!-- /SVG STAR -->';
                echo '</li>';
                echo '<!-- /RATING ITEM -->';
                echo '';
                echo '<!-- RATING ITEM -->';
                echo '<li class="rating-item filled">';
                echo '<!-- SVG STAR -->';
                echo '<svg class="svg-star">';
                echo '<use xlink:href="#svg-star"></use>';
                echo '</svg>';
                echo '<!-- /SVG STAR -->';
                echo '</li>';
                echo '<!-- /RATING ITEM -->';
                echo '';
                echo '<!-- RATING ITEM -->';
                echo '<li class="rating-item filled">';
                echo '<!-- SVG STAR -->';
                echo '<svg class="svg-star">';
                echo '<use xlink:href="#svg-star"></use>';
                echo '</svg>';
                echo '<!-- /SVG STAR -->';
                echo '</li>';
                echo '<!-- /RATING ITEM -->';
                echo '';
                echo '<!-- RATING ITEM -->';
                echo '<li class="rating-item filled">';
                echo '<!-- SVG STAR -->';
                echo '<svg class="svg-star">';
                echo '<use xlink:href="#svg-star"></use>';
                echo '</svg>';
                echo '<!-- /SVG STAR -->';
                echo '</li>';
                echo '<!-- /RATING ITEM -->';
                echo '';
                echo '<!-- RATING ITEM -->';
                echo '<li class="rating-item">';
                echo '<!-- SVG STAR -->';
                echo '<svg class="svg-star">';
                echo '<use xlink:href="#svg-star"></use>';
                echo '</svg>';
                echo '<!-- /SVG STAR -->';
                echo '</li>';
                echo '<!-- /RATING ITEM -->';
                echo '</ul>';
                echo '<!-- /RATING -->';
                echo '<p class="product-quantity">x1</p>';
                echo '<p class="product-price"> <br><br>';
                ?>       
              <?php
              $item = simplexml_load_file('data/Saludo-Peralta-Aquino_IT2F_PcWorldz.xml');
              echo $item->product[2]->price;
              ?>
                </p>
              </div>
              <!-- /CART DROPDOWN ITEM INFO -->
              <?php
              echo '<!-- SVG CROSS -->';
              echo '<svg class="svg-cross medium">';
              echo '<use xlink:href="#svg-cross"></use>';
              echo '</svg>';
              ?>
             
              <!-- /SVG CROSS -->
            </div>
            <!-- /CART DROPDOWN ITEM -->
          </div>
          <!-- CART DROPDOWN ITEMS -->

          <?php
          echo '<!-- CART DROPDOWN SUBTOTAL -->';
          echo '<div class="cart-dropdown-subtotal">';
          echo '<p class="title small">Cart Subtotal</p>';
          echo '<p class="product-price">₱303,827</p>';
          echo '</div>';
          echo '<!-- /CART DROPDOWN SUBTOTAL -->';
          ?>  
          <?php
          echo '<!-- CART DROPDOWN ACTIONS -->';
          echo '<div class="cart-dropdown-actions">';
          echo '<a href="cart.php" class="button dark large">Go to the Cart</a>';
          echo '<a href="identification.php" class="button large">Go to Checkout</a>';
          echo '</div>';
          ?>

        
          <!-- /CART DROPDOWN ACTIONS -->
        </div>
        <!-- /CART DROPDOWN -->
      </div>
      <!-- /CART DROPDOWN WRAP -->

      <!-- MAIN MENU -->
      <?php
      echo '<ul class="main-menu">';
      echo '<!-- MAIN MENU ITEM -->';
      echo '<li class="main-menu-item">';
      echo '<a href="index.php">Home</a>';
      echo '</li>';
      echo '<!-- /MAIN MENU ITEM -->';
      echo '';
      echo '<!-- MAIN MENU ITEM -->';
      echo '<li class="main-menu-item">';
      echo '<a href="aboutus.php">About</a>';
      echo '</li>';
      echo '<!-- /MAIN MENU ITEM -->';
      echo '';
      echo '<!-- MAIN MENU ITEM -->';
      echo '<li class="main-menu-item">';
      echo '<a href="shop-list.php">';
      echo 'Shop';
      echo '</a>';
      echo '';
      echo '<!-- MENU DROPDOWN -->';
      echo '<ul class="menu-dropdown">';
      echo '<!-- MENU DROPDOWN ITEM -->';
      echo '<li class="menu-dropdown-item">';
      echo '<a href="shop-sidebar-list.php">Motherboards</a>';
      echo '</li>';
      echo '<li class="menu-dropdown-item">';
      echo '<a href="shop-sidebar-list.php">Processors</a>';
      echo '</li>';
      echo '<li class="menu-dropdown-item">';
      echo '<a href="shop-sidebar-list.php">Graphic Cards</a>';
      echo '</li>';
      echo '';
      echo '</li>';
      echo '';
      echo '</ul>';
      echo '<!-- /MENU DROPDOWN -->';
      echo '</li>';
      echo '<!-- /MAIN MENU ITEM -->';
      echo '';
      echo '<!-- MAIN MENU ITEM -->';
      echo '<li class="main-menu-item">';
      echo '<a href="blog.php">Our Blog</a>';
      echo '</li>';
      echo '<!-- /MAIN MENU ITEM -->';
      echo '';
      echo '<!-- MAIN MENU ITEM -->';
      echo '<li class="main-menu-item sub">';
      echo '<a href="#">';
      echo 'Features';
      echo '<!-- SVG ARROW -->';
      echo '<svg class="svg-arrow face-down">';
      echo '<use xlink:href="#svg-arrow"></use>';
      echo '</svg>';
      echo '<!-- /SVG ARROW -->';
      echo '</a>';
      echo '';
      echo '<!-- CONTENT DROPDOWN -->';
      echo '<div class="content-dropdown with-bg">';
      echo '<!-- CONTENT DROPDOWN COLUMN -->';
      echo '<div class="content-dropdown-column">';
      echo '<h6 class="title tiny secondary">Account</h6>';
      echo '<hr class="line-separator">';
      echo '<!-- LINK LIST -->';
      echo '<ul class="link-list simple">';
      echo '<!-- LINK LIST ITEM -->';
      echo '<li class="link-list-item">';
      echo '<a href="identification.php">Identification</a>';
      echo '</li>';
      echo '<!-- /LINK LIST ITEM -->';
      echo '';
      echo '<!-- LINK LIST ITEM -->';
      echo '<li class="link-list-item">';
      echo '<a href="billing-shipping.php">Billing and Shipping</a>';
      echo '</li>';
      echo '<!-- /LINK LIST ITEM -->';
      echo '';
      echo '<!-- LINK LIST ITEM -->';
      echo '<li class="link-list-item">';
      echo '<a href="confirmation.php">Confirmation</a>';
      echo '</li>';
      echo '<!-- /LINK LIST ITEM -->';
      echo '';
      echo '<!-- LINK LIST ITEM -->';
      echo '<li class="link-list-item">';
      echo '<a href="cart.php">Shopping Cart</a>';
      echo '</li>';
      echo '<!-- /LINK LIST ITEM -->';
      echo '';
      echo '<!-- LINK LIST ITEM -->';
      echo '<li class="link-list-item">';
      echo '<a href="wishlist.php">Wishlist</a>';
      echo '</li>';
      echo '<!-- /LINK LIST ITEM -->';
      echo '';
      echo '<!-- LINK LIST ITEM -->';
      echo '<li class="link-list-item">';
      echo '<a href="profile.php">Your Account</a>';
      echo '</li>';
      echo '<!-- /LINK LIST ITEM -->';
      echo '</ul>';
      echo '<!-- /LINK LIST -';
      ?>
            </div>
            <!-- /CONTENT DROPDOWN COLUMN -->
          </div>
          <!-- /CONTENT DROPDOWN -->
        </li>
        <!-- /MAIN MENU ITEM -->

        <!-- MAIN MENU ITEM -->
        <li class="main-menu-item">
          <a href="contactus.php">Contact</a>
        </li>
        <!-- /MAIN MENU ITEM -->
      </ul>
      <!-- /MAIN MENU -->
    </nav>
    <!-- /NAVIGATION -->
  </div>
  <!-- /NAVIGATION WRAP -->

  <!-- MOBILE MENU WRAP -->
      <?php
      echo '<div class="mobile-menu-wrap">';
      echo '<!-- MOBILE MENU CONTROL -->';
      echo '<div class="mobile-menu-control dropdown-control">';
      echo '<!-- SVG BURGER -->';
      echo '<svg class="svg-burger">';
      echo '<use xlink:href="#svg-burger"></use>';
      echo '</svg>';
      echo '<!-- /SVG BURGER -->';
      echo '</div>';
      echo '<!-- /MOBILE MENU CONTROL -->';
      echo '';
      echo '<!-- MOBILE MENU -->';
      echo '<ul class="mobile-menu dropdown">';
      echo '<!-- MOBILE MENU ITEM -->';
      echo '<li class="mobile-menu-item">';
      echo '<a href="index.php">Home</a>';
      echo '</li>';
      echo '<!-- /MOBILE MENU ITEM -->';
      echo '';
      echo '<!-- MOBILE MENU ITEM -->';
      echo '<li class="mobile-menu-item">';
      echo '<a href="aboutus.php">About</a>';
      echo '</li>';
      echo '<!-- /MOBILE MENU ITEM -->';
      echo '';
      echo '<!-- MOBILE MENU ITEM -->';
      echo '<li class="mobile-menu-item">';
      echo '<a href="#" class="dropdown-control">';
      echo 'Shop';
      echo '';
      echo '</a>';
      echo '';
      echo '<!-- MOBILE MENU DROPDOWN -->';
      echo '<ul class="mobile-menu-dropdown dropdown">';
      echo '<!-- MOBILE MENU DROPDOWN ITEM -->';
      echo '<li class="mobile-menu-dropdown-item">';
      echo '<a href="shop-list">Motherboards</a>';
      echo '</li>';
      echo '<!-- /MOBILE MENU DROPDOWN ITEM -->';
      echo '';
      echo '<!-- MOBILE MENU DROPDOWN ITEM -->';
      echo '<li class="mobile-menu-dropdown-item">';
      echo '<a href="shop-list2.php">Processors</a>';
      echo '</li>';
      echo '<!-- /MOBILE MENU DROPDOWN ITEM -->';
      echo '';
      echo '<!-- MOBILE MENU DROPDOWN ITEM -->';
      echo '<li class="mobile-menu-dropdown-item">';
      echo '<a href="shop-list3.php">Video Cards</a>';
      echo '</li>';
      echo '';
      echo '';
      echo '';
      echo '<!-- /MOBILE MENU DROPDOWN ITEM -->';
      echo '';
      echo '';
      echo '<!-- /MOBILE MENU DROPDOWN ITEM -->';
      echo '</ul>';
      echo '<!-- /MOBILE MENU DROPDOWN -->';
      echo '</li>';
      echo '<!-- /MOBILE MENU ITEM -->';
      echo '';
      echo '<!-- MOBILE MENU ITEM -->';
      echo '<li class="mobile-menu-item">';
      echo '<a href="blog.php">Our Blog</a>';
      echo '</li>';
      echo '<!-- /MOBILE MENU ITEM -->';
      echo '';
      echo '<!-- MOBILE MENU ITEM -->';
      echo '<li class="mobile-menu-item">';
      echo '<a href="#" class="dropdown-control">';
      echo 'Features';
      echo '<!-- SVG ARROW -->';
      echo '<svg class="svg-arrow medium rotable">';
      echo '<use xlink:href="#svg-arrow"></use>';
      echo '</svg>';
      echo '<!-- /SVG ARROW -->';
      echo '</a>';
      echo '';
      echo '<!-- MOBILE MENU DROPDOWN -->';
      echo '<ul class="mobile-menu-dropdown dropdown">';
      echo '';
      echo '<!-- /MOBILE MENU DROPDOWN ITEM -->';
      echo '';
      echo '<!-- MOBILE MENU DROPDOWN ITEM -->';
      echo '';
      echo '<!-- MOBILE MENU DROPDOWN ITEM -->';
      echo '<li class="mobile-menu-dropdown-item">';
      echo '<a href="aboutus.php">About Us</a>';
      echo '</li>';
      echo '<!-- /MOBILE MENU DROPDOWN ITEM -->';
      echo '';
      echo '';
      echo '';
      echo '<li class="mobile-menu-dropdown-item">';
      echo '<a href="identification.php">Identification</a>';
      echo '</li>';
      echo '<!-- /MOBILE MENU DROPDOWN ITEM -->';
      echo '';
      echo '<!-- MOBILE MENU DROPDOWN ITEM -->';
      echo '<li class="mobile-menu-dropdown-item">';
      echo '<a href="billing-shipping.php">Billing and Shipping</a>';
      echo '</li>';
      echo '<!-- /MOBILE MENU DROPDOWN ITEM -->';
      echo '';
      echo '<!-- MOBILE MENU DROPDOWN ITEM -->';
      echo '<li class="mobile-menu-dropdown-item">';
      echo '<a href="confirmation.php">Confirmation</a>';
      echo '</li>';
      echo '<!-- /MOBILE MENU DROPDOWN ITEM -->';
      echo '';
      echo '<!-- MOBILE MENU DROPDOWN ITEM -->';
      echo '<li class="mobile-menu-dropdown-item">';
      echo '<a href="cart.php">Shopping Cart</a>';
      echo '</li>';
      echo '<!-- /MOBILE MENU DROPDOWN ITEM -->';
      echo '';
      echo '<!-- MOBILE MENU DROPDOWN ITEM -->';
      echo '<li class="mobile-menu-dropdown-item">';
      echo '<a href="wishlist.php">Wishlist</a>';
      echo '</li>';
      echo '<!-- /MOBILE MENU DROPDOWN ITEM -->';
      echo '';
      echo '<!-- MOBILE MENU DROPDOWN ITEM -->';
      echo '<li class="mobile-menu-dropdown-item">';
      echo '<a href="profile.php">Your Account</a>';
      echo '</li>';
      echo '<!-- /MOBILE MENU DROPDOWN ITEM -->';
      echo '</ul>';
      echo '<!-- /MOBILE MENU DROPDOWN -->';
      echo '</li>';
      echo '<!-- /MOBILE MENU ITEM -->';
      echo '';
      echo '<!-- MOBILE MENU ITEM -->';
      echo '<li class="mobile-menu-item">';
      echo '<a href="contactus.php">Contact</a>';
      echo '</li>';
      echo '<!-- /MOBILE MENU ITEM -->';
      echo '';
      echo '<!-- MOBILE MENU ITEM -->';
      echo '<li class="mobile-menu-item">';
      echo '<a href="profile.php">My Account</a>';
      echo '</li>';
      echo '<!-- /MOBILE MENU ITEM -->';
      echo '';
      echo '<!-- MOBILE MENU ITEM -->';
      echo '<li class="mobile-menu-item">';
      echo '<a href="wishlist.php">';
      echo 'Wishlist';
      echo '<span class="bold">4</span>';
      echo '</a>';
      echo '</li>';
      echo '<!-- /MOBILE MENU ITEM -->';
      echo '';
      echo '<!-- MOBILE MENU ITEM -->';
      echo '<li class="mobile-menu-item">';
      echo '<a href="#" class="dropdown-control">';
      echo 'Language:';
      echo '<span class="selected-option language-selected-option">eng</span>';
      echo '<!-- SVG ARROW -->';
      echo '<svg class="svg-arrow medium rotable">';
      echo '<use xlink:href="#svg-arrow"></use>';
      echo '</svg>';
      echo '<!-- /SVG ARROW -->';
      echo '</a>';
      echo '';
      echo '<!-- MOBILE MENU DROPDOWN -->';
      echo '<ul class="mobile-menu-dropdown dropdown">';
      echo '<!-- MOBILE MENU DROPDOWN ITEM -->';
      echo '<li data-language="eng" class="mobile-menu-dropdown-item language-option selected">';
      echo '<a href="#">eng</a>';
      echo '</li>';
      echo '<!-- /MOBILE MENU DROPDOWN ITEM -->';
      echo '';
      echo '<!-- MOBILE MENU DROPDOWN ITEM -->';
      echo '<li data-language="spa" class="mobile-menu-dropdown-item language-option">';
      echo '<a href="#">spa</a>';
      echo '</li>';
      echo '<!-- /MOBILE MENU DROPDOWN ITEM -->';
      echo '';
      echo '<!-- MOBILE MENU DROPDOWN ITEM -->';
      echo '<li data-language="ger" class="mobile-menu-dropdown-item language-option">';
      echo '<a href="#">ger</a>';
      echo '</li>';
      echo '<!-- /MOBILE MENU DROPDOWN ITEM -->';
      echo '</ul>';
      echo '<!-- /MOBILE MENU DROPDOWN -->';
      echo '</li>';
      echo '<!-- /MOBILE MENU ITEM -->';
      echo '';
      echo '<!-- MOBILE MENU ITEM -->';
      echo '<li class="mobile-menu-item">';
      echo '<a href="#" class="dropdown-control">';
      echo 'Currency:';
      echo '<span class="selected-option currency-selected-option">usd</span>';
      echo '<!-- SVG ARROW -->';
      echo '<svg class="svg-arrow medium rotable">';
      echo '<use xlink:href="#svg-arrow"></use>';
      echo '</svg>';
      echo '<!-- /SVG ARROW -->';
      echo '</a>';
      echo '';
      echo '<!-- MOBILE MENU DROPDOWN -->';
      echo '<ul class="mobile-menu-dropdown dropdown">';
      echo '<!-- MOBILE MENU DROPDOWN ITEM -->';
      echo '<li data-currency="usd" class="mobile-menu-dropdown-item currency-option selected">';
      echo '<a href="#">usd</a>';
      echo '</li>';
      echo '<!-- /MOBILE MENU DROPDOWN ITEM -->';
      echo '';
      echo '<!-- MOBILE MENU DROPDOWN ITEM -->';
      echo '<li data-currency="euro" class="mobile-menu-dropdown-item currency-option">';
      echo '<a href="#">euro</a>';
      echo '</li>';
      echo '<!-- /MOBILE MENU DROPDOWN ITEM -->';
      echo '</ul>';
      echo '<!-- /MOBILE MENU DROPDOWN -->';
      echo '</li>';
      echo '<!-- /MOBILE MENU ITEM -->';
      echo '';
      echo '<!-- MOBILE MENU ITEM -->';
      echo '<li class="mobile-menu-item void">';
      echo '<a href="#">Logout</a>';
      echo '</li>';
      echo '<!-- /MOBILE MENU ITEM -->';
      echo '</ul>';
      echo '<!-- /MOBILE MENU -->';
      echo '</div>';
      ?>
  <!-- /MOBILE MENU WRAP -->

  <!-- SECTION NAVIGATION WRAP -->
  <div class="section-navigation-wrap">
    <!-- SECTION NAVIGATION -->
    <div class="section-navigation">
      <!-- SECTION NAVIGATION PATH -->
      <p class="section-navigation-path">
        <span class="path">Home</span>
        <span class="path">
          <!-- SVG ARROW -->
          <svg class="svg-arrow tiny">
            <use xlink:href="#svg-arrow"></use>
          </svg>
          <!-- /SVG ARROW -->
        </span>
        <span class="path">Shop</span>
        <span class="path bold">
          <!-- SVG ARROW -->
          <svg class="svg-arrow tiny">
            <use xlink:href="#svg-arrow"></use>
          </svg>
          <!-- /SVG ARROW -->
        </span>
        <span class="path current">Shopping Cart</span>
      </p>
      <!-- SECTION NAVIGATION PATH -->
    </div>
    <!-- /SECTION NAVIGATION -->
  </div>
  <!-- /SECTION NAVIGATION WRAP -->

  <!-- SECTION WRAP -->
  <div class="section-wrap">
    <!-- SECTION -->
    <?php
      echo '<div class="section no-title bottom-void">';
      echo '<h2 class="subsection-title">Shopping Cart</h2>';
      echo '<hr class="line-separator">';
      echo '';
      echo '<!-- PRODUCT TABLE -->';
      echo '<div class="product-table">';
      echo '<!-- PRODUCT TABLE HEADER -->';
      echo '<div class="product-table-header">';
      echo '<!-- PRODUCT TABLE PHOTO -->';
      echo '<div class="product-table-photo">';
      echo '<h6 class="title">Product Photo</h6>';
      echo '</div>';
      echo '<!-- /PRODUCT TABLE PHOTO -->';
      echo '';
      echo '<!-- PRODUCT TABLE NAME -->';
      echo '<div class="product-table-name">';
      echo '<h6 class="title">Product Name</h6>';
      echo '</div>';
      echo '<!-- /PRODUCT TABLE NAME -->';
      echo '';
      echo '<!-- PRODUCT TABLE DESCRIPTION -->';
      echo '<div class="product-table-description">';
      echo '<h6 class="title">Description</h6>';
      echo '</div>';
      echo '<!-- /PRODUCT TABLE DESCRIPTION -->';
      echo '';
      echo '<!-- PRODUCT TABLE PRICE -->';
      echo '<div class="product-table-price">';
      echo '<h6 class="title">Price</h6>';
      echo '</div>';
      echo '<!-- /PRODUCT TABLE PRICE -->';
      echo '';
      echo '<!-- PRODUCT TABLE QUANTITY -->';
      echo '<div class="product-table-quantity">';
      echo '<h6 class="title">Quantity</h6>';
      echo '</div>';
      echo '<!-- /PRODUCT TABLE QUANTITY -->';
      echo '';
      echo '<!-- PRODUCT TABLE TOTAL -->';
      echo '<div class="product-table-total">';
      echo '<h6 class="title">Total Price</h6>';
      echo '</div>';
      echo '<!-- /PRODUCT TABLE TOTAL -->';
      echo '</div>';
      echo '<!-- /PRODUCT TABLE HEADER -->';
      echo '';
      echo '<!-- PRODUCT TABLE ROW -->';
      echo '<div class="product-table-row">';
      echo '<!-- PRODUCT TABLE PHOTO -->';
      echo '<div class="product-table-photo">';
      echo '<!-- PRODUCT IMG -->';
      echo '<a href="product-page-v1.php">';
      echo '<figure class="product-img small">';
      echo '<img src="img/products/01.png" alt="product02">';
      echo '</figure>';
      echo '</a>';
      echo '<!-- /PRODUCT IMG -->';
      echo '</div>';
      ?>
          <!-- /PRODUCT TABLE PHOTO -->

          <!-- PRODUCT TABLE NAME -->
          <div class="product-table-name">
            <a href="product-page-v1.html">
              <h6 class="title small"><?php
              $item = simplexml_load_file('data/Saludo-Peralta-Aquino_IT2F_PcWorldz.xml');
              echo $item->product[0]->name;
              ?></h6>
            </a>
            <?php
            echo '<p class="product-description small">Gaming</p>';
            echo '<!-- RATING -->';
            echo '<ul class="rating small">';
            echo '<!-- RATING ITEM -->';
            echo '<li class="rating-item filled">';
            echo '<!-- SVG STAR -->';
            echo '<svg class="svg-star">';
            echo '<use xlink:href="#svg-star"></use>';
            echo '</svg>';
            echo '<!-- /SVG STAR -->';
            echo '</li>';
            echo '<!-- /RATING ITEM -->';
            echo '';
            echo '<!-- RATING ITEM -->';
            echo '<li class="rating-item filled">';
            echo '<!-- SVG STAR -->';
            echo '<svg class="svg-star">';
            echo '<use xlink:href="#svg-star"></use>';
            echo '</svg>';
            echo '<!-- /SVG STAR -->';
            echo '</li>';
            echo '<!-- /RATING ITEM -->';
            echo '';
            echo '<!-- RATING ITEM -->';
            echo '<li class="rating-item filled">';
            echo '<!-- SVG STAR -->';
            echo '<svg class="svg-star">';
            echo '<use xlink:href="#svg-star"></use>';
            echo '</svg>';
            echo '<!-- /SVG STAR -->';
            echo '</li>';
            echo '<!-- /RATING ITEM -->';
            echo '';
            echo '<!-- RATING ITEM -->';
            echo '<li class="rating-item filled">';
            echo '<!-- SVG STAR -->';
            echo '<svg class="svg-star">';
            echo '<use xlink:href="#svg-star"></use>';
            echo '</svg>';
            echo '<!-- /SVG STAR -->';
            echo '</li>';
            echo '<!-- /RATING ITEM -->';
            echo '';
            echo '<!-- RATING ITEM -->';
            echo '<li class="rating-item">';
            echo '<!-- SVG STAR -->';
            echo '<svg class="svg-star">';
            echo '<use xlink:href="#svg-star"></use>';
            echo '</svg>';
            echo '<!-- /SVG STAR -->';
            echo '</li>';
            echo '<!-- /RATING ITEM -->';
            echo '</ul>';
            echo '<!-- /RATING -->';
            ?>
          </div>
          <!-- /PRODUCT TABLE NAME -->

          <!-- PRODUCT TABLE DESCRIPTION -->
          <div class="product-table-description">
            <p class="tiny"><?php
              $item = simplexml_load_file('data/Saludo-Peralta-Aquino_IT2F_PcWorldz.xml');
              echo $item->product[0]->description;
              ?></p>
          </div>
          <!-- /PRODUCT TABLE DESCRIPTION -->

          <!-- PRODUCT TABLE PRICE -->
          <div class="product-table-price">
            <h6 class="product-price"><?php
              $item = simplexml_load_file('data/Saludo-Peralta-Aquino_IT2F_PcWorldz.xml');
              echo $item->product[0]->price;
              ?></h6>
          </div>
          <?php
          echo '<div class="product-table-quantity">';
          echo '<!-- QUANTITY INPUT -->';
          echo '<div class="quantity-input">';
          echo '<span class="count">4</span>';
          echo '<!-- INCREMENT COUNT -->';
          echo '<div class="increment-count">';
          echo '<!-- SVG ARROW -->';
          echo '<svg class="svg-arrow face-up">';
          echo '<use xlink:href="#svg-arrow"></use>';
          echo '</svg>';
          echo '<!-- /SVG ARROW -->';
          echo '</div>';
          echo '<!-- /INCREMENT COUNT -->';
          echo '';
          echo '<!-- DECREMENT COUNT -->';
          echo '<div class="decrement-count">';
          echo '<!-- SVG ARROW -->';
          echo '<svg class="svg-arrow face-down">';
          echo '<use xlink:href="#svg-arrow"></use>';
          echo '</svg>';
          echo '<!-- /SVG ARROW -->';
          echo '</div>';
          echo '<!-- /DECREMENT COUNT -->';
          echo '</div>';
          echo '<!-- QUANTITY INPUT -->';
          echo '</div>';
          echo '<!-- /PRODUCT TABLE QUANTITY -->';
          echo '';
          echo '<!-- PRODUCT TABLE TOTAL -->';
          echo '<div class="product-table-total">';
          echo '<h6 class="product-price">₱233,848</h6>';
          echo '</div>';
          echo '<!-- /PRODUCT TABLE TOTAL -->';
          echo '';
          echo '<!-- REMOVE FCART -->';
          echo '<div class="remove-fcart">';
          echo '<!-- SVG CROSS -->';
          echo '<svg class="svg-cross medium">';
          echo '<use xlink:href="#svg-cross"></use>';
          echo '</svg>';
          echo '<!-- /SVG CROSS -->';
          echo '</div>';
          echo '<!-- /REMOVE FCART -->';
          echo '</div>';
          echo '<!-- /PRODUCT TABLE ROW -->';
          echo '';
          echo '<!-- PRODUCT TABLE ROW -->';
          echo '<div class="product-table-row">';
          echo '<!-- PRODUCT TABLE PHOTO -->';
          echo '<div class="product-table-photo">';
          echo '<!-- PRODUCT IMG -->';
          echo '<a href="product-page-v1.php">';
          echo '<figure class="product-img small">';
          echo '<img src="img/products/02.png" alt="product06">';
          echo '</figure>';
          echo '</a>';
          echo '<!-- /PRODUCT IMG -->';
          echo '</div>';
          ?>
          <div class="product-table-name">
            <a href="product-page-v1.html">
              <h6 class="title small"><?php
              $item = simplexml_load_file('data/Saludo-Peralta-Aquino_IT2F_PcWorldz.xml');
              echo $item->product[1]->name;
              ?></h6>
            </a>
            <?php
            echo '<p class="product-description small">Gaming</p>';
            echo '<!-- RATING -->';
            echo '<ul class="rating small">';
            echo '<!-- RATING ITEM -->';
            echo '<li class="rating-item filled">';
            echo '<!-- SVG STAR -->';
            echo '<svg class="svg-star">';
            echo '<use xlink:href="#svg-star"></use>';
            echo '</svg>';
            echo '<!-- /SVG STAR -->';
            echo '</li>';
            echo '<!-- /RATING ITEM -->';
            echo '';
            echo '<!-- RATING ITEM -->';
            echo '<li class="rating-item filled">';
            echo '<!-- SVG STAR -->';
            echo '<svg class="svg-star">';
            echo '<use xlink:href="#svg-star"></use>';
            echo '</svg>';
            echo '<!-- /SVG STAR -->';
            echo '</li>';
            echo '<!-- /RATING ITEM -->';
            echo '';
            echo '<!-- RATING ITEM -->';
            echo '<li class="rating-item filled">';
            echo '<!-- SVG STAR -->';
            echo '<svg class="svg-star">';
            echo '<use xlink:href="#svg-star"></use>';
            echo '</svg>';
            echo '<!-- /SVG STAR -->';
            echo '</li>';
            echo '<!-- /RATING ITEM -->';
            echo '';
            echo '<!-- RATING ITEM -->';
            echo '<li class="rating-item">';
            echo '<!-- SVG STAR -->';
            echo '<svg class="svg-star">';
            echo '<use xlink:href="#svg-star"></use>';
            echo '</svg>';
            echo '<!-- /SVG STAR -->';
            echo '</li>';
            echo '<!-- /RATING ITEM -->';
            echo '';
            echo '<!-- RATING ITEM -->';
            echo '<li class="rating-item">';
            echo '<!-- SVG STAR -->';
            echo '<svg class="svg-star">';
            echo '<use xlink:href="#svg-star"></use>';
            echo '</svg>';
            echo '<!-- /SVG STAR -->';
            echo '</li>';
            echo '<!-- /RATING ITEM -->';
            echo '</ul>';
            echo '<!-- /RATING -->';
            ?>
          </div>
          <!-- /PRODUCT TABLE NAME -->

          <!-- PRODUCT TABLE DESCRIPTION -->
          <div class="product-table-description">
            <p class="tiny"><?php
              $item = simplexml_load_file('data/Saludo-Peralta-Aquino_IT2F_PcWorldz.xml');
              echo $item->product[1]->description;
              ?></p>
          </div>
          <!-- /PRODUCT TABLE DESCRIPTION -->

          <!-- PRODUCT TABLE PRICE -->
          <div class="product-table-price">
            <h6 class="product-price"><?php
              $item = simplexml_load_file('data/Saludo-Peralta-Aquino_IT2F_PcWorldz.xml');
              echo $item->product[1]->price;
              ?></h6>
          </div>
          <!-- /PRODUCT TABLE PRICE -->

          <!-- PRODUCT TABLE QUANTITY -->
          <div class="product-table-quantity">
            <!-- QUANTITY INPUT -->
            <div class="quantity-input">
              <span class="count">2</span>
              <!-- INCREMENT COUNT -->
              <div class="increment-count">
                <!-- SVG ARROW -->
                <svg class="svg-arrow face-up">
                  <use xlink:href="#svg-arrow"></use>
                </svg>
                <!-- /SVG ARROW -->
              </div>
              <!-- /INCREMENT COUNT -->

              <!-- DECREMENT COUNT -->
              <div class="decrement-count">
                <!-- SVG ARROW -->
                <svg class="svg-arrow face-down">
                  <use xlink:href="#svg-arrow"></use>
                </svg>
                <!-- /SVG ARROW -->
              </div>
              <!-- /DECREMENT COUNT -->
            </div>
            <!-- QUANTITY INPUT -->
          </div>
          <!-- /PRODUCT TABLE QUANTITY -->

          <!-- PRODUCT TABLE TOTAL -->
          <div class="product-table-total">
            <h6 class="product-price">₱57,032</h6>
          </div>
          <!-- /PRODUCT TABLE TOTAL -->

          <!-- REMOVE FCART -->
          <div class="remove-fcart">
            <!-- SVG CROSS -->
            <svg class="svg-cross medium">
              <use xlink:href="#svg-cross"></use>
            </svg>
            <!-- /SVG CROSS -->
          </div>
          <!-- /REMOVE FCART -->
        </div>
        <!-- /PRODUCT TABLE ROW -->

        <!-- PRODUCT TABLE ROW -->
        <div class="product-table-row">
          <!-- PRODUCT TABLE PHOTO -->
          <div class="product-table-photo">
            <!-- PRODUCT IMG -->
            <a href="product-page-v1.php">
              <figure class="product-img small">
                <img src="img/products/03.png" alt="product05">
              </figure>
            </a>
            <!-- /PRODUCT IMG -->
          </div>
          <!-- /PRODUCT TABLE PHOTO -->

          <!-- PRODUCT TABLE NAME -->
          <div class="product-table-name">
            <a href="product-page-v1.html">
              <h6 class="title small"><?php
              $item = simplexml_load_file('data/Saludo-Peralta-Aquino_IT2F_PcWorldz.xml');
              echo $item->product[2]->name;
              ?></h6>
            </a>
            <?php
          echo '<p class="product-description small">Gaming</p>';
          echo '<!-- RATING -->';
          echo '<ul class="rating small">';
          echo '<!-- RATING ITEM -->';
          echo '<li class="rating-item filled">';
          echo '<!-- SVG STAR -->';
          echo '<svg class="svg-star">';
          echo '<use xlink:href="#svg-star"></use>';
          echo '</svg>';
          echo '<!-- /SVG STAR -->';
          echo '</li>';
          echo '<!-- /RATING ITEM -->';
          echo '';
          echo '<!-- RATING ITEM -->';
          echo '<li class="rating-item filled">';
          echo '<!-- SVG STAR -->';
          echo '<svg class="svg-star">';
          echo '<use xlink:href="#svg-star"></use>';
          echo '</svg>';
          echo '<!-- /SVG STAR -->';
          echo '</li>';
          echo '<!-- /RATING ITEM -->';
          echo '';
          echo '<!-- RATING ITEM -->';
          echo '<li class="rating-item filled">';
          echo '<!-- SVG STAR -->';
          echo '<svg class="svg-star">';
          echo '<use xlink:href="#svg-star"></use>';
          echo '</svg>';
          echo '<!-- /SVG STAR -->';
          echo '</li>';
          echo '<!-- /RATING ITEM -->';
          echo '';
          echo '<!-- RATING ITEM -->';
          echo '<li class="rating-item filled">';
          echo '<!-- SVG STAR -->';
          echo '<svg class="svg-star">';
          echo '<use xlink:href="#svg-star"></use>';
          echo '</svg>';
          echo '<!-- /SVG STAR -->';
          echo '</li>';
          echo '<!-- /RATING ITEM -->';
          echo '';
          echo '<!-- RATING ITEM -->';
          echo '<li class="rating-item">';
          echo '<!-- SVG STAR -->';
          echo '<svg class="svg-star">';
          echo '<use xlink:href="#svg-star"></use>';
          echo '</svg>';
          echo '<!-- /SVG STAR -->';
          echo '</li>';
          echo '<!-- /RATING ITEM -->';
          echo '</ul>';
          ?>
            <!-- /RATING -->
          </div>
          <!-- /PRODUCT TABLE NAME -->

          <!-- PRODUCT TABLE DESCRIPTION -->
          <div class="product-table-description">
            <p class="tiny"><?php
              $item = simplexml_load_file('data/Saludo-Peralta-Aquino_IT2F_PcWorldz.xml');
              echo $item->product[2]->description;
              ?></p>
          </div>
          <!-- /PRODUCT TABLE DESCRIPTION -->

          <!-- PRODUCT TABLE PRICE -->
          <div class="product-table-price">
            <h6 class="product-price"><?php
              $item = simplexml_load_file('data/Saludo-Peralta-Aquino_IT2F_PcWorldz.xml');
              echo $item->product[2]->price;
              ?></h6>
          </div>
          <!-- /PRODUCT TABLE PRICE -->

          <!-- PRODUCT TABLE QUANTITY -->
          <?php
          echo '<div class="product-table-quantity">';
          echo '<!-- QUANTITY INPUT -->';
          echo '<div class="quantity-input">';
          echo '<span class="count">1</span>';
          echo '<!-- INCREMENT COUNT -->';
          echo '<div class="increment-count">';
          echo '<!-- SVG ARROW -->';
          echo '<svg class="svg-arrow face-up">';
          echo '<use xlink:href="#svg-arrow"></use>';
          echo '</svg>';
          echo '<!-- /SVG ARROW -->';
          echo '</div>';
          echo '<!-- /INCREMENT COUNT -->';
          echo '';
          echo '<!-- DECREMENT COUNT -->';
          echo '<div class="decrement-count">';
          echo '<!-- SVG ARROW -->';
          echo '<svg class="svg-arrow face-down">';
          echo '<use xlink:href="#svg-arrow"></use>';
          echo '</svg>';
          echo '<!-- /SVG ARROW -->';
          echo '</div>';
          echo '<!-- /DECREMENT COUNT -->';
          echo '</div>';
          echo '<!-- QUANTITY INPUT -->';
          echo '</div>';
          echo '<!-- /PRODUCT TABLE QUANTITY -->';
          echo '';
          ?>
          <!-- PRODUCT TABLE TOTAL -->
          <div class="product-table-total">
            <h6 class="product-price"><?php
              $item = simplexml_load_file('data/Saludo-Peralta-Aquino_IT2F_PcWorldz.xml');
              echo $item->product[2]->price;
              ?></h6>
          </div>
          <!-- /PRODUCT TABLE TOTAL -->

          <!-- REMOVE FCART -->
          <div class="remove-fcart">
            <!-- SVG CROSS -->
            <svg class="svg-cross medium">
              <use xlink:href="#svg-cross"></use>
            </svg>
            <!-- /SVG CROSS -->
          </div>
          <!-- /REMOVE FCART -->
        </div>
        <!-- /PRODUCT TABLE ROW -->
      </div>
      <!-- /PRODUCT TABLE -->
    </div>
    <!-- /SECTION -->
  </div>
  <!-- /SECTION WRAP -->

  <!-- SECTION WRAP -->
  <?php
echo '<div class="section-wrap">';
echo '<!-- SECTION -->';
echo '<div class="section no-title bottom-shorter">';
echo '<!-- COLUMN BIG 3 WRAP -->';
echo '<div class="column-big-3-wrap">';
echo '<!-- COLUMN -->';
echo '<div class="column">';
echo '<h2 class="subsection-title">Calculate Shipping</h2>';
echo '<hr class="line-separator">';
echo '<!-- FORM -->';
echo '<form>';
echo '<!-- FORM ROW -->';
echo '<div class="form-row">';
echo '<label class="rl-label">Select your Country</label>';
echo '<!-- SELECT BLOCK -->';
echo '<label for="country" class="select-block medium">';
echo '<select name="country" id="country">';
echo '<option value="0">Select Country</option>';
echo '<option value="1">United States (USA)</option>';
echo '<option value="2">Spain (SPA)</option>';
echo '<option value="3">Germany (GER)</option>';
echo '</select>';
echo '<!-- SVG ARROW -->';
echo '<svg class="svg-arrow face-down">';
echo '<use xlink:href="#svg-arrow"></use>';
echo '</svg>';
echo '<!-- /SVG ARROW -->';
echo '</label>';
echo '<!-- SELECT BLOCK -->';
echo '</div>';
echo '<!-- /FORM ROW -->';
echo '';
echo '<!-- FORM ROW -->';
echo '<div class="form-row">';
echo '<div class="third">';
echo '<label class="rl-label">Select your State</label>';
echo '<!-- SELECT BLOCK -->';
echo '<label for="state" class="select-block medium">';
echo '<select name="state" id="state">';
echo '<option value="0">State / City</option>';
echo '<option value="1">New York</option>';
echo '<option value="2">Barcelona</option>';
echo '</select>';
echo '<!-- SVG ARROW -->';
echo '<svg class="svg-arrow face-down">';
echo '<use xlink:href="#svg-arrow"></use>';
echo '</svg>';
echo '<!-- /SVG ARROW -->';
echo '</label>';
echo '<!-- SELECT BLOCK -->';
echo '</div>';
echo '<div class="third">';
echo '<label for="zip_code" class="rl-label">Zip Code</label>';
echo '<input type="text" id="zip_code" name="zip_code" placeholder="Zip Code">';
echo '</div>';
echo '</div>';
echo '<!-- /FORM ROW -->';
echo '';
echo '<!-- FORM ROW -->';
echo '<div class="form-row separated">';
echo '<button class="button short dark">Update Shipping</button>';
echo '</div>';
echo '<!-- /FORM ROW -->';
echo '</form>';
echo '<!-- /FORM -->';
echo '</div>';
echo '<!-- /COLUMN -->';
echo '';
echo '<!-- COLUMN -->';
echo '<div class="column">';
echo '<h2 class="subsection-title">Coupon Code</h2>';
echo '<hr class="line-separator">';
echo '<p class="small">If you have a promotional or a discount code, please enter it right here to redeem it!</p>';
echo '<!-- FORM -->';
echo '<form>';
echo '<!-- FORM ROW -->';
echo '<div class="form-row">';
echo '<label for="coupon_code" class="rl-label">Coupon Code</label>';
echo '<input type="text" class="short" id="coupon_code" name="coupon_code" placeholder="Enter coupon code...">';
echo '</div>';
echo '<!-- /FORM ROW -->';
echo '';
echo '<!-- FORM ROW -->';
echo '<div class="form-row separated">';
echo '<button class="button short dark">Redeem Code</button>';
echo '</div>';
echo '<!-- /FORM ROW -->';
echo '</form>';
echo '<!-- /FORM -->';
echo '</div>';
echo '<!-- /COLUMN -->';
echo '';
echo '<!-- COLUMN -->';
echo '<div class="column">';
echo '<h2 class="subsection-title">Cart Totals</h2>';
echo '<hr class="line-separator">';
echo '<!-- ONELINE -->';
echo '<p class="oneline">Cart Subtotal<span class="annotation">₱303,827</span></p>';
echo '<!-- /ONELINE -->';
echo '';
echo '<!-- ONELINE -->';
echo '<p class="oneline">Shipping and Handling<span class="annotation">₱100</span></p>';
echo '<!-- /ONELINE -->';
echo '';
echo '<!-- ONELINE -->';
echo '<p class="oneline">Cart Totals<span class="annotation bold">₱303,927</span></p>';
echo '<!-- /ONELINE -->';
echo '';
echo '<!-- FORM -->';
echo '<form>';
echo '<!-- FORM ROW -->';
echo '<div class="form-row separated">';
echo '<button class="button">Proceed to Checkout</button>';
echo '</div>';
echo '<!-- /FORM ROW -->';
echo '</form>';
echo '<!-- /FORM -->';
echo '</div>';
echo '<!-- /COLUMN -->';
echo '</div>';
echo '<!-- /COLUMN BIG 3 WRAP -->';
echo '</div>';
echo '<!-- /SECTION -->';
echo '</div>';
echo '<!-- /SECTION WRAP -->';
echo '';
echo '<!-- FOOTER WRAP -->';
echo '<footer class="footer-wrap">';
echo '<!-- FOOTER TOP -->';
echo '<div class="footer-top">';
echo '<!-- ABOUTUS PREVIEW -->';
echo '<div class="aboutus-preview">';
echo '<!-- LOGO -->';
echo '<figure class="logo">';
echo '<img src="img/logo-footer.png" alt="logo">';
echo '<figcaption>PC WORLDZ</figcaption>';
echo '</figure>';
echo '<!-- /LOGO -->';
echo '<p class="description">Were dedicated to give you the very best of Computer Products, with a focus on quality, price and uniqueness. Founded in 2022 by Saludo, Peralta and Aquino, PC WORLDZ serves customer worldwide, and are thrilled to be a part of the fair trade wing of the IT industry.</p>';
echo '';
echo '<!-- CONTACTUS LIST -->';
echo '<ul class="contactus-list">';
echo '<!-- CONTACTUS LIST ITEM -->';
echo '<li class="contactus-list-item">';
echo '<i class="s-icon icon-location-pin"></i>';
echo '<p>Marinduque, PH</p>';
echo '</li>';
echo '<!-- /CONTACTUS LIST ITEM -->';
echo '';
echo '<!-- CONTACTUS LIST ITEM -->';
echo '<li class="contactus-list-item">';
echo '<i class="s-icon icon-envelope"></i>';
echo '<a href="mailto:info@tricksterhelmets.com" class="link">info@pcworldz.com</a>';
echo '</li>';
echo '<!-- /CONTACTUS LIST ITEM -->';
echo '';
echo '<!-- CONTACTUS LIST ITEM -->';
echo '<li class="contactus-list-item">';
echo '<i class="s-icon icon-phone"></i>';
echo '<p>044 - 555 - 123 - 1234</p>';
echo '</li>';
echo '<!-- /CONTACTUS LIST ITEM -->';
echo '</ul>';
echo '<!-- /CONTACTUS LIST -->';
echo '</div>';
echo '<!-- /ABOUTUS PREVIEW -->';
echo '';
echo '<!-- CONTENT DROPDOWN COLUMN -->';
echo '<div class="content-dropdown-column">';
echo '<h6 class="title small secondary">Sitemap</h6>';
echo '<hr class="line-separator">';
echo '<!-- LINK LIST -->';
echo '<ul class="link-list decorated">';
echo '<!-- LINK LIST ITEM -->';
echo '<li class="link-list-item">';
echo '<a href="index.php">';
echo 'Home';
echo '<!-- SVG ARROW -->';
echo '<svg class="svg-arrow tiny">';
echo '<use xlink:href="#svg-arrow"></use>';
echo '</svg>';
echo '<!-- /SVG ARROW -->';
echo '</a>';
echo '</li>';
echo '<!-- /LINK LIST ITEM -->';
echo '';
echo '<!-- LINK LIST ITEM -->';
echo '<li class="link-list-item">';
echo '<a href="aboutus.php">';
echo 'About Us';
echo '<!-- SVG ARROW -->';
echo '<svg class="svg-arrow tiny">';
echo '<use xlink:href="#svg-arrow"></use>';
echo '</svg>';
echo '<!-- /SVG ARROW -->';
echo '</a>';
echo '</li>';
echo '<!-- /LINK LIST ITEM -->';
echo '';
echo '<!-- LINK LIST ITEM -->';
echo '<li class="link-list-item">';
echo '<a href="shop-grid.php">';
echo 'Shop';
echo '<!-- SVG ARROW -->';
echo '<svg class="svg-arrow tiny">';
echo '<use xlink:href="#svg-arrow"></use>';
echo '</svg>';
echo '<!-- /SVG ARROW -->';
echo '</a>';
echo '</li>';
echo '<!-- /LINK LIST ITEM -->';
echo '';
echo '<!-- LINK LIST ITEM -->';
echo '<li class="link-list-item">';
echo '<a href="blog.php">';
echo 'Our Blog';
echo '<!-- SVG ARROW -->';
echo '<svg class="svg-arrow tiny">';
echo '<use xlink:href="#svg-arrow"></use>';
echo '</svg>';
echo '<!-- /SVG ARROW -->';
echo '</a>';
echo '</li>';
echo '<!-- /LINK LIST ITEM -->';
echo '';
echo '<!-- LINK LIST ITEM -->';
echo '<li class="link-list-item">';
echo '<a href="contactus.php">';
echo 'Contact';
echo '<!-- SVG ARROW -->';
echo '<svg class="svg-arrow tiny">';
echo '<use xlink:href="#svg-arrow"></use>';
echo '</svg>';
echo '<!-- /SVG ARROW -->';
echo '</a>';
echo '</li>';
echo '<!-- /LINK LIST ITEM -->';
echo '';
echo '<!-- LINK LIST ITEM -->';
echo '<li class="link-list-item">';
echo '<a href="profile.php">';
echo 'Your Account';
echo '<!-- SVG ARROW -->';
echo '<svg class="svg-arrow tiny">';
echo '<use xlink:href="#svg-arrow"></use>';
echo '</svg>';
echo '<!-- /SVG ARROW -->';
echo '</a>';
echo '</li>';
echo '<!-- /LINK LIST ITEM -->';
echo '';
echo '<!-- LINK LIST ITEM -->';
echo '<li class="link-list-item">';
echo '<a href="#">';
echo 'FAQs';
echo '<!-- SVG ARROW -->';
echo '<svg class="svg-arrow tiny">';
echo '<use xlink:href="#svg-arrow"></use>';
echo '</svg>';
echo '<!-- /SVG ARROW -->';
echo '</a>';
echo '</li>';
echo '<!-- /LINK LIST ITEM -->';
echo '';
echo '<!-- LINK LIST ITEM -->';
echo '<li class="link-list-item">';
echo '<a href="#">';
echo 'Our Guarantee';
echo '<!-- SVG ARROW -->';
echo '<svg class="svg-arrow tiny">';
echo '<use xlink:href="#svg-arrow"></use>';
echo '</svg>';
echo '<!-- /SVG ARROW -->';
echo '</a>';
echo '</li>';
echo '<!-- /LINK LIST ITEM -->';
echo '</ul>';
echo '<!-- /LINK LIST -->';
echo '</div>';
echo '<!-- /CONTENT DROPDOWN COLUMN -->';
echo '';
echo '<!-- CONTENT DROPDOWN COLUMN -->';
echo '<div class="content-dropdown-column">';
echo '<h6 class="title small secondary">Company</h6>';
echo '<hr class="line-separator">';
echo '<!-- LINK LIST -->';
echo '<ul class="link-list decorated">';
echo '<!-- LINK LIST ITEM -->';
echo '<li class="link-list-item">';
echo '<a href="#">';
echo 'Shipping Policy';
echo '<!-- SVG ARROW -->';
echo '<svg class="svg-arrow tiny">';
echo '<use xlink:href="#svg-arrow"></use>';
echo '</svg>';
echo '<!-- /SVG ARROW -->';
echo '</a>';
echo '</li>';
echo '<!-- /LINK LIST ITEM -->';
echo '';
echo '<!-- LINK LIST ITEM -->';
echo '<li class="link-list-item">';
echo '<a href="#">';
echo 'International Shipping';
echo '<!-- SVG ARROW -->';
echo '<svg class="svg-arrow tiny">';
echo '<use xlink:href="#svg-arrow"></use>';
echo '</svg>';
echo '<!-- /SVG ARROW -->';
echo '</a>';
echo '</li>';
echo '<!-- /LINK LIST ITEM -->';
echo '';
echo '<!-- LINK LIST ITEM -->';
echo '<li class="link-list-item">';
echo '<a href="#">';
echo 'Affiliates';
echo '<!-- SVG ARROW -->';
echo '<svg class="svg-arrow tiny">';
echo '<use xlink:href="#svg-arrow"></use>';
echo '</svg>';
echo '<!-- /SVG ARROW -->';
echo '</a>';
echo '</li>';
echo '<!-- /LINK LIST ITEM -->';
echo '';
echo '<!-- LINK LIST ITEM -->';
echo '<li class="link-list-item">';
echo '<a href="#">';
echo 'Our Sponsors';
echo '<!-- SVG ARROW -->';
echo '<svg class="svg-arrow tiny">';
echo '<use xlink:href="#svg-arrow"></use>';
echo '</svg>';
echo '<!-- /SVG ARROW -->';
echo '</a>';
echo '</li>';
echo '<!-- /LINK LIST ITEM -->';
echo '';
echo '<!-- LINK LIST ITEM -->';
echo '<li class="link-list-item">';
echo '<a href="#">';
echo 'Privacy Policy';
echo '<!-- SVG ARROW -->';
echo '<svg class="svg-arrow tiny">';
echo '<use xlink:href="#svg-arrow"></use>';
echo '</svg>';
echo '<!-- /SVG ARROW -->';
echo '</a>';
echo '</li>';
echo '<!-- /LINK LIST ITEM -->';
echo '';
echo '<!-- LINK LIST ITEM -->';
echo '<li class="link-list-item">';
echo '<a href="#">';
echo 'Terms and Conditions';
echo '<!-- SVG ARROW -->';
echo '<svg class="svg-arrow tiny">';
echo '<use xlink:href="#svg-arrow"></use>';
echo '</svg>';
echo '<!-- /SVG ARROW -->';
echo '</a>';
echo '</li>';
echo '<!-- /LINK LIST ITEM -->';
echo '';
echo '<!-- LINK LIST ITEM -->';
echo '<li class="link-list-item">';
echo '<a href="#">';
echo 'Pay on Arrival';
echo '<!-- SVG ARROW -->';
echo '<svg class="svg-arrow tiny">';
echo '<use xlink:href="#svg-arrow"></use>';
echo '</svg>';
echo '<!-- /SVG ARROW -->';
echo '</a>';
echo '</li>';
echo '<!-- /LINK LIST ITEM -->';
echo '</ul>';
echo '<!-- /LINK LIST -->';
echo '</div>';
echo '<!-- /CONTENT DROPDOWN COLUMN -->';
echo '';
echo '<!-- CONTENT DROPDOWN COLUMN -->';
echo '<div class="content-dropdown-column full">';
echo '<h6 class="title small secondary">Quick Contact</h6>';
echo '<hr class="line-separator">';
echo '<p class="description">You can contact by using our contact number or email us below by using our email info@pcworldz.com</p>';
echo '<form class="quick-contact-form">';
echo '<input type="text" class="dark" name="qc_email" placeholder="Email">';
echo '<textarea name="qc_message" class="dark" placeholder="Message"></textarea>';
echo '<button class="button small">Send Message</button>';
echo '</form>';
echo '</div>';
echo '<!-- /CONTENT DROPDOWN COLUMN -->';
echo '</div>';
echo '<!-- /FOOTER TOP -->';
echo '';
echo '<!-- FOOTER BOTTOM -->';
echo '<div class="footer-bottom">';
echo '<h6 class="title tiny secondary">Payment Methods:</h6>';
echo '<!-- PAYMENT LIST -->';
echo '<ul class="payment-list">';
echo '<!-- PAYMENT LIST ITEM -->';
echo '<li class="payment-list-item">';
echo '<a href="#">';
echo '<img src="img/home/card_01.png" alt="card01">';
echo '</a>';
echo '</li>';
echo '<!-- PAYMENT LIST ITEM -->';
echo '';
echo '<!-- PAYMENT LIST ITEM -->';
echo '<li class="payment-list-item">';
echo '<a href="#">';
echo '<img src="img/home/card_02.png" alt="card02">';
echo '</a>';
echo '</li>';
echo '<!-- PAYMENT LIST ITEM -->';
echo '';
echo '<!-- PAYMENT LIST ITEM -->';
echo '<li class="payment-list-item">';
echo '<a href="#">';
echo '<img src="img/home/card_03.png" alt="card03">';
echo '</a>';
echo '</li>';
echo '<!-- PAYMENT LIST ITEM -->';
echo '';
echo '<!-- PAYMENT LIST ITEM -->';
echo '<li class="payment-list-item">';
echo '<a href="#">';
echo '<img src="img/home/card_04.png" alt="card04">';
echo '</a>';
echo '</li>';
echo '<!-- PAYMENT LIST ITEM -->';
echo '';
echo '<!-- PAYMENT LIST ITEM -->';
echo '<li class="payment-list-item">';
echo '<a href="#">';
echo '<img src="img/home/card_05.png" alt="card05">';
echo '</a>';
echo '</li>';
echo '<!-- PAYMENT LIST ITEM -->';
echo '';
echo '<!-- PAYMENT LIST ITEM -->';
echo '<li class="payment-list-item">';
echo '<a href="#">';
echo '<img src="img/home/card_06.png" alt="card06">';
echo '</a>';
echo '</li>';
echo '<!-- PAYMENT LIST ITEM -->';
echo '</ul>';
echo '<!-- /PAYMENT LIST -->';
echo '</div>';
echo '<!-- /FOOTER BOTTOM -->';
echo '</footer>';
echo '<!-- /FOOTER WRAP -->';
echo '';
echo '<!-- WIDGET LINE WRAP -->';
echo '<div class="widget-line-wrap dark widget-line-copy">';
echo '<!-- WIDGET LINE -->';
echo '<div class="widget-line big">';
echo '<p class="copyright"><span class="bold">PC WORLDZ</span> | All Rights Reserved 2016</p>';
echo '<!-- ACTIONS LIST -->';
echo '<ul class="actions-list right">';
echo '<!-- ACTIONS LIST ITEM -->';
echo '<li class="actions-list-item">';
echo '<!-- SOCIAL LINK -->';
echo '<div class="social-link">';
echo '<a href="#">';
echo '<i class="fa fa-facebook"></i>';
echo '</a>';
echo '</div>';
echo '<!-- /SOCIAL LINK -->';
echo '</li>';
echo '<!-- ACTIONS LIST ITEM -->';
echo '';
echo '<!-- ACTIONS LIST ITEM -->';
echo '<li class="actions-list-item">';
echo '<!-- SOCIAL LINK -->';
echo '<div class="social-link">';
echo '<a href="#">';
echo '<i class="fa fa-twitter"></i>';
echo '</a>';
echo '</div>';
echo '<!-- /SOCIAL LINK -->';
echo '</li>';
echo '<!-- ACTIONS LIST ITEM -->';
echo '';
echo '<!-- ACTIONS LIST ITEM -->';
echo '<li class="actions-list-item">';
echo '<!-- SOCIAL LINK -->';
echo '<div class="social-link">';
echo '<a href="#">';
echo '<i class="fa fa-google-plus"></i>';
echo '</a>';
echo '</div>';
echo '<!-- /SOCIAL LINK -->';
echo '</li>';
echo '<!-- ACTIONS LIST ITEM -->';
echo '';
echo '<!-- ACTIONS LIST ITEM -->';
echo '<li class="actions-list-item">';
echo '<!-- SOCIAL LINK -->';
echo '<div class="social-link">';
echo '<a href="#">';
echo '<i class="fa fa-rss"></i>';
echo '</a>';
echo '</div>';
echo '<!-- /SOCIAL LINK -->';
echo '</li>';
echo '<!-- ACTIONS LIST ITEM -->';
echo '';
echo '<!-- ACTIONS LIST ITEM -->';
echo '<li class="actions-list-item">';
echo '<!-- SOCIAL LINK -->';
echo '<div class="social-link">';
echo '<a href="#">';
echo '<i class="fa fa-vimeo"></i>';
echo '</a>';
echo '</div>';
echo '<!-- /SOCIAL LINK -->';
echo '</li>';
echo '<!-- ACTIONS LIST ITEM -->';
echo '</ul>';
echo '<!-- ACTIONS LIST -->';
echo '</div>';
echo '<!-- WIDGET LINE -->';
echo '</div>';
echo '<!-- WIDGET LINE WRAP -->';
echo '';
echo '<!-- SVG ICONS -->';
echo '<!-- SVG ARROW -->';
echo '<svg style="display: none;">';
echo '<symbol id="svg-arrow" viewBox="0 0 3.923 6.64014" preserveAspectRatio="xMinYMin meet">';
echo '<path d="M3.711,2.92L0.994,0.202c-0.215-0.213-0.562-0.213-0.776,0c-0.215,0.215-0.215,0.562,0,0.777l2.329,2.329';
echo 'L0.217,5.638c-0.215,0.215-0.214,0.562,0,0.776c0.214,0.214,0.562,0.215,0.776,0l2.717-2.718C3.925,3.482,3.925,3.135,3.711,2.92z"/>';
echo '</symbol>';
echo '</svg>';
echo '<!-- /SVG ARROW -->';
echo '';
echo '<!-- SVG CHECK -->';
echo '<svg style="display: none;">';
echo '<symbol id="svg-check" viewBox="0 0 20 16" preserveAspectRatio="xMinYMin meet">';
echo '<path fill-rule="evenodd" clip-rule="evenodd" d="M19.692,3.398L7.764,15.669c-0.412,0.424-1.08,0.424-1.491,0';
echo 'L0.308,9.534C-0.104,9.11-0.104,8.423,0.308,8l1.491-1.534c0.412-0.424,1.08-0.424,1.491,0l3.728,3.834L16.71,0.33';
echo 'c0.412-0.423,1.08-0.423,1.491,0l1.491,1.534C20.104,2.288,20.104,2.975,19.692,3.398z"/>';
echo '</symbol>';
echo '</svg>';
echo '<!-- /SVG CHECK -->';
echo '';
echo '<!-- SVG MAG GLASS -->';
echo '<svg style="display: none;">';
echo '<symbol id="svg-mag-glass" viewBox="0 0 12 12" preserveAspectRatio="xMinYMin meet">';
echo '<path d="M3.094,6.916c-0.275-0.269-0.482-0.573-0.62-0.912C2.336,5.666,2.267,5.32,2.267,4.968';
echo 'c0-0.351,0.069-0.699,0.207-1.041c0.138-0.344,0.345-0.65,0.62-0.92c0.275-0.269,0.587-0.468,0.934-0.599';
echo 'c0.347-0.13,0.702-0.195,1.066-0.195s0.72,0.064,1.067,0.195c0.346,0.131,0.657,0.331,0.933,0.599c0.275,0.27,0.482,0.576,0.62,0.92';
echo 'c0.139,0.342,0.207,0.69,0.207,1.041c0,0.353-0.068,0.698-0.207,1.036c-0.138,0.339-0.345,0.644-0.62,0.912';
echo 'c-0.275,0.27-0.587,0.471-0.933,0.605C5.813,7.657,5.458,7.724,5.094,7.724s-0.72-0.066-1.066-0.202';
echo 'C3.681,7.387,3.369,7.186,3.094,6.916z M1.494,1.443C0.996,1.93,0.622,2.479,0.374,3.092C0.125,3.705,0,4.328,0,4.962';
echo 's0.125,1.257,0.374,1.87c0.248,0.611,0.622,1.161,1.12,1.648c0.399,0.391,0.844,0.703,1.333,0.938';
echo 'c0.488,0.234,0.995,0.391,1.52,0.469c0.525,0.078,1.052,0.074,1.58-0.013C6.456,9.786,6.961,9.621,7.44,9.379l2.294,2.241';
echo 'c0.133,0.13,0.28,0.226,0.44,0.286c0.159,0.061,0.326,0.091,0.5,0.091c0.173,0,0.34-0.03,0.5-0.091s0.307-0.156,0.439-0.286';
echo 'c0.134-0.13,0.231-0.274,0.293-0.431c0.063-0.156,0.094-0.318,0.094-0.488s-0.031-0.332-0.094-0.488';
echo 'c-0.062-0.157-0.159-0.301-0.293-0.431L9.401,7.619C9.712,7.143,9.93,6.63,10.055,6.082c0.124-0.547,0.157-1.094,0.1-1.641';
echo 'c-0.058-0.547-0.209-1.08-0.453-1.596c-0.245-0.517-0.58-0.983-1.007-1.401C8.196,0.967,7.634,0.605,7.008,0.363';
echo 'C6.381,0.119,5.743-0.003,5.094-0.003S3.808,0.119,3.181,0.363C2.554,0.605,1.991,0.967,1.494,1.443z"/>';
echo '</symbol>';
echo '</svg>';
echo '<!-- /SVG MAG GLASS -->';
echo '';
echo '<!-- SVG CROSS -->';
echo '<svg style="display: none;">';
echo '<symbol id="svg-cross" viewBox="0 0 10 10" preserveAspectRatio="xMinYMin meet">';
echo '<g>';
echo '<g>';
echo '<polygon fill-rule="evenodd" clip-rule="evenodd" points="9.949,1.465 8.535,0.051 5,3.586 1.465,0.051';
echo '0.051,1.465 3.586,5 0.051,8.535 1.465,9.949 5,6.414 8.535,9.949 9.949,8.535 6.414,5 		"/>';
echo '</g>';
echo '</g>';
echo '</symbol>';
echo '</svg>';
echo '<!-- /SVG CROSS -->';
echo '';
echo '<!-- SVG CART -->';
echo '<svg style="display: none;">';
echo '<symbol id="svg-cart" viewBox="0 0 22 18" preserveAspectRatio="xMinYMin meet">';
echo '<g>';
echo '<g>';
echo '<path fill-rule="evenodd" clip-rule="evenodd" d="M16.991,13.991c-1.106,0-2.003,0.896-2.003,2.003s0.896,2.003,2.003,2.003';
echo 's2.003-0.896,2.003-2.003S18.098,13.991,16.991,13.991z M8.012,13.991c-1.105,0-2.003,0.896-2.003,2.003s0.897,2.003,2.003,2.003';
echo 'c1.106,0,2.003-0.896,2.003-2.003S9.118,13.991,8.012,13.991z M5,2V1c0-0.552-0.447-1-1-1H1C0.447,0,0,0.448,0,1v1';
echo 'c0,0.553,0.447,1,1,1h2.182L5,13h15l2-11H5z M18.331,11H6.669L5.396,4h14.207L18.331,11z"/>';
echo '</g>';
echo '</g>';
echo '<rect x="3.734" fill-rule="evenodd" clip-rule="evenodd" width="1.266" height="3"/>';
echo '</symbol>';
echo '</svg>';
echo '<!-- /SVG CART -->';
echo '';
echo '<!-- SVG STAR -->';
echo '<svg style="display: none;">';
echo '<symbol id="svg-star" viewBox="0 0 15 14" preserveAspectRatio="xMinYMin meet">';
echo '<path fill-rule="evenodd" clip-rule="evenodd" d="M7.5-0.002l2.473,4.399L15,5.345l-3.5,3.667l0.636,4.985';
echo 'L7.5,11.863l-4.635,2.134L3.5,9.012L0,5.345l5.028-0.948L7.5-0.002"/>';
echo '</symbol>';
echo '</svg>';
echo '<!-- /SVG STAR -->';
echo '';
echo '<!-- SVG BURGER -->';
echo '<svg style="display: none;">';
echo '<symbol id="svg-burger" viewBox="0 0 22 14" preserveAspectRatio="xMinYMin meet">';
echo '<g>';
echo '<g>';
echo '<path fill-rule="evenodd" clip-rule="evenodd" d="M1,2h20c0.553,0,1-0.448,1-1s-0.447-1-1-1H1C0.448,0,0,0.448,0,1';
echo 'S0.448,2,1,2z M21,6H1C0.448,6,0,6.448,0,7c0,0.553,0.448,1,1,1h20c0.553,0,1-0.447,1-1C22,6.448,21.553,6,21,6z M21,12H1';
echo 'c-0.552,0-1,0.447-1,1s0.448,1,1,1h20c0.553,0,1-0.447,1-1S21.553,12,21,12z"/>';
echo '</g>';
echo '</g>';
echo '</symbol>';
echo '</svg>';
echo '<!-- /SVG BURGER -->';
echo '<!-- /SVG ICONS -->';
echo '';
?>
<!-- jQuery -->
<script src="js/vendor/jquery-3.1.0.min.js"></script>
<!-- magnificPopup -->
<script src="js/vendor/jquery.magnific-popup.min.js"></script>
<!-- imgLiquid -->
<script src="js/vendor/imgLiquid-min.js"></script>
<!-- liquid -->
<script src="js/liquid.js"></script>
<!-- dropdowns -->
<script src="js/dropdowns.js"></script>
<!-- popups -->
<script src="js/popups.js"></script>
<!-- counter -->
<script src="js/counter.js"></script>
</body>
</html>
