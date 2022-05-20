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
 <?php
  echo '<title>PC WORLDZ | Billing</title>';
  ?>
</head>
<body>

  <!-- FORM POPUP -->
  <div id="login-popup" class="form-popup medium mfp-hide">
    <?php
    echo '<!-- CLOSE BTN -->';
    echo '<svg class="svg-cross medium close-btn">';
    echo '<use xlink:href="#svg-cross"></use>';
    echo '</svg>';
    echo '<!-- /CLOSE BTN -->';
    echo '';
    ?>
    <!-- FORM POPUP COLUMN -->
    <div class="form-popup-column small">
      <?php
      echo '<h2 class="subsection-title medium">Register now!</h2>';
      echo '<hr class="line-separator">';
      echo '<p class="small">Fill all the requirements on the space provided.</p>';
      echo '<!-- FORM -->';
      echo '<form>';
      ?>
        <!-- FORM ROW -->
        <div class="form-row">
          <?php
          echo '<label for="email" class="rl-label">Email</label>';
          echo '<input type="text" id="email" name="email" placeholder="Enter your email...">';
          ?>
        </div>
        <!-- /FORM ROW -->

        <!-- FORM ROW -->
        <div class="form-row">
          <?php
          echo '<label for="password" class="rl-label">Password</label>';
          echo '<input type="password" id="password" name="password" placeholder="Enter your password...">';
          ?>
        </div>
        <!-- /FORM ROW -->

        <!-- FORM ROW -->
        <div class="form-row separated">
         <?php
        echo '<button class="button dark full">Register to PC WORLDZ!</button>';
        ?>
        </div>
        <!-- /FORM ROW -->
      </form>
      <!-- /FORM -->
    </div>
    <!-- /FORM POPUP COLUMN -->

    <!-- FORM POPUP COLUMN SEPARATOR -->
    <div class="form-popup-column-separator"></div>
    <!-- /FORM POPUP COLUMN SEPARATOR -->

    <!-- FORM POPUP COLUMN -->
    <div class="form-popup-column small">
      <?php
      echo '<h2 class="subsection-title medium">Login to PC WORLDZ</h2>';
      echo '<hr class="line-separator">';
      echo '<!-- FORM -->';
      echo '<form>';
      ?>
        <!-- FORM ROW -->
        <div class="form-row">
          <?php
          echo '<label for="username" class="rl-label">Username</label>';
          echo '<input type="text" id="username" name="username" placeholder="Enter your username...">';
          ?>
        </div>
        <!-- /FORM ROW -->

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
          <?php
          echo '<button class="button full">Login to your Account</button>';
          ?>
        </div>
        <!-- /FORM ROW -->

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
      <?php
      echo '<!-- ACTIONS LIST -->';
      echo '<ul class="actions-list left">';
      echo '<!-- ACTIONS LIST ITEM -->';
      echo '<li class="actions-list-item">';
      echo '<!-- SOCIAL LINK -->';
      ?>
          <div class="social-link">
            <?php
            echo '<a href="#">';
            echo '<i class="fa fa-facebook"></i>';
            echo '</a>';
            ?>
          </div>
            <?php
            echo '<!-- /SOCIAL LINK -->';
            echo '</li>';
            echo '<!-- ACTIONS LIST ITEM -->';
            echo '';
            echo '<!-- ACTIONS LIST ITEM -->';
            echo '<li class="actions-list-item">';
            echo '<!-- SOCIAL LINK -->';
            ?>
          <div class="social-link">
            <?php
            echo '<a href="#">';
            echo '<i class="fa fa-twitter"></i>';
            echo '</a>';
            ?>
          </div>
            <?php
            echo '<!-- /SOCIAL LINK -->';
            echo '</li>';
            echo '<!-- ACTIONS LIST ITEM -->';
            echo '';
            echo '<!-- ACTIONS LIST ITEM -->';
            echo '<li class="actions-list-item">';
            echo '<!-- SOCIAL LINK -->';
            ?>
          <div class="social-link">
            <?php
            echo '<a href="#">';
            echo '<i class="fa fa-google-plus"></i>';
            echo '</a>';
            ?>
          </div>
            <?php
            echo '<!-- /SOCIAL LINK -->';
            echo '</li>';
            echo '<!-- ACTIONS LIST ITEM -->';
            echo '';
            echo '<!-- ACTIONS LIST ITEM -->';
            echo '<li class="actions-list-item">';
            echo '<!-- SOCIAL LINK -->';
            ?>
          <div class="social-link">
            <?php
            echo '<a href="#">';
            echo '<i class="fa fa-rss"></i>';
            echo '</a>';
            ?>
          </div>
            <?php
            echo '<!-- /SOCIAL LINK -->';
            echo '</li>';
            echo '<!-- ACTIONS LIST ITEM -->';
            echo '';
            echo '<!-- ACTIONS LIST ITEM -->';
            echo '<li class="actions-list-item">';
            echo '<!-- SOCIAL LINK -->';
            ?>
          <div class="social-link">
            <?php
            echo '<a href="#">';
            echo '<i class="fa fa-vimeo"></i>';
            echo '</a>';
            ?>
          </div>
              <?php
              echo '<!-- /SOCIAL LINK -->';
              echo '</li>';
              echo '<!-- ACTIONS LIST ITEM -->';
              echo '</ul>';
              echo '<!-- ACTIONS LIST -->';
              echo '';
              echo '<!-- ACTIONS LIST -->';
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
              ?>
            <div class="search-submit">
              <?php
              echo '<!-- SVG MAG GLASS -->';
              echo '<svg class="svg-mag-glass">';
              echo '<use xlink:href="#svg-mag-glass"></use>';
              echo '</svg>';
              echo '<!-- /SVG MAG GLASS -->';
              ?>
            </div>
            <!-- /SEARCH SUBMIT -->

            <!-- SEARCH CANCEL -->
            <div class="search-cancel hidden">
              <?php
              echo '<!-- SVG CROSS -->';
              echo '<svg class="svg-cross">';
              echo '<use xlink:href="#svg-cross"></use>';
              echo '</svg>';
              echo '<!-- /SVG CROSS -->';
              ?>
            </div>
              <?php
              echo '<!-- /SEARCH CANCEL -->';
              echo '</form>';
              echo '<!-- /SEARCH FORM -->';
              echo '</li>';
              echo '<!-- ACTIONS LIST ITEM -->';
              echo '</ul>';
              echo '<!-- ACTIONS LIST -->';
              ?>
    </div>
    <!-- WIDGET LINE -->
  </div>
  <!-- WIDGET LINE WRAP -->

  <!-- WIDGET LINE WRAP -->
  <div class="widget-line-wrap widget-line-2">
    <!-- WIDGET LINE -->
    <div class="widget-line">
      <?php
      echo '<!-- ACTIONS LIST -->';
      echo '<ul class="actions-list">';
      echo '<!-- ACTIONS LIST ITEM -->';
      echo '<li class="actions-list-item full void">';
      echo '<!-- SEARCH FORM -->';
      echo '<form class="search-form">';
      echo '<input type="text" name="search" autocomplete="off" placeholder="Search products here...">';
      echo '<!-- SEARCH SUBMIT -->';
      ?>
            <div class="search-submit">
              <?php
              echo '<!-- SVG MAG GLASS -->';
              echo '<svg class="svg-mag-glass">';
              echo '<use xlink:href="#svg-mag-glass"></use>';
              echo '</svg>';
              echo '<!-- /SVG MAG GLASS -->';
              ?>
            </div>
            <!-- /SEARCH SUBMIT -->

            <!-- SEARCH CANCEL -->
            <div class="search-cancel hidden">
              <?php
              echo '<!-- SVG CROSS -->';
              echo '<svg class="svg-cross">';
              echo '<use xlink:href="#svg-cross"></use>';
              echo '</svg>';
              echo '<!-- /SVG CROSS -->';
              ?>
            </div>
              <?php
              echo '<!-- /SEARCH CANCEL -->';
              echo '</form>';
              echo '<!-- /SEARCH FORM -->';
              echo '</li>';
              echo '<!-- ACTIONS LIST ITEM -->';
              echo '</ul>';
              echo '<!-- ACTIONS LIST -->';
              ?>
    </div>
    <!-- WIDGET LINE -->
  </div>
  <!-- WIDGET LINE WRAP -->

  <!-- NAVIGATION WRAP -->
  <div class="navigation-wrap">
    <?php
    echo '<!-- NAVIGATION -->';
    echo '<nav class="navigation">';
    echo '<!-- LOGO -->';
    echo '<figure class="logo">';
    echo '<img src="img/logo.png" alt="logo">';
    echo '<figcaption>PC WORLDZ</figcaption>';
    echo '</figure>';
    echo '<!-- /LOGO -->';
    ?>
      <!-- CART DROPDOWN WRAP -->
      <div class="cart-dropdown-wrap">
        <!-- CART DROPDOWN CONTROL -->
        <div class="cart-dropdown-control">
          <?php
          echo '<!-- SVG CART -->';
          echo '<svg class="svg-cart">';
          echo '<use xlink:href="#svg-cart"></use>';
          echo '</svg>';
          echo '<!-- /SVG CART -->';
          echo '';
          echo '<!-- SVG CROSS -->';
          echo '<svg class="svg-cross medium hidden">';
          echo '<use xlink:href="#svg-cross"></use>';
          echo '</svg>';
          echo '<!-- /SVG CROSS -->';
          ?>

          <!-- CART ITEM QUANTITY -->
          <div class="cart-item-quantity">
           <?php
            echo '<p>3</p>';
            ?>
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
              <?php
              echo '<!-- PRODUCT IMG -->';
              echo '<a href="product-page-v1.php">';
              echo '<figure class="product-img small">';
              echo '<img src="img/products/01.png" alt="02">';
              echo '</figure>';
              echo '</a>';
              echo '<!-- /PRODUCT IMG -->';
              ?>

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
                ?>
              </div>
              <!-- /CART DROPDOWN ITEM INFO -->

              <?php
              echo '<!-- SVG CROSS -->';
              echo '<svg class="svg-cross medium">';
              echo '<use xlink:href="#svg-cross"></use>';
              echo '</svg>';
              echo '<!-- /SVG CROSS -->';
              ?>
            </div>
            <!-- /CART DROPDOWN ITEM -->

            <!-- CART DROPDOWN ITEM -->
            <div class="cart-dropdown-item">
              <?php
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
                ?>
              </div>
              <!-- /CART DROPDOWN ITEM INFO -->

              <?php
              echo '<!-- SVG CROSS -->';
              echo '<svg class="svg-cross medium">';
              echo '<use xlink:href="#svg-cross"></use>';
              echo '</svg>';
              echo '<!-- /SVG CROSS -->';
              ?>
            </div>
            <!-- /CART DROPDOWN ITEM -->

            <!-- CART DROPDOWN ITEM -->
            <div class="cart-dropdown-item">
              <?php
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
                  ?>
                <p class="product-price"> <br><br>             
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
              echo '<!-- /SVG CROSS -->';
              ?>
            </div>
            <!-- /CART DROPDOWN ITEM -->
          </div>
          <!-- CART DROPDOWN ITEMS -->

          <!-- CART DROPDOWN SUBTOTAL -->
          <div class="cart-dropdown-subtotal">
            <?php
            echo '<p class="title small">Cart Subtotal</p>';
            echo '<p class="product-price">₱303,827</p>';
            ?>
          </div>
          <!-- /CART DROPDOWN SUBTOTAL -->

          <!-- CART DROPDOWN ACTIONS -->
          <div class="cart-dropdown-actions">
            <?php
            echo '<a href="cart.php" class="button dark large">Go to the Cart</a>';
            echo '<a href="identification.php" class="button large">Go to Checkout</a>';
            ?>
          </div>
          <!-- /CART DROPDOWN ACTIONS -->
        </div>
        <!-- /CART DROPDOWN -->
      </div>
      <!-- /CART DROPDOWN WRAP -->

            <?php
            echo '<!-- MAIN MENU -->';
            echo '<ul class="main-menu">';
            echo '<!-- MAIN MENU ITEM -->';
            echo '<li class="main-menu-item">';
            echo '<a href="home.php">Home</a>';
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
            ?>

          <!-- CONTENT DROPDOWN -->
          <div class="content-dropdown with-bg">
            <!-- CONTENT DROPDOWN COLUMN -->
            <div class="content-dropdown-column">           
              <?php
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
              echo '<!-- /LINK LIST -->';
              ?>  
            </div>
            <!-- /CONTENT DROPDOWN COLUMN -->
          </div>
            <?php
            echo '<!-- /CONTENT DROPDOWN -->';
            echo '</li>';
            echo '<!-- /MAIN MENU ITEM -->';
            echo '<!-- MAIN MENU ITEM -->';
            echo '<li class="main-menu-item">';
            echo '<a href="contactus.php">Contact</a>';
            echo '</li>';
            echo '<!-- /MAIN MENU ITEM -->';
            echo '</ul>';
            echo '<!-- /MAIN MENU -->';
            echo '</nav>';
            echo '<!-- /NAVIGATION -->';
            ?>
  </div>
  <!-- /NAVIGATION WRAP -->

  <!-- MOBILE MENU WRAP -->
  <div class="mobile-menu-wrap">
    <!-- MOBILE MENU CONTROL -->
    <div class="mobile-menu-control dropdown-control">
      <?php
      echo '<!-- SVG BURGER -->';
      echo '<svg class="svg-burger">';
      echo '<use xlink:href="#svg-burger"></use>';
      echo '</svg>';
      echo '<!-- /SVG BURGER -->';
      ?>
    </div>
    <!-- /MOBILE MENU CONTROL -->

      <?php
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
      echo '</a>';
      echo '';
      echo '<!-- MOBILE MENU DROPDOWN -->';
      echo '<ul class="mobile-menu-dropdown dropdown">';
      echo '<!-- MOBILE MENU DROPDOWN ITEM -->';
      echo '<li class="mobile-menu-dropdown-item">';
      echo '<a href="shop-list2.php">Motherboards</a>';
      echo '</li>';
      echo '<li class="mobile-menu-dropdown-item">';
      echo '<a href="shop-list2.php">Processors</a>';
      echo '</li>';
      echo '<li class="mobile-menu-dropdown-item">';
      echo '<a href="shop-list2.php">Graphic Cards</a>';
      echo '</li>';
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
      echo '<!-- MOBILE MENU DROPDOWN ITEM -->';
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
      ?>
  </div>
  <!-- /MOBILE MENU WRAP -->

  <!-- SECTION NAVIGATION WRAP -->
  <div class="section-navigation-wrap">
    <!-- SECTION NAVIGATION -->
    <div class="section-navigation">
      <?php
      echo '<!-- SECTION NAVIGATION PATH -->';
      echo '<p class="section-navigation-path">';
      echo '<span class="path">Home</span>';
      echo '<span class="path">';
      echo '<!-- SVG ARROW -->';
      echo '<svg class="svg-arrow tiny">';
      echo '<use xlink:href="#svg-arrow"></use>';
      echo '</svg>';
      echo '<!-- /SVG ARROW -->';
      echo '</span>';
      echo '<span class="path">Shop</span>';
      echo '<span class="path bold">';
      echo '<!-- SVG ARROW -->';
      echo '<svg class="svg-arrow tiny">';
      echo '<use xlink:href="#svg-arrow"></use>';
      echo '</svg>';
      echo '<!-- /SVG ARROW -->';
      echo '</span>';
      echo '<span class="path current">Checkout</span>';
      echo '</p>';
      echo '<!-- SECTION NAVIGATION PATH -->';
      ?>
    </div>
    <!-- /SECTION NAVIGATION -->
  </div>
  <!-- /SECTION NAVIGATION WRAP -->

  <!-- SECTION WRAP -->
  <div class="section-wrap">
    <!-- SECTION -->
    <div class="section top-short bottom-void">
      <!-- STEPS HEADER -->
      <div class="steps-header">
        <!-- STEPS HEADER ITEM -->
        <div class="steps-header-item complete">
          <!-- STEP NUMBER -->
          <div class="step-number">
           <?php
          echo '<p>01.</p>';
          ?>
          </div>
          <!-- /STEP NUMBER -->
          <?php
          echo '<h6 class="title tiny">Identification</h6>';
          ?>
        </div>
        <!-- STEPS HEADER ITEM -->

        <!-- STEPS HEADER ITEM -->
        <div class="steps-header-item current">
          <!-- STEP NUMBER -->
          <div class="step-number">
         <?php
        echo '<p>02.</p>';
        ?>
          </div>
          <?php
          echo '<!-- /STEP NUMBER -->';
          echo '<h6 class="title tiny">Billing &amp; Shipping</h6>';
          ?>
        </div>
        <!-- STEPS HEADER ITEM -->

        <!-- STEPS HEADER ITEM -->
        <div class="steps-header-item">
          <!-- STEP NUMBER -->
          <div class="step-number">
            <?php
            echo '<p>03.</p>';
            ?>
          </div>
            <?php
            echo '<!-- /STEP NUMBER -->';
            echo '<h6 class="title tiny">Confirmation</h6>';
            ?>
        </div>
        <!-- STEPS HEADER ITEM -->
      </div>
      <!-- STEPS HEADER -->

      <!-- COLUMN FULL 2 WRAP -->
      <div class="column-full-2-wrap">
        <!-- COLUMN -->
        <div class="column top-checkbox">
          <?php
          echo '<h2 class="subsection-title">Billing Details</h2>';
          echo '<hr class="line-separator">';
          echo '<!-- FORM -->';
          echo '<form>';
          echo '<!-- FORM ROW -->';
          ?>
            <div class="form-row">
              <div class="half">
                <?php
                echo '<label for="fname" class="rl-label required">First Name</label>';
                echo '<input type="text" name="fname" id="fname" placeholder="Enter your first name...">';
                ?>
              </div>

              <div class="half">
                <?php
                echo '<label for="lname" class="rl-label required">Last Name</label>';
                echo '<input type="text" name="lname" id="lname" placeholder="Enter your last name...">';
                ?>
              </div>
            </div>
            <!-- /FORM ROW -->

            <!-- FORM ROW -->
            <div class="form-row">
              <div class="half">
                <?php
                echo '<label for="bd_email" class="rl-label required">Email</label>';
                echo '<input type="text" name="bd_email" id="bd_email" placeholder="Enter your email...">';
                ?>
              </div>

              <div class="half">
                <?php
                echo '<label for="cname" class="rl-label">Company Name</label>';
                echo '<input type="text" name="cname" id="cname" placeholder="Enter your company name...">';
                ?>
              </div>
            </div>
            <!-- /FORM ROW -->

            <!-- FORM ROW -->
            <div class="form-row">
              <?php
              echo '<label for="staddress" class="rl-label required">Address</label>';
              echo '<input type="text" name="staddress" id="staddress" placeholder="Enter your street address...">';
              echo '<input type="text" name="apart" id="apart" placeholder="Enter the apartment, floor, suite, etc...">';
              ?>
            </div>
            <!-- /FORM ROW -->

            <!-- FORM ROW -->
            <div class="form-row">
              <?php
              echo '<label class="rl-label required">Country</label>';
              echo '<!-- SELECT BLOCK -->';
              echo '<label for="bd_country" class="select-block medium">';
              echo '<select name="bd_country" id="bd_country">';
              echo '<option value="0">Select your country...</option>';
              echo '<option value="1">United States (USA)</option>';
              echo '<option value="2">Germany (GER)</option>';
              echo '</select>';
              echo '<!-- SVG ARROW -->';
              echo '<svg class="svg-arrow face-down">';
              echo '<use xlink:href="#svg-arrow"></use>';
              echo '</svg>';
              echo '<!-- /SVG ARROW -->';
              echo '</label>';
              echo '<!-- SELECT BLOCK -->';
              ?>
            </div>
            <!-- /FORM ROW -->
<?php
echo '';
echo '<!-- FORM ROW -->';
echo '<div class="form-row">';
echo '<div class="half">';
echo '<label class="rl-label required">State</label>';
echo '<!-- SELECT BLOCK -->';
echo '<label for="bd_state" class="select-block medium">';
echo '<select name="bd_state" id="bd_state">';
echo '<option value="0">Select your state...</option>';
echo '<option value="1">New York</option>';
echo '</select>';
echo '<!-- SVG ARROW -->';
echo '<svg class="svg-arrow face-down">';
echo '<use xlink:href="#svg-arrow"></use>';
echo '</svg>';
echo '<!-- /SVG ARROW -->';
echo '</label>';
echo '<!-- SELECT BLOCK -->';
echo '</div>';
echo '';
echo '<div class="half">';
echo '<label for="bd_zipcode" class="rl-label required">Zip Code</label>';
echo '<input type="text" name="bd_zipcode" id="bd_zipcode" placeholder="Enter your ZIP or postal code...">';
echo '</div>';
echo '</div>';
echo '<!-- /FORM ROW -->';
echo '';
echo '<!-- FORM ROW -->';
echo '<div class="form-row">';
echo '<label for="bd_addnotes" class="rl-label">Additional Notes</label>';
echo '<textarea name="bd_addnotes" id="bd_addnotes" placeholder="Enter here any additional notes..."></textarea>';
echo '</div>';
echo '<!-- /FORM ROW -->';
echo '</form>';
echo '<!-- /FORM -->';
echo '';
echo '<!-- CHECKBOX -->';
echo '<input type="checkbox" id="shiptosame" name="shiptosame" checked>';
echo '<label class="checkbox" for="shiptosame">';
echo '<span class="box">';
echo '<!-- SVG CHECK -->';
echo '<svg class="svg-check">';
echo '<use xlink:href="#svg-check"></use>';
echo '</svg>';
echo '<!-- /SVG CHECK -->';
echo '</span>';
echo 'Ship to the same address';
echo '</label>';
echo '<!-- /CHECKBOX -->';
echo '</div>';
echo '<!-- /COLUMN -->';
echo '';
echo '<!-- COLUMN -->';
echo '<div class="column">';
echo '<h2 class="subsection-title">Shipping Details</h2>';
echo '<hr class="line-separator">';
echo '<!-- FORM -->';
echo '<form>';
echo '<!-- FORM ROW -->';
echo '<div class="form-row">';
echo '<div class="half">';
echo '<label for="fname2" class="rl-label required">First Name</label>';
echo '<input type="text" name="fname2" id="fname2" placeholder="Enter your first name...">';
echo '</div>';
echo '';
echo '<div class="half">';
echo '<label for="lname2" class="rl-label required">Last Name</label>';
echo '<input type="text" name="lname2" id="lname2" placeholder="Enter your last name...">';
echo '</div>';
echo '</div>';
echo '<!-- /FORM ROW -->';
echo '';
echo '<!-- FORM ROW -->';
echo '<div class="form-row">';
echo '<div class="half">';
echo '<label for="bd_email2" class="rl-label required">Email</label>';
echo '<input type="text" name="bd_email2" id="bd_email2" placeholder="Enter your email...">';
echo '</div>';
echo '';
echo '<div class="half">';
echo '<label for="cname2" class="rl-label">Company Name</label>';
echo '<input type="text" name="cname2" id="cname2" placeholder="Enter your company name...">';
echo '</div>';
echo '</div>';
echo '<!-- /FORM ROW -->';
echo '';
echo '<!-- FORM ROW -->';
echo '<div class="form-row">';
echo '<label for="staddress2" class="rl-label required">Address</label>';
echo '<input type="text" name="staddress2" id="staddress2" placeholder="Enter your street address...">';
echo '<input type="text" name="apart2" id="apart2" placeholder="Enter the apartment, floor, suite, etc...">';
echo '</div>';
echo '<!-- /FORM ROW -->';
echo '';
echo '<!-- FORM ROW -->';
echo '<div class="form-row">';
echo '<label class="rl-label required">Country</label>';
echo '<!-- SELECT BLOCK -->';
echo '<label for="bd_country2" class="select-block medium">';
echo '<select name="bd_country2" id="bd_country2">';
echo '<option value="0">Select your country...</option>';
echo '<option value="1">United States (USA)</option>';
echo '<option value="2">Germany (GER)</option>';
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
echo '<div class="half">';
echo '<label class="rl-label required">State</label>';
echo '<!-- SELECT BLOCK -->';
echo '<label for="bd_state2" class="select-block medium">';
echo '<select name="bd_state2" id="bd_state2">';
echo '<option value="0">Select your state...</option>';
echo '<option value="1">New York</option>';
echo '</select>';
echo '<!-- SVG ARROW -->';
echo '<svg class="svg-arrow face-down">';
echo '<use xlink:href="#svg-arrow"></use>';
echo '</svg>';
echo '<!-- /SVG ARROW -->';
echo '</label>';
echo '<!-- SELECT BLOCK -->';
echo '</div>';
echo '';
echo '<div class="half">';
echo '<label for="bd_zipcode2" class="rl-label required">Zip Code</label>';
echo '<input type="text" name="bd_zipcode2" id="bd_zipcode2" placeholder="Enter your ZIP or postal code...">';
echo '</div>';
echo '</div>';
echo '<!-- /FORM ROW -->';
echo '';
echo '<!-- FORM ROW -->';
echo '<div class="form-row">';
echo '<label for="bd_addnotes2" class="rl-label">Additional Notes</label>';
echo '<textarea name="bd_addnotes2" id="bd_addnotes2" placeholder="Enter here any additional notes..."></textarea>';
echo '</div>';
echo '<!-- /FORM ROW -->';
echo '</form>';
echo '<!-- /FORM -->';
echo '</div>';
echo '<!-- /COLUMN -->';
echo '</div>';
echo '<!-- /COLUMN FULL 2 WRAP -->';
echo '</div>';
echo '<!-- /SECTION -->';
echo '</div>';
echo '<!-- /SECTION WRAP -->';
echo '';
echo '<!-- SECTION WRAP -->';
echo '<div class="section-wrap">';
echo '<!-- SECTION -->';
echo '<div class="section void">';
echo '<h2 class="subsection-title">Cart Review</h2>';
echo '<hr class="line-separator">';
echo '<!-- PRODUCT TABLE -->';
echo '<div class="product-table v2">';
echo '<!-- PRODUCT TABLE HEADER -->';
echo '<div class="product-table-header">';
echo '<!-- PRODUCT TABLE NAME -->';
echo '<div class="product-table-name">';
echo '<h6 class="title">Product Name</h6>';
echo '</div>';
echo '<!-- /PRODUCT TABLE NAME -->';
echo '';
echo '<!-- PRODUCT TABLE DESCRIPTION -->';
echo '<div class="product-table-description long">';
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
echo '<!-- PRODUCT TABLE NAME -->';
echo '<div class="product-table-name">';
echo '<a href="product-page-v1.html">';
?>
              <h6 class="title small"><?php
              $item = simplexml_load_file('data/Saludo-Peralta-Aquino_IT2F_PcWorldz.xml');
              echo $item->product[0]->name;
              ?></h6>
            </a>
            <p class="product-description small">Gaming</p>
            <!-- RATING -->
            <ul class="rating small">
              <!-- RATING ITEM -->
              <li class="rating-item filled">
                <!-- SVG STAR -->
                <svg class="svg-star">
                  <use xlink:href="#svg-star"></use>
                </svg>
                <!-- /SVG STAR -->
              </li>
              <!-- /RATING ITEM -->

              <!-- RATING ITEM -->
              <li class="rating-item filled">
                <!-- SVG STAR -->
                <svg class="svg-star">
                  <use xlink:href="#svg-star"></use>
                </svg>
                <!-- /SVG STAR -->
              </li>
              <!-- /RATING ITEM -->

              <!-- RATING ITEM -->
              <li class="rating-item filled">
                <!-- SVG STAR -->
                <svg class="svg-star">
                  <use xlink:href="#svg-star"></use>
                </svg>
                <!-- /SVG STAR -->
              </li>
              <!-- /RATING ITEM -->

              <!-- RATING ITEM -->
              <li class="rating-item filled">
                <!-- SVG STAR -->
                <svg class="svg-star">
                  <use xlink:href="#svg-star"></use>
                </svg>
                <!-- /SVG STAR -->
              </li>
              <!-- /RATING ITEM -->

              <!-- RATING ITEM -->
              <li class="rating-item">
                <!-- SVG STAR -->
                <svg class="svg-star">
                  <use xlink:href="#svg-star"></use>
                </svg>
                <!-- /SVG STAR -->
              </li>
              <!-- /RATING ITEM -->
            </ul>
            <!-- /RATING -->
          </div>
          <!-- /PRODUCT TABLE NAME -->

          <!-- PRODUCT TABLE DESCRIPTION -->
          <div class="product-table-description long">
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
<?php
echo '</div>';
echo '<!-- /PRODUCT TABLE PRICE -->';
echo '';
echo '<!-- PRODUCT TABLE QUANTITY -->';
echo '<div class="product-table-quantity numerical">';
echo '<h6 class="title small"><span class="times">x</span>4</h6>';
echo '</div>';
echo '<!-- /PRODUCT TABLE QUANTITY -->';
echo '';
echo '<!-- PRODUCT TABLE TOTAL -->';
echo '<div class="product-table-total">';
echo '<h6 class="product-price">₱233,848</h6>';
echo '</div>';
echo '<!-- /PRODUCT TABLE TOTAL -->';
echo '</div>';
echo '<!-- /PRODUCT TABLE ROW -->';
echo '';
echo '<!-- PRODUCT TABLE ROW -->';
echo '<div class="product-table-row">';
echo '<!-- PRODUCT TABLE NAME -->';
echo '<div class="product-table-name">';
echo '<a href="product-page-v1.html">';
?>
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
echo '</div>';
echo '<!-- /PRODUCT TABLE NAME -->';
?>

          <!-- PRODUCT TABLE DESCRIPTION -->
          <div class="product-table-description long">
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

<?php
echo '<!-- PRODUCT TABLE QUANTITY -->';
echo '<div class="product-table-quantity numerical">';
echo '<h6 class="title small"><span class="times">x</span>2</h6>';
echo '</div>';
echo '<!-- /PRODUCT TABLE QUANTITY -->';
echo '';
echo '<!-- PRODUCT TABLE TOTAL -->';
echo '<div class="product-table-total">';
echo '<h6 class="product-price">₱57,032</h6>';
echo '</div>';
echo '<!-- /PRODUCT TABLE TOTAL -->';
echo '</div>';
echo '<!-- /PRODUCT TABLE ROW -->';
echo '';
echo '<!-- PRODUCT TABLE ROW -->';
echo '<div class="product-table-row">';
echo '<!-- PRODUCT TABLE NAME -->';
echo '<div class="product-table-name">';
?>
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
echo '<!-- /RATING -->';
echo '</div>';
echo '<!-- /PRODUCT TABLE NAME -->';
?>

          <!-- PRODUCT TABLE DESCRIPTION -->
          <div class="product-table-description long">
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

<?php
echo '<!-- PRODUCT TABLE QUANTITY -->';
echo '<div class="product-table-quantity numerical">';
echo '<h6 class="title small"><span class="times">x</span>1</h6>';
echo '</div>';
echo '<!-- /PRODUCT TABLE QUANTITY -->';
?>

          <!-- PRODUCT TABLE TOTAL -->
          <div class="product-table-total">
            <h6 class="product-price"><?php
              $item = simplexml_load_file('data/Saludo-Peralta-Aquino_IT2F_PcWorldz.xml');
              echo $item->product[2]->price;
              ?></h6>
          </div>
<?php
echo '<!-- /PRODUCT TABLE TOTAL -->';
echo '</div>';
echo '<!-- /PRODUCT TABLE ROW -->';
echo '</div>';
echo '<!-- /PRODUCT TABLE -->';
echo '</div>';
echo '<!-- /SECTION -->';
echo '</div>';
echo '<!-- /SECTION WRAP -->';
echo '';
echo '<!-- SECTION WRAP -->';
echo '<div class="section-wrap">';
echo '<!-- SECTION -->';
echo '<div class="section no-title">';
echo '<!-- COLUMN FULL 2 WRAP -->';
echo '<div class="column-full-2-wrap">';
echo '<!-- COLUMN -->';
echo '<div class="column">';
echo '<h2 class="subsection-title">Payment Method</h2>';
echo '<hr class="line-separator">';
echo '<!-- FORM -->';
echo '<form id="checkout_form" class="top-short">';
echo '<!-- FORM ONELINE -->';
echo '<div class="form-oneline">';
echo '<!-- RADIO -->';
echo '<input type="radio" id="direct_bank_transfer" name="payment_method" value="dbt" checked>';
echo '<label class="radio radio-link rl-label" for="direct_bank_transfer">';
echo '<span class="circle"><span class="inner-circle"></span></span>';
echo 'Direct Bank Transfer';
echo '</label>';
echo '<!-- /RADIO -->';
echo '<p>Make your payment directly into our bank account. Please use your order ID as the payment reference. You product won’t be shipped untill payment confirmation.</p>';
echo '</div>';
echo '<!-- /FORM ONELINE -->';
echo '';
echo '<!-- FORM ONELINE -->';
echo '<div class="form-oneline">';
echo '<!-- RADIO -->';
echo '<input type="radio" id="credit_card" name="payment_method" value="cc">';
echo '<label class="radio radio-link rl-label" for="credit_card">';
echo '<span class="circle"><span class="inner-circle"></span></span>';
echo 'Credit Card';
echo '</label>';
echo '<!-- /RADIO -->';
echo '<p>Make your payment with your credit card. Please use your order ID as the payment reference. You product won’t be shipped untill payment confirmation.</p>';
echo '<!-- IMG LIST -->';
echo '<ul class="img-list">';
echo '<!-- IMG LIST ITEM -->';
echo '<li class="img-list-item card-01"></li>';
echo '<!-- IMG LIST ITEM -->';
echo '';
echo '<!-- IMG LIST ITEM -->';
echo '<li class="img-list-item card-02"></li>';
echo '<!-- IMG LIST ITEM -->';
echo '';
echo '<!-- IMG LIST ITEM -->';
echo '<li class="img-list-item card-03"></li>';
echo '<!-- IMG LIST ITEM -->';
echo '';
echo '<!-- IMG LIST ITEM -->';
echo '<li class="img-list-item card-04"></li>';
echo '<!-- IMG LIST ITEM -->';
echo '</ul>';
echo '<!-- /IMG LIST -->';
echo '</div>';
echo '<!-- /FORM ONELINE -->';
echo '';
echo '<!-- FORM ONELINE -->';
echo '<div class="form-oneline">';
echo '<!-- RADIO -->';
echo '<input type="radio" id="e_payment" name="payment_method" value="ep">';
echo '<label class="radio radio-link rl-label" for="e_payment">';
echo '<span class="circle"><span class="inner-circle"></span></span>';
echo 'Via E_Payment';
echo '</label>';
echo '<!-- /RADIO -->';
echo '<p>Make your payment with E_Payment. Please use your order ID as the payment reference. You product won’t be shipped untill payment confirmation.</p>';
echo '<!-- IMG LIST -->';
echo '<ul class="img-list">';
echo '<!-- IMG LIST ITEM -->';
echo '<li class="img-list-item card-05"></li>';
echo '<!-- IMG LIST ITEM -->';
echo '</ul>';
echo '<!-- /IMG LIST -->';
echo '</div>';
echo '<!-- /FORM ONELINE -->';
echo '</form>';
echo '<!-- /FORM -->';
echo '</div>';
echo '<!-- /COLUMN -->';
echo '';
echo '<!-- COLUMN -->';
echo '<div class="column">';
echo '<h2 class="subsection-title">Your Order</h2>';
echo '<hr class="line-separator">';
echo '<!-- ONELINE -->';
echo '<p class="oneline">Cart Total<span class="annotation">₱303,827</span></p>';
echo '<!-- /ONELINE -->';
echo '';
echo '<!-- ONELINE -->';
echo '<p class="oneline">Shipping and Handling<span class="annotation">₱100</span></p>';
echo '<!-- /ONELINE -->';
echo '';
echo '<!-- ONELINE -->';
echo '<p class="oneline">Coupon Discount<span class="annotation">-₱100</span></p>';
echo '<!-- /ONELINE -->';
echo '';
echo '<!-- ONELINE -->';
echo '<p class="oneline">Order Total<span class="annotation bold">₱303,827</span></p>';
echo '<!-- /ONELINE -->';
echo '</div>';
echo '<!-- /COLUMN -->';
echo '</div>';
echo '<!-- /COLUMN FULL 2 WRAP -->';
echo '';
echo '<button class="button big centered" form="checkout_form">Place Order Now!</button>';
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
echo '<a href="home.php">';
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
?>

<!-- SVG ICONS -->
  <!-- SVG ARROW -->
  <svg style="display: none;">
  	<symbol id="svg-arrow" viewBox="0 0 3.923 6.64014" preserveAspectRatio="xMinYMin meet">
  		<path d="M3.711,2.92L0.994,0.202c-0.215-0.213-0.562-0.213-0.776,0c-0.215,0.215-0.215,0.562,0,0.777l2.329,2.329
  			L0.217,5.638c-0.215,0.215-0.214,0.562,0,0.776c0.214,0.214,0.562,0.215,0.776,0l2.717-2.718C3.925,3.482,3.925,3.135,3.711,2.92z"/>
  	</symbol>
  </svg>
  <!-- /SVG ARROW -->

  <!-- SVG CHECK -->
  <svg style="display: none;">
    <symbol id="svg-check" viewBox="0 0 20 16" preserveAspectRatio="xMinYMin meet">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M19.692,3.398L7.764,15.669c-0.412,0.424-1.08,0.424-1.491,0
    	L0.308,9.534C-0.104,9.11-0.104,8.423,0.308,8l1.491-1.534c0.412-0.424,1.08-0.424,1.491,0l3.728,3.834L16.71,0.33
    	c0.412-0.423,1.08-0.423,1.491,0l1.491,1.534C20.104,2.288,20.104,2.975,19.692,3.398z"/>
    </symbol>
  </svg>
  <!-- /SVG CHECK -->

  <!-- SVG MAG GLASS -->
  <svg style="display: none;">
    <symbol id="svg-mag-glass" viewBox="0 0 12 12" preserveAspectRatio="xMinYMin meet">
      <path d="M3.094,6.916c-0.275-0.269-0.482-0.573-0.62-0.912C2.336,5.666,2.267,5.32,2.267,4.968
      	c0-0.351,0.069-0.699,0.207-1.041c0.138-0.344,0.345-0.65,0.62-0.92c0.275-0.269,0.587-0.468,0.934-0.599
      	c0.347-0.13,0.702-0.195,1.066-0.195s0.72,0.064,1.067,0.195c0.346,0.131,0.657,0.331,0.933,0.599c0.275,0.27,0.482,0.576,0.62,0.92
      	c0.139,0.342,0.207,0.69,0.207,1.041c0,0.353-0.068,0.698-0.207,1.036c-0.138,0.339-0.345,0.644-0.62,0.912
      	c-0.275,0.27-0.587,0.471-0.933,0.605C5.813,7.657,5.458,7.724,5.094,7.724s-0.72-0.066-1.066-0.202
      	C3.681,7.387,3.369,7.186,3.094,6.916z M1.494,1.443C0.996,1.93,0.622,2.479,0.374,3.092C0.125,3.705,0,4.328,0,4.962
      	s0.125,1.257,0.374,1.87c0.248,0.611,0.622,1.161,1.12,1.648c0.399,0.391,0.844,0.703,1.333,0.938
      	c0.488,0.234,0.995,0.391,1.52,0.469c0.525,0.078,1.052,0.074,1.58-0.013C6.456,9.786,6.961,9.621,7.44,9.379l2.294,2.241
      	c0.133,0.13,0.28,0.226,0.44,0.286c0.159,0.061,0.326,0.091,0.5,0.091c0.173,0,0.34-0.03,0.5-0.091s0.307-0.156,0.439-0.286
      	c0.134-0.13,0.231-0.274,0.293-0.431c0.063-0.156,0.094-0.318,0.094-0.488s-0.031-0.332-0.094-0.488
      	c-0.062-0.157-0.159-0.301-0.293-0.431L9.401,7.619C9.712,7.143,9.93,6.63,10.055,6.082c0.124-0.547,0.157-1.094,0.1-1.641
      	c-0.058-0.547-0.209-1.08-0.453-1.596c-0.245-0.517-0.58-0.983-1.007-1.401C8.196,0.967,7.634,0.605,7.008,0.363
      	C6.381,0.119,5.743-0.003,5.094-0.003S3.808,0.119,3.181,0.363C2.554,0.605,1.991,0.967,1.494,1.443z"/>
    </symbol>
  </svg>
  <!-- /SVG MAG GLASS -->

  <!-- SVG CROSS -->
  <svg style="display: none;">
   <symbol id="svg-cross" viewBox="0 0 10 10" preserveAspectRatio="xMinYMin meet">
      <g>
      	<g>
      		<polygon fill-rule="evenodd" clip-rule="evenodd" points="9.949,1.465 8.535,0.051 5,3.586 1.465,0.051
      			0.051,1.465 3.586,5 0.051,8.535 1.465,9.949 5,6.414 8.535,9.949 9.949,8.535 6.414,5 		"/>
      	</g>
      </g>
    </symbol>
  </svg>
  <!-- /SVG CROSS -->

  <!-- SVG CART -->
  <svg style="display: none;">
   <symbol id="svg-cart" viewBox="0 0 22 18" preserveAspectRatio="xMinYMin meet">
      <g>
      	<g>
      		<path fill-rule="evenodd" clip-rule="evenodd" d="M16.991,13.991c-1.106,0-2.003,0.896-2.003,2.003s0.896,2.003,2.003,2.003
      			s2.003-0.896,2.003-2.003S18.098,13.991,16.991,13.991z M8.012,13.991c-1.105,0-2.003,0.896-2.003,2.003s0.897,2.003,2.003,2.003
      			c1.106,0,2.003-0.896,2.003-2.003S9.118,13.991,8.012,13.991z M5,2V1c0-0.552-0.447-1-1-1H1C0.447,0,0,0.448,0,1v1
      			c0,0.553,0.447,1,1,1h2.182L5,13h15l2-11H5z M18.331,11H6.669L5.396,4h14.207L18.331,11z"/>
      	</g>
      </g>
      <rect x="3.734" fill-rule="evenodd" clip-rule="evenodd" width="1.266" height="3"/>
    </symbol>
  </svg>
  <!-- /SVG CART -->

  <!-- SVG STAR -->
  <svg style="display: none;">
    <symbol id="svg-star" viewBox="0 0 15 14" preserveAspectRatio="xMinYMin meet">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M7.5-0.002l2.473,4.399L15,5.345l-3.5,3.667l0.636,4.985
    	L7.5,11.863l-4.635,2.134L3.5,9.012L0,5.345l5.028-0.948L7.5-0.002"/>
    </symbol>
  </svg>
  <!-- /SVG STAR -->

  <!-- SVG BURGER -->
  <svg style="display: none;">
    <symbol id="svg-burger" viewBox="0 0 22 14" preserveAspectRatio="xMinYMin meet">
      <g>
      	<g>
      		<path fill-rule="evenodd" clip-rule="evenodd" d="M1,2h20c0.553,0,1-0.448,1-1s-0.447-1-1-1H1C0.448,0,0,0.448,0,1
      			S0.448,2,1,2z M21,6H1C0.448,6,0,6.448,0,7c0,0.553,0.448,1,1,1h20c0.553,0,1-0.447,1-1C22,6.448,21.553,6,21,6z M21,12H1
      			c-0.552,0-1,0.447-1,1s0.448,1,1,1h20c0.553,0,1-0.447,1-1S21.553,12,21,12z"/>
      	</g>
      </g>
    </symbol>
  </svg>
  <!-- /SVG BURGER -->
<!-- /SVG ICONS -->

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
<!-- radio link -->
<script src="js/radio-link.js"></script>
</body>
</html>
