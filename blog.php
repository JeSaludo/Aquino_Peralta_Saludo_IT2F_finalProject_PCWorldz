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
  <link rel="icon" href="favicon.ico"><title><?php echo 'PCWORLDZ | Blog';?></title>
</head>
<body>

  <!-- FORM POPUP -->
  <div id="login-popup" class="form-popup medium mfp-hide">
    <!-- CLOSE BTN -->
    <svg class="svg-cross medium close-btn">
      <use xlink:href="#svg-cross"></use>
    </svg>
    <!-- /CLOSE BTN -->

    <!-- FORM POPUP COLUMN -->
    <div class="form-popup-column small">
      <h2 class="subsection-title medium"><?php echo 'Register now!';?></h2>
      <hr class="line-separator">
      <p class="small"><?php echo 'Fill all the requirements on the space provided.';?></p>
      <!-- FORM -->
      <form>
        <!-- FORM ROW -->
        <div class="form-row">
          <label for="email" class="rl-label"><?php echo 'Email';?></label>
          <input type="text" id="email" name="email" placeholder="Enter your email...">
        </div>
        <!-- /FORM ROW -->

        <!-- FORM ROW -->
        <div class="form-row">
          <label for="password" class="rl-label"><?php echo 'Password';?></label>
          <input type="password" id="password" name="password" placeholder="Enter your password...">
        </div>
        <!-- /FORM ROW -->

        <!-- FORM ROW -->
        <div class="form-row separated">
          <button class="button dark full"><?php echo 'Register to PC WORLDZ!';?></button>
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
      <h2 class="subsection-title medium"><?php echo 'Login to PC WORLDZ';?></h2>
      <hr class="line-separator">
      <!-- FORM -->
      <form>
        <!-- FORM ROW -->
        <div class="form-row">
          <label for="username" class="rl-label"><?php echo 'Username';?></label>
          <input type="text" id="username" name="username" placeholder="Enter your username...">
        </div>
        <!-- /FORM ROW -->

        <!-- FORM ROW -->
        <div class="form-row">
          <label for="password2" class="rl-label"><?php echo 'Password';?></label>
          <input type="password" id="password2" name="password2" placeholder="Enter your password...">
        </div>
        <!-- /FORM ROW -->

        <!-- FORM ROW -->
        <div class="form-row">
          <!-- CHECKBOX -->
					<input type="checkbox" id="keep_logged" name="keep_logged" checked>
					<label class="checkbox" for="keep_logged">
						<span class="box">
              <!-- SVG CHECK -->
						  <svg class="svg-check">
						    <use xlink:href="#svg-check"></use>
						  </svg>
              <!-- /SVG CHECK -->
						</span>
						<?php echo 'Keep me logged in';?>
					</label>
					<!-- /CHECKBOX -->

          <a href="#" class="link"><?php echo 'Forgot password?';?></a>
        </div>
        <!-- /FORM ROW -->

        <!-- FORM ROW -->
        <div class="form-row short-space separated">
          <button class="button full"><?php echo 'Login to your Account';?></button>
        </div>
        <!-- /FORM ROW -->

        <!-- FORM ROW -->
        <div class="form-row">
          <div class="half">
            <a href="#" class="button blue full"><?php echo 'Facebook Login';?></a>
          </div>
          <div class="half">
            <a href="#" class="button lightblue full"><?php echo 'Twitter Login';?></a>
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
      <ul class="actions-list left">
        <!-- ACTIONS LIST ITEM -->
        <li class="actions-list-item">
          <!-- SOCIAL LINK -->
          <div class="social-link">
            <a href="#">
              <i class="fa fa-facebook"></i>
            </a>
          </div>
          <!-- /SOCIAL LINK -->
        </li>
        <!-- ACTIONS LIST ITEM -->

        <!-- ACTIONS LIST ITEM -->
        <li class="actions-list-item">
          <!-- SOCIAL LINK -->
          <div class="social-link">
            <a href="#">
              <i class="fa fa-twitter"></i>
            </a>
          </div>
          <!-- /SOCIAL LINK -->
        </li>
        <!-- ACTIONS LIST ITEM -->

        <!-- ACTIONS LIST ITEM -->
        <li class="actions-list-item">
          <!-- SOCIAL LINK -->
          <div class="social-link">
            <a href="#">
              <i class="fa fa-google-plus"></i>
            </a>
          </div>
          <!-- /SOCIAL LINK -->
        </li>
        <!-- ACTIONS LIST ITEM -->

        <!-- ACTIONS LIST ITEM -->
        <li class="actions-list-item">
          <!-- SOCIAL LINK -->
          <div class="social-link">
            <a href="#">
              <i class="fa fa-rss"></i>
            </a>
          </div>
          <!-- /SOCIAL LINK -->
        </li>
        <!-- ACTIONS LIST ITEM -->

        <!-- ACTIONS LIST ITEM -->
        <li class="actions-list-item">
          <!-- SOCIAL LINK -->
          <div class="social-link">
            <a href="#">
              <i class="fa fa-vimeo"></i>
            </a>
          </div>
          <!-- /SOCIAL LINK -->
        </li>
        <!-- ACTIONS LIST ITEM -->
      </ul>
      <!-- ACTIONS LIST -->

      <!-- ACTIONS LIST -->
      <ul class="actions-list right">
        <!-- ACTIONS LIST ITEM -->
        <li class="actions-list-item">
          <a class="action-button options-dropdown dropdown-control click-closable" href="#">
            <span class="language-selected-option"><?php echo 'eng';?></span>
            <!-- SVG ARROW -->
  					<svg class="svg-arrow small face-down">
  						<use xlink:href="#svg-arrow"></use>
  					</svg>
  					<!-- /SVG ARROW -->
          </a>

          <!-- DROPDOWN LIST -->
          <ul class="dropdown-list dropdown">
            <li data-language="eng" class="dropdown-list-item language-option selected">
              <a href="#"><?php echo 'eng';?></a>
            </li>
            <li data-language="spa" class="dropdown-list-item language-option">
              <a href="#"><?php echo 'spa';?></a>
            </li>
            <li data-language="ger" class="dropdown-list-item language-option">
              <a href="#"><?php echo 'ger';?></a>
            </li>
          </ul>
          <!-- /DROPDOWN LIST -->
        </li>
        <!-- ACTIONS LIST ITEM -->

        <!-- ACTIONS LIST ITEM -->
        <li class="actions-list-item">
          <a class="action-button options-dropdown dropdown-control click-closable" href="#">
            <span class="currency-selected-option"><?php echo 'usd';?></span>
            <!-- SVG ARROW -->
  					<svg class="svg-arrow small face-down">
  						<use xlink:href="#svg-arrow"></use>
  					</svg>
  					<!-- /SVG ARROW -->
          </a>

          <!-- DROPDOWN LIST -->
          <ul class="dropdown-list dropdown">
            <li data-currency="usd" class="dropdown-list-item currency-option selected">
              <a href="#"><?php echo 'usd';?></a>
            </li>
            <li data-currency="euro" class="dropdown-list-item currency-option">
              <a href="#"><?php echo 'euro';?></a>
            </li>
          </ul>
          <!-- /DROPDOWN LIST -->
        </li>
        <!-- ACTIONS LIST ITEM -->

        <!-- ACTIONS LIST ITEM -->
        <li class="actions-list-item">
          <a class="action-button" href="profile.php"><?php echo 'My Account';?></a>
        </li>
        <!-- ACTIONS LIST ITEM -->

        <!-- ACTIONS LIST ITEM -->
        <li class="actions-list-item">
          <a class="action-button" href="wishlist.php"><?php echo 'Wishlist';?><span class="bold">4</span></a>
        </li>
        <!-- ACTIONS LIST ITEM -->

        <!-- ACTIONS LIST ITEM -->
        <li class="actions-list-item">
          <a class="action-button" href="index.php"><?php echo 'Logout';?></a>
        </li>
        <!-- ACTIONS LIST ITEM -->

        <!-- ACTIONS LIST ITEM -->
        <li class="actions-list-item">
          <!-- SEARCH FORM -->
          <form class="search-form">
            <input type="text" name="search" autocomplete="off" placeholder="Search products here...">
            <!-- SEARCH SUBMIT -->
            <div class="search-submit">
              <!-- SVG MAG GLASS -->
    					<svg class="svg-mag-glass">
    						<use xlink:href="#svg-mag-glass"></use>
    					</svg>
    					<!-- /SVG MAG GLASS -->
            </div>
            <!-- /SEARCH SUBMIT -->

            <!-- SEARCH CANCEL -->
            <div class="search-cancel hidden">
              <!-- SVG CROSS -->
    					<svg class="svg-cross">
    						<use xlink:href="#svg-cross"></use>
    					</svg>
    					<!-- /SVG CROSS -->
            </div>
            <!-- /SEARCH CANCEL -->
          </form>
          <!-- /SEARCH FORM -->
        </li>
        <!-- ACTIONS LIST ITEM -->
      </ul>
      <!-- ACTIONS LIST -->
    </div>
    <!-- WIDGET LINE -->
  </div>
  <!-- WIDGET LINE WRAP -->

  <!-- WIDGET LINE WRAP -->
  <div class="widget-line-wrap widget-line-2">
    <!-- WIDGET LINE -->
    <div class="widget-line">
      <!-- ACTIONS LIST -->
      <ul class="actions-list">
        <!-- ACTIONS LIST ITEM -->
        <li class="actions-list-item full void">
          <!-- SEARCH FORM -->
          <form class="search-form">
            <input type="text" name="search" autocomplete="off" placeholder="Search products here...">
            <!-- SEARCH SUBMIT -->
            <div class="search-submit">
              <!-- SVG MAG GLASS -->
    					<svg class="svg-mag-glass">
    						<use xlink:href="#svg-mag-glass"></use>
    					</svg>
    					<!-- /SVG MAG GLASS -->
            </div>
            <!-- /SEARCH SUBMIT -->

            <!-- SEARCH CANCEL -->
            <div class="search-cancel hidden">
              <!-- SVG CROSS -->
    					<svg class="svg-cross">
    						<use xlink:href="#svg-cross"></use>
    					</svg>
    					<!-- /SVG CROSS -->
            </div>
            <!-- /SEARCH CANCEL -->
          </form>
          <!-- /SEARCH FORM -->
        </li>
        <!-- ACTIONS LIST ITEM -->
      </ul>
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
      <figure class="logo">
        <img src="img/logo.png" alt="logo">
        <figcaption><?php echo 'PC WORLDZ';?></figcaption>
      </figure>
      <!-- /LOGO -->

      <!-- CART DROPDOWN WRAP -->
      <div class="cart-dropdown-wrap">
        <!-- CART DROPDOWN CONTROL -->
        <div class="cart-dropdown-control">
          <!-- SVG CART -->
          <svg class="svg-cart">
            <use xlink:href="#svg-cart"></use>
          </svg>
          <!-- /SVG CART -->

          <!-- SVG CROSS -->
          <svg class="svg-cross medium hidden">
            <use xlink:href="#svg-cross"></use>
          </svg>
          <!-- /SVG CROSS -->

          <!-- CART ITEM QUANTITY -->
          <div class="cart-item-quantity">
            <p><?php echo '3';?></p>
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
              <a href="#">
                <figure class="product-img small">
                  <img src="img/products/01.png" alt="02">
                </figure>
              </a>
              <!-- /PRODUCT IMG -->

              <!-- CART DROPDOWN ITEM INFO -->
              <div class="cart-dropdown-item-info">
                <a href="#"><h6 class="title small">              
              <?php
              $item = simplexml_load_file('data/Saludo-Peralta-Aquino_IT2F_PcWorldz.xml');
              echo $item->product[0]->name;
              ?>
              </h6></a>
                <p class="product-description small"><?php echo 'Gaming';?></p>
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
                <p class="product-quantity"><?php echo 'x4';?></p>
                <p class="product-price"><br><br>
                <?php
                echo '₱233,848';
                ?>              
              </p>
              </div>
              <!-- /CART DROPDOWN ITEM INFO -->

              <!-- SVG CROSS -->
              <svg class="svg-cross medium">
                <use xlink:href="#svg-cross"></use>
              </svg>
              <!-- /SVG CROSS -->
            </div>
            <!-- /CART DROPDOWN ITEM -->

            <!-- CART DROPDOWN ITEM -->
            <div class="cart-dropdown-item">
              <!-- PRODUCT IMG -->
              <a href="#">
                <figure class="product-img small">
                  <img src="img/products/02.png" alt="06">
                </figure>
              </a>
              <!-- /PRODUCT IMG -->

              <!-- CART DROPDOWN ITEM INFO -->
              <div class="cart-dropdown-item-info">
                <a href="#"><h6 class="title small">              
              <?php
              $item = simplexml_load_file('data/Saludo-Peralta-Aquino_IT2F_PcWorldz.xml');
              echo $item->product[1]->name;
              ?>
              </h6></a>
                <p class="product-description small"><?php echo 'Gaming';?></p>
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
                  <li class="rating-item">
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
                <p class="product-quantity"><?php echo 'x2';?></p>
                <p class="product-price"><br><br>              
                  <?php
                  echo '₱57,032';
                  ?>
                </p>
              </div>
              <!-- /CART DROPDOWN ITEM INFO -->

              <!-- SVG CROSS -->
              <svg class="svg-cross medium">
                <use xlink:href="#svg-cross"></use>
              </svg>
              <!-- /SVG CROSS -->
            </div>
            <!-- /CART DROPDOWN ITEM -->

            <!-- CART DROPDOWN ITEM -->
            <div class="cart-dropdown-item">
              <!-- PRODUCT IMG -->
              <a href="#">
                <figure class="product-img small">
                  <img src="img/products/03.png" alt="05">
                </figure>
              </a>
              <!-- /PRODUCT IMG -->

              <!-- CART DROPDOWN ITEM INFO -->
              <div class="cart-dropdown-item-info">
                <a href="#"><h6 class="title small">              
              <?php
              $item = simplexml_load_file('data/Saludo-Peralta-Aquino_IT2F_PcWorldz.xml');
              echo $item->product[2]->name;
              ?>
                </h6></a>
                <p class="product-description small"><?php echo 'Gaming';?></p>
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
                <p class="product-quantity"><?php echo 'x1';?></p>
                <p class="product-price"> <br><br>             
              <?php
              $item = simplexml_load_file('data/Saludo-Peralta-Aquino_IT2F_PcWorldz.xml');
              echo $item->product[2]->price;
              ?>
                </p>
              </div>
              <!-- /CART DROPDOWN ITEM INFO -->

              <!-- SVG CROSS -->
              <svg class="svg-cross medium">
                <use xlink:href="#svg-cross"></use>
              </svg>
              <!-- /SVG CROSS -->
            </div>
            <!-- /CART DROPDOWN ITEM -->
          </div>
          <!-- CART DROPDOWN ITEMS -->

          <!-- CART DROPDOWN SUBTOTAL -->
          <div class="cart-dropdown-subtotal">
            <p class="title small"><?php echo 'Cart Subtotal';?></p>
            <p class="product-price"><?php echo '₱303,827';?></p>
          </div>
          <!-- /CART DROPDOWN SUBTOTAL -->

          <!-- CART DROPDOWN ACTIONS -->
          <div class="cart-dropdown-actions">
            <a href="cart.php" class="button dark large"><?php echo 'Go to the Cart';?></a>
            <a href="identification.php" class="button large"><?php echo 'Go to Checkout';?></a>
          </div>
          <!-- /CART DROPDOWN ACTIONS -->
        </div>
        <!-- /CART DROPDOWN -->
      </div>
      <!-- /CART DROPDOWN WRAP -->

      <!-- MAIN MENU -->
      <ul class="main-menu">
        <!-- MAIN MENU ITEM -->
        <li class="main-menu-item">
          <a href="home.php"><?php echo 'Home';?></a>
        </li>
        <!-- /MAIN MENU ITEM -->

        <!-- MAIN MENU ITEM -->
        <li class="main-menu-item">
          <a href="aboutus.php"><?phpecho 'About';?></a>
        </li>
        <!-- /MAIN MENU ITEM -->

        <!-- MAIN MENU ITEM -->
        <li class="main-menu-item">
          <a href="#">
            <?php
            echo 'Shop';
            ?>
            <!-- SVG ARROW -->
            <svg class="svg-arrow face-down">
              <use xlink:href="#svg-arrow"></use>
            </svg>
            <!-- /SVG ARROW -->
          </a>

          <!-- MENU DROPDOWN -->
          <ul class="menu-dropdown">
            <li class="menu-dropdown-item">
              <a href="shop-list2.php"><?php echo 'Motherboards';?></a>
            </li>
            <li class="menu-dropdown-item">
              <a href="shop-list2.php"><?php echo 'Processors';?></a>
            </li>
            <li class="menu-dropdown-item">
              <a href="shop-list2.php"><?php echo 'Graphic Cards';?></a>
            </li>

            </li>
            
          </ul>
          <!-- /MENU DROPDOWN -->
        </li>
        <!-- /MAIN MENU ITEM -->

        <!-- MAIN MENU ITEM -->
        <li class="main-menu-item">
          <a href="blog.php"><?php echo 'Our Blog';?></a>
        </li>
        <!-- /MAIN MENU ITEM -->

        <!-- MAIN MENU ITEM -->
        <li class="main-menu-item sub">
          <a href="#">
            <?php
            echo 'Features';
            ?>
            <!-- SVG ARROW -->
            <svg class="svg-arrow face-down">
              <use xlink:href="#svg-arrow"></use>
            </svg>
            <!-- /SVG ARROW -->
          </a>

          <!-- CONTENT DROPDOWN -->
          <div class="content-dropdown with-bg">
            
            <!-- CONTENT DROPDOWN COLUMN -->
            <div class="content-dropdown-column">
              <h6 class="title tiny secondary"><?php echo 'Account';?></h6>
              <hr class="line-separator">
              <!-- LINK LIST -->
              <ul class="link-list simple">
                <!-- LINK LIST ITEM -->
                <li class="link-list-item">
                  <a href="identification.php"><?php echo 'Identification';?></a>
                </li>
                <!-- /LINK LIST ITEM -->

                <!-- LINK LIST ITEM -->
                <li class="link-list-item">
                  <a href="billing-shipping.php"><?php echo 'Billing and Shipping';?></a>
                </li>
                <!-- /LINK LIST ITEM -->

                <!-- LINK LIST ITEM -->
                <li class="link-list-item">
                  <a href="confirmation.php"><?php echo 'Confirmation';?></a>
                </li>
                <!-- /LINK LIST ITEM -->

                <!-- LINK LIST ITEM -->
                <li class="link-list-item">
                  <a href="cart.php"><?php echo 'Shopping Cart';?></a>
                </li>
                <!-- /LINK LIST ITEM -->

                <!-- LINK LIST ITEM -->
                <li class="link-list-item">
                  <a href="wishlist.php">Wishlist</a>
                </li>
                <!-- /LINK LIST ITEM -->

                <!-- LINK LIST ITEM -->
                <li class="link-list-item">
                  <a href="profile.php"><?php echo 'Wishlist';?></a>
                </li>
                <!-- /LINK LIST ITEM -->
              </ul>
              <!-- /LINK LIST -->
            </div>
            <!-- /CONTENT DROPDOWN COLUMN -->
          </div>
          <!-- /CONTENT DROPDOWN -->
        </li>
        <!-- /MAIN MENU ITEM -->

        <!-- MAIN MENU ITEM -->
        <li class="main-menu-item">
          <a href="contactus.php"><?php echo 'Contact';?></a>
        </li>
        <!-- /MAIN MENU ITEM -->
      </ul>
      <!-- /MAIN MENU -->
    </nav>
    <!-- /NAVIGATION -->
  </div>
  <!-- /NAVIGATION WRAP -->

  <!-- MOBILE MENU WRAP -->
  <div class="mobile-menu-wrap">
    <!-- MOBILE MENU CONTROL -->
    <div class="mobile-menu-control dropdown-control">
      <!-- SVG BURGER -->
      <svg class="svg-burger">
        <use xlink:href="#svg-burger"></use>
      </svg>
      <!-- /SVG BURGER -->
    </div>
    <!-- /MOBILE MENU CONTROL -->

    <!-- MOBILE MENU -->
    <ul class="mobile-menu dropdown">
      <!-- MOBILE MENU ITEM -->
      <li class="mobile-menu-item">
        <a href="home.php"><?php echo 'Home';?></a>
      </li>
      <!-- /MOBILE MENU ITEM -->

      <!-- MOBILE MENU ITEM -->
      <li class="mobile-menu-item">
        <a href="aboutus.php"><?php echo 'About';?></a>
      </li>
      <!-- /MOBILE MENU ITEM -->

      <!-- MOBILE MENU ITEM -->
      <li class="mobile-menu-item">
        <a href="#" class="dropdown-control">
          <?php
          echo 'Shop';
          ?>          
        </a>

        <!-- MOBILE MENU DROPDOWN -->
        <ul class="mobile-menu-dropdown dropdown">
          <li class="mobile-menu-dropdown-item">
            <a href="shop-list2.php"><?php echo 'Motherboards';?></a>
          </li>
          <li class="mobile-menu-dropdown-item">
            <a href="shop-list2.php"><?php echo 'Processors';?></a>
          </li>
          <li class="mobile-menu-dropdown-item">
            <a href="shop-list2.php"><?php echo 'Graphic Cards';?></a>
          </li>
          <!-- /MOBILE MENU DROPDOWN ITEM -->
        </ul>
        <!-- /MOBILE MENU DROPDOWN -->
      </li>
      <!-- /MOBILE MENU ITEM -->

      <!-- MOBILE MENU ITEM -->
      <li class="mobile-menu-item">
        <a href="blog.php"><?php echo 'Our Blog';?></a>
      </li>
      <!-- /MOBILE MENU ITEM -->

      <!-- MOBILE MENU ITEM -->
      <li class="mobile-menu-item">
        <a href="#" class="dropdown-control">
          <?php
          echo 'Features';
          ?>
          <!-- SVG ARROW -->
          <svg class="svg-arrow medium rotable">
            <use xlink:href="#svg-arrow"></use>
          </svg>
          <!-- /SVG ARROW -->
        </a>

        <!-- MOBILE MENU DROPDOWN -->
        <ul class="mobile-menu-dropdown dropdown">
         
          <!-- MOBILE MENU DROPDOWN ITEM -->
          <li class="mobile-menu-dropdown-item">
            <a href="identification.php"><?php echo 'Identification';?></a>
          </li>
          <!-- /MOBILE MENU DROPDOWN ITEM -->

          <!-- MOBILE MENU DROPDOWN ITEM -->
          <li class="mobile-menu-dropdown-item">
            <a href="billing-shipping.php"><?php echo 'Billing and Shipping';?></a>
          </li>
          <!-- /MOBILE MENU DROPDOWN ITEM -->

          <!-- MOBILE MENU DROPDOWN ITEM -->
          <li class="mobile-menu-dropdown-item">
            <a href="confirmation.php"><?php echo 'Confirmation';?></a>
          </li>
          <!-- /MOBILE MENU DROPDOWN ITEM -->

          <!-- MOBILE MENU DROPDOWN ITEM -->
          <li class="mobile-menu-dropdown-item">
            <a href="cart.php"><?php echo 'Shopping Cart';?></a>
          </li>
          <!-- /MOBILE MENU DROPDOWN ITEM -->

          <!-- MOBILE MENU DROPDOWN ITEM -->
          <li class="mobile-menu-dropdown-item">
            <a href="wishlist.php"><?php echo 'Wishlist';?></a>
          </li>
          <!-- /MOBILE MENU DROPDOWN ITEM -->

          <!-- MOBILE MENU DROPDOWN ITEM -->
          <li class="mobile-menu-dropdown-item">
            <a href="profile.php"><?php echo 'Your Account';?></a>
          </li>
          <!-- /MOBILE MENU DROPDOWN ITEM -->
        </ul>
        <!-- /MOBILE MENU DROPDOWN -->
      </li>
      <!-- /MOBILE MENU ITEM -->

      <!-- MOBILE MENU ITEM -->
      <li class="mobile-menu-item">
        <a href="contactus.php"><?php echo 'Contact';?></a>
      </li>
      <!-- /MOBILE MENU ITEM -->

      <!-- MOBILE MENU ITEM -->
      <li class="mobile-menu-item">
        <a href="profile.php"><?php echo 'My Account';?></a>
      </li>
      <!-- /MOBILE MENU ITEM -->

      <!-- MOBILE MENU ITEM -->
      <li class="mobile-menu-item">
        <a href="wishlist.php">
          <?php
          echo 'Wishlist';
          ?>
          <span class="bold">4</span>
        </a>
      </li>
      <!-- /MOBILE MENU ITEM -->

      <!-- MOBILE MENU ITEM -->
      <li class="mobile-menu-item">
        <a href="#" class="dropdown-control">
          <?php
          echo 'Language:';
          ?>
          <span class="selected-option language-selected-option"><?php echo 'eng';?></span>
          <!-- SVG ARROW -->
          <svg class="svg-arrow medium rotable">
            <use xlink:href="#svg-arrow"></use>
          </svg>
          <!-- /SVG ARROW -->
        </a>

        <!-- MOBILE MENU DROPDOWN -->
        <ul class="mobile-menu-dropdown dropdown">
          <!-- MOBILE MENU DROPDOWN ITEM -->
          <li data-language="eng" class="mobile-menu-dropdown-item language-option selected">
            <a href="#"><?php echo 'eng';?></a>
          </li>
          <!-- /MOBILE MENU DROPDOWN ITEM -->

          <!-- MOBILE MENU DROPDOWN ITEM -->
          <li data-language="spa" class="mobile-menu-dropdown-item language-option">
            <a href="#"><?php echo 'spa';?></a>
          </li>
          <!-- /MOBILE MENU DROPDOWN ITEM -->

          <!-- MOBILE MENU DROPDOWN ITEM -->
          <li data-language="ger" class="mobile-menu-dropdown-item language-option">
            <a href="#"><?php echo 'ger';?></a>
          </li>
          <!-- /MOBILE MENU DROPDOWN ITEM -->
        </ul>
        <!-- /MOBILE MENU DROPDOWN -->
      </li>
      <!-- /MOBILE MENU ITEM -->

      <!-- MOBILE MENU ITEM -->
      <li class="mobile-menu-item">
        <a href="#" class="dropdown-control">
          <?php
          echo 'Currency:';
          ?>
          <span class="selected-option currency-selected-option"><?php echo 'usd';?></span>
          <!-- SVG ARROW -->
          <svg class="svg-arrow medium rotable">
            <use xlink:href="#svg-arrow"></use>
          </svg>
          <!-- /SVG ARROW -->
        </a>

        <!-- MOBILE MENU DROPDOWN -->
        <ul class="mobile-menu-dropdown dropdown">
          <!-- MOBILE MENU DROPDOWN ITEM -->
          <li data-currency="usd" class="mobile-menu-dropdown-item currency-option selected">
            <a href="#"><?php echo 'usd';?></a>
          </li>
          <!-- /MOBILE MENU DROPDOWN ITEM -->

          <!-- MOBILE MENU DROPDOWN ITEM -->
          <li data-currency="euro" class="mobile-menu-dropdown-item currency-option">
            <a href="#"><?php echo 'euro';?></a>
          </li>
          <!-- /MOBILE MENU DROPDOWN ITEM -->
        </ul>
        <!-- /MOBILE MENU DROPDOWN -->
      </li>
      <!-- /MOBILE MENU ITEM -->

      <!-- MOBILE MENU ITEM -->
      <li class="mobile-menu-item void">
        <a href="#"><?php echo 'Logout';?></a>
      </li>
      <!-- /MOBILE MENU ITEM -->
    </ul>
    <!-- /MOBILE MENU -->
  </div>
  <!-- /MOBILE MENU WRAP -->

  <!-- SECTION NAVIGATION WRAP -->
  <div class="section-navigation-wrap">
    <!-- SECTION NAVIGATION -->
    <div class="section-navigation">
      <!-- SECTION NAVIGATION PATH -->
      <p class="section-navigation-path">
        <span class="path"><?php echo 'Home';?></span>
        <span class="path bold">
          <!-- SVG ARROW -->
          <svg class="svg-arrow tiny">
            <use xlink:href="#svg-arrow"></use>
          </svg>
          <!-- /SVG ARROW -->
        </span>
        <span class="path current"><?php echo 'PC WORLDZ Blog';?></span>
      </p>
      <!-- SECTION NAVIGATION PATH -->
    </div>
    <!-- /SECTION NAVIGATION -->
  </div>
  <!-- /SECTION NAVIGATION WRAP -->

  <!-- SECTION WRAP -->
  <div class="section-wrap">
    <!-- SECTION -->
    <div class="section no-title">
      <!-- POST PREVIEW LIST -->
      <div class="post-preview-list">
        <!-- POST PREVIEW LIST ITEM -->
        <div class="post-preview-list-item">
          <!-- POST PREVIEW IMG -->
          <a href="post.php">
            <div class="post-preview-img">
              <div class="overlay">
                <div class="circle">
                  <!-- SVG PLUS -->
                  <svg class="svg-plus medium">
                    <use xlink:href="#svg-plus"></use>
                  </svg>
                  <!-- /SVG PLUS -->
                </div>
              </div>
              <!-- POST IMG -->
              <figure class="post-img">
                <img src="img/blog/1.jpg" alt="post01">
              </figure>
              <!-- /POST IMG -->
            </div>
          </a>
          <!-- /POST PREVIEW IMG -->
          <p class="post-timestamp"><?php echo 'October 26th, 2017';?></p>
          <a href="post.php">
            <h6 class="title medium"><?php echo 'Nvidia has announced that it will be open-sourcing the Linux drivers for its graphics cards, starting with the R515 release, using a dual GPL/MIT license.';?></h6>
          </a>
          <p class="post-author"><?php echo 'By Admin';?><span class="separator">|</span><?php echo '26 Comments';?></p>
          <p><?php echo 'Nvidia says the code is currently production-ready for data center GPUs in the Turing and Ampere families following the phased rollout of the GSP driver architecture over the past year. It has been tested across a wide variety of workloads to ensure feature and performance parity with the proprietary kernel-mode driver, but brings new functionality too, such as the DMA-BUF framework for sharing buffers across devices and subsystems that will come into its own with the Hopper architecture.';?></p>
          <a href="post.php" class="button"><?php echo 'Read More';?></a>
        </div>
        <!-- /POST PREVIEW LIST ITEM -->

        <!-- POST PREVIEW LIST ITEM -->
        <div class="post-preview-list-item">
          <!-- POST PREVIEW IMG -->
          <a href="post.php">
            <div class="post-preview-img">
              <div class="overlay">
                <div class="circle">
                  <!-- SVG PLUS -->
                  <svg class="svg-plus medium">
                    <use xlink:href="#svg-plus"></use>
                  </svg>
                  <!-- /SVG PLUS -->
                </div>
              </div>
              <!-- POST IMG -->
              <figure class="post-img">
                <img src="img/blog/2.jpg" alt="post02">
              </figure>
              <!-- /POST IMG -->
            </div>
          </a>
          <!-- /POST PREVIEW IMG -->
          <p class="post-timestamp"><?php echo 'October 14th, 2017';?></p>
          <a href="post.php">
            <h6 class="title medium"><?php echo 'AMD has released the AMD Software Preview Driver May 2022, which is now available to all Radeon graphics card owners.';?>
              <br><br></h6>
          </a>
          <p class="post-author"><?php echo 'By Admin';?><span class="separator">|</span><?php echo '54 Comments';?></p>
          <p><?php echo 'In other news, the AMD Software Preview Driver May 2022 now comes with the "sharpen effect" for Radeon users to tweak the sharpness of the image when using AMD Radeon Super Resolution (RSR) 1.1 technology. AMD has also integrated the AMD Bug Report Tool directly into the Adrenalin software.';?>
            <br><br><br><br><br></p>
          
          <a href="post.php" class="button"><?php echo 'Read More';?></a>
        </div>
        <!-- /POST PREVIEW LIST ITEM -->

        <!-- POST PREVIEW LIST ITEM -->
        <div class="post-preview-list-item">
          <!-- POST PREVIEW IMG -->
          <a href="post.php">
            <div class="post-preview-img">
              <div class="overlay">
                <div class="circle">
                  <!-- SVG PLUS -->
                  <svg class="svg-plus medium">
                    <use xlink:href="#svg-plus"></use>
                  </svg>
                  <!-- /SVG PLUS -->
                </div>
              </div>
              <!-- POST IMG -->
              <figure class="post-img">
                <img src="img/blog/3.jpg" alt="post03">
              </figure>
              <!-- /POST IMG -->
            </div>
          </a>
          <!-- /POST PREVIEW IMG -->
          <p class="post-timestamp"><?php echo 'August 17th, 2017';?></p>
          <a href="post.php">
            <h6 class="title medium"><?php echo 'Today we have deals on two Zen 3 AMD CPUs: the Ryzen 7 5800X for $309 and the Ryzen 5 5600X for $199 both at their lowest price per ‘the Camelizer’.';?> </h6>
          </a>
          <p class="post-author"><?php echo 'By Admin';?><span class="separator">|</span><?php echo '127 Comments';?></p>
          <p><?php echo 'To the delight of anyone requiring a graphics card, we have an MSRP-priced Asus Dual Radeon RX 6600 for $329 at Newegg. It is great to see the pricing of GPUs getting back to normal, here hoping they fall even further.';?>
            <br><br><br><br><br><br></p>
          <a href="post.php" class="button"><?php echo 'Read More';?></a>
        </div>
        <!-- /POST PREVIEW LIST ITEM -->

        <!-- POST PREVIEW LIST ITEM -->
        <div class="post-preview-list-item">
          <!-- POST PREVIEW IMG -->
          <a href="post.php">
            <div class="post-preview-img">
              <div class="overlay">
                <div class="circle">
                  <!-- SVG PLUS -->
                  <svg class="svg-plus medium">
                    <use xlink:href="#svg-plus"></use>
                  </svg>
                  <!-- /SVG PLUS -->
                </div>
              </div>
              <!-- POST IMG -->
              <figure class="post-img">
                <img src="img/blog/4.jpg" alt="post04">
              </figure>
              <!-- /POST IMG -->
            </div>
          </a>
          <!-- /POST PREVIEW IMG -->
          <p class="post-timestamp"><?php echo 'August 8th, 2017';?></p>
          <a href="post.php">
            <h6 class="title medium"><?php echo 'AMD and Google have announced an intricate, deep-level collaboration on cybersecurity research for AMDs server-class EPYC CPUs — one thats now been running for five years.';?>
              <br><br><br><br></h6>
          </a>
          <p class="post-author"><?php echo 'By Admin';?><span class="separator">|</span><?php echo '305 Comments';?></p>
          <p><?php echo 'Brent Hollingsworth, AMD director of the EPYC software ecosystem, pointed out that the partnership pooled AMD and Googles best and brightest, opening up the space to previously unknown attack vectors, and pushing creativity on attack layers - whether software- or hardware-based.';?>
            <br><br><br></p>
          <a href="post.php" class="button"><?php echo 'Read More';?></a>
        </div>
        <!-- /POST PREVIEW LIST ITEM -->

        <!-- POST PREVIEW LIST ITEM -->
        <div class="post-preview-list-item">
          <!-- POST PREVIEW IMG -->
          <a href="post.php">
            <div class="post-preview-img">
              <div class="overlay">
                <div class="circle">
                  <!-- SVG PLUS -->
                  <svg class="svg-plus medium">
                    <use xlink:href="#svg-plus"></use>
                  </svg>
                  <!-- /SVG PLUS -->
                </div>
              </div>
              <!-- POST IMG -->
              <figure class="post-img">
                <img src="img/blog/5.jpg" alt="post05">
              </figure>
              <!-- /POST IMG -->
            </div>
          </a>
          <!-- /POST PREVIEW IMG -->
          <p class="post-timestamp"><?php echo 'June 22nd, 2017';?></p>
          <a href="post.php">
            <h6 class="title medium"><?php echo 'Intel has released 16 new security advisories, which address 41 vulnerabilities. The advisories, some with high severity ratings, appear to cover the full gamut of Intel catalog, including processors, devices, firmware, drivers and software.';?>
            <br><br></h6>
          </a>
          <p class="post-author"><?php echo 'By Admin';?><span class="separator">|</span><?php echo '205 Comments';?></p>
          <p><?php echo 'The Intel Processor advisory has been given the CVEID of CVE-2022-21151. It is described in summary as "a potential security vulnerability in some Intel Processors may allow information disclosure." It is only a medium severity rating vulnerability. We think this is because it requires an authenticated user with local access to exploit the chance to "potentially enable information disclosure" from the processor.';?></p>
          <a href="post.php" class="button"><?php echo 'Read More';?></a>
        </div>
        <!-- /POST PREVIEW LIST ITEM -->

        <!-- POST PREVIEW LIST ITEM -->
        <div class="post-preview-list-item">
          <!-- POST PREVIEW IMG -->
          <a href="post.php">
            <div class="post-preview-img">
              <div class="overlay">
                <div class="circle">
                  <!-- SVG PLUS -->
                  <svg class="svg-plus medium">
                    <use xlink:href="#svg-plus"></use>
                  </svg>
                  <!-- /SVG PLUS -->
                </div>
              </div>
              <!-- POST IMG -->
              <figure class="post-img">
                <img src="img/blog/6.jpg" alt="post06">
              </figure>
              <!-- /POST IMG -->
            </div>
          </a>
          <!-- /POST PREVIEW IMG -->
          <p class="post-timestamp"><?php echo 'June 7th, 2017';?></p>
          <a href="post.php">
            <h6 class="title medium"><?php echo 'AMDs Ryzen 7 5800X3D, the fastest CPU for gaming is finally available. Weve reviewed and tested the 5800X3D and confirmed its gaming performance on our test suite of games that have placed it at the top of our list of the best CPUs for gaming.';?>
            <br><br></h6>
          </a>
          <p class="post-author"><?php echo 'By Admin';?><span class="separator">|</span><?php echo '536 Comments';?></p>
          <p><?php echo 'The AMD Ryzen 7 5800X3D uses eight-cores and 16-threads with a max boost clock of up to 4.5GHz similar to its 5000-series family. What makes this chip different is a new 3D-stacked SRAM technology that employs a total of 96MB of L3 cache to give the 5800X3D amazing gaming performance.';?>
            <br><br><br></p>
          <a href="post.php" class="button"><?php echo 'Read More';?></a>
        </div>
        <!-- /POST PREVIEW LIST ITEM -->

        <!-- POST PREVIEW LIST ITEM -->
        <div class="post-preview-list-item">
          <!-- POST PREVIEW IMG -->
          <a href="post.php">
            <div class="post-preview-img">
              <div class="overlay">
                <div class="circle">
                  <!-- SVG PLUS -->
                  <svg class="svg-plus medium">
                    <use xlink:href="#svg-plus"></use>
                  </svg>
                  <!-- /SVG PLUS -->
                </div>
              </div>
              <!-- POST IMG -->
              <figure class="post-img">
                <img src="img/blog/7.jpg" alt="post07">
              </figure>
              <!-- /POST IMG -->
            </div>
          </a>
          <!-- /POST PREVIEW IMG -->
          <p class="post-timestamp"><?php echo 'May 16th, 2017';?></p>
          <a href="post.php">
            <h6 class="title medium"><?php echo 'Its more difficult than ever to find savings on internal components like CPUs or RAM or even locate a high-end graphics card in stock. However, buying a new monitor could have an even more dramatic effect on your tech life than improving your systems performance.';?>
              <br><br><br></h6>
          </a>
          <p class="post-author"><?php echo 'By Admin';?><span class="separator">|</span><?php echo '630 Comments';?></p>
          <p><?php echo 'If you do any kind of PC gaming, getting a gaming monitor with a high-refresh rate and adaptive sync will completely change the way you play, eliminating tearing and ghosting. Upgrading to a larger screen or one with higher resolution will let you have a more immersive experience.';?>
            <br><br><br><br></p>
          <a href="post.php" class="button"><?php echo 'Read More';?></a>
        </div>
        <!-- /POST PREVIEW LIST ITEM -->

        <!-- POST PREVIEW LIST ITEM -->
        <div class="post-preview-list-item">
          <!-- POST PREVIEW IMG -->
          <a href="post.php">
            <div class="post-preview-img">
              <div class="overlay">
                <div class="circle">
                  <!-- SVG PLUS -->
                  <svg class="svg-plus medium">
                    <use xlink:href="#svg-plus"></use>
                  </svg>
                  <!-- /SVG PLUS -->
                </div>
              </div>
              <!-- POST IMG -->
              <figure class="post-img">
                <img src="img/blog/8.jpg" alt="post08">
              </figure>
              <!-- /POST IMG -->
            </div>
          </a>
          <!-- /POST PREVIEW IMG -->
          <p class="post-timestamp"><?php echo 'March 29th, 2017';?></p>
          <a href="post.php">
            <h6 class="title medium"><?php echo 'Whether youre building a PC, craving an upgrade, looking for one of the best gaming PCs, or just hoping to find one of the best gaming monitors on a big sale, were here to help you sift through the discounts.';?>
            <br><br><br><br><br><br></h6>
          </a>
          <p class="post-author"><?php echo 'By Admin';?><span class="separator">|</span><?php echo '763 Comments';?></p>
          <p><?php echo 'To make saving simpler, were rounding up the very best deals on tech and hardware below, from components like CPUs and SSDs to peripherals to prebuilt desktops and even gadgets.';?>
            <br><br><br><br><br><br></p>
          <a href="post.php" class="button"><?php echo 'Read More';?></a>
        </div>
        <!-- /POST PREVIEW LIST ITEM -->

        <!-- POST PREVIEW LIST ITEM -->
        <div class="post-preview-list-item">
          <!-- POST PREVIEW IMG -->
          <a href="post.php">
            <div class="post-preview-img">
              <div class="overlay">
                <div class="circle">
                  <!-- SVG PLUS -->
                  <svg class="svg-plus medium">
                    <use xlink:href="#svg-plus"></use>
                  </svg>
                  <!-- /SVG PLUS -->
                </div>
              </div>
              <!-- POST IMG -->
              <figure class="post-img">
                <img src="img/blog/9.jpg" alt="post09">
              </figure>
              <!-- /POST IMG -->
            </div>
          </a>
          <!-- /POST PREVIEW IMG -->
          <p class="post-timestamp"><?php echo 'March 6th, 2017';?></p>
          <a href="post.php">
            <h6 class="title medium"><?php echo 'Nvidias forthcoming GeForce RTX 40-series (Ada Lovelace) graphics cards continue to make the rounds in the rumor mill. Hardware tipster kopite7kimi, who has an impeccable history with Ampere leaks, has revealed the potential memory configurations for the GeForce RTX 4090 and RTX 4070.';?></h6>
          </a>
          <p class="post-author"><?php echo 'By Admin';?><span class="separator">|</span><?php echo '894 Comments';?></p>
          <p><?php echo 'In addition to the memory upgrade, the GeForce RTX 4090 would also sport more CUDA cores. However, the exact amount is unknown for now. Our estimation is between 17,000 to 18,500. Logically, Nvidia would need to raise the power limit on the GeForce RTX 4090 to accommodate the extra CUDA cores. Early diagrams of the GeForce RTX 4090s feasible PCB show that the graphics card could pull up to 600W of power.';?></p>
          <a href="post.php" class="button"><?php echo 'Read More';?></a>
        </div>
        <!-- /POST PREVIEW LIST ITEM -->
      </div>
      <!-- /POST PREVIEW LIST -->

      <!-- PAGER WRAP -->
      <div class="pager-wrap">
        <!-- PAGER -->
        <ul class="pager">
          <!-- PAGER ITEM -->
          <li class="pager-item">
            <a href="#">
              <!-- SVG ARROW -->
              <svg class="svg-arrow medium inverted">
                <use xlink:href="#svg-arrow"></use>
              </svg>
              <!-- /SVG ARROW -->
            </a>
          </li>
          <!-- /PAGER ITEM -->

          <!-- PAGER ITEM -->
          <li class="pager-item selected"><a href="#"><?php echo '1';?></a></li>
          <!-- /PAGER ITEM -->

          <!-- PAGER ITEM -->
          <li class="pager-item"><a href="#"><?php echo '2';?></a></li>
          <!-- /PAGER ITEM -->

          <!-- PAGER ITEM -->
          <li class="pager-item"><a href="#"><?php echo '3';?></a></li>
          <!-- /PAGER ITEM -->

          <!-- PAGER ITEM -->
          <li class="pager-item">
            <a href="#">
              <!-- SVG ARROW -->
              <svg class="svg-arrow medium">
                <use xlink:href="#svg-arrow"></use>
              </svg>
              <!-- /SVG ARROW -->
            </a>
          </li>
          <!-- /PAGER ITEM -->
        </ul>
        <!-- /PAGER -->
      </div>
      <!-- /PAGER WRAP -->
    </div>
    <!-- /SECTION -->
  </div>
  <!-- /SECTION WRAP -->

  <!-- FOOTER WRAP -->
  <footer class="footer-wrap">
    <!-- FOOTER TOP -->
    <div class="footer-top">
      <!-- ABOUTUS PREVIEW -->
      <div class="aboutus-preview">
        <!-- LOGO -->
        <figure class="logo">
          <img src="img/logo-footer.png" alt="logo">
          <figcaption><?php echo 'PC WORLDZ';?></figcaption>
        </figure>
        <!-- /LOGO -->
        <p class="description"><?php echo 'Were dedicated to give you the very best of Computer Products, with a focus on quality, price and uniqueness. Founded in 2022 by Saludo, Peralta and Aquino, PC WORLDZ serves customer worldwide, and are thrilled to be a part of the fair trade wing of the IT industry.';?></p>

        <!-- CONTACTUS LIST -->
        <ul class="contactus-list">
          <!-- CONTACTUS LIST ITEM -->
          <li class="contactus-list-item">
            <i class="s-icon icon-location-pin"></i>
            <p><?php echo 'Marinduque, PH';?></p>
          </li>
          <!-- /CONTACTUS LIST ITEM -->

          <!-- CONTACTUS LIST ITEM -->
          <li class="contactus-list-item">
            <i class="s-icon icon-envelope"></i>
            <a href="mailto:info@tricksterhelmets.com" class="link"><?php echo 'info@pcworldz.com';?></a>
          </li>
          <!-- /CONTACTUS LIST ITEM -->

          <!-- CONTACTUS LIST ITEM -->
          <li class="contactus-list-item">
            <i class="s-icon icon-phone"></i>
            <p><?php echo '044 - 555 - 123 - 1234';?></p>
          </li>
          <!-- /CONTACTUS LIST ITEM -->
        </ul>
        <!-- /CONTACTUS LIST -->
      </div>
      <!-- /ABOUTUS PREVIEW -->

      <!-- CONTENT DROPDOWN COLUMN -->
      <div class="content-dropdown-column">
        <h6 class="title small secondary"><?php echo 'Sitemap';?></h6>
        <hr class="line-separator">
        <!-- LINK LIST -->
        <ul class="link-list decorated">
          <!-- LINK LIST ITEM -->
          <li class="link-list-item">
            <a href="home.php">
              <?php
              echo 'Home';
              ?>
              <!-- SVG ARROW -->
              <svg class="svg-arrow tiny">
                <use xlink:href="#svg-arrow"></use>
              </svg>
              <!-- /SVG ARROW -->
            </a>
          </li>
          <!-- /LINK LIST ITEM -->

          <!-- LINK LIST ITEM -->
          <li class="link-list-item">
            <a href="aboutus.php">
              <?php
              echo 'About Us';
              ?>
              <!-- SVG ARROW -->
              <svg class="svg-arrow tiny">
                <use xlink:href="#svg-arrow"></use>
              </svg>
              <!-- /SVG ARROW -->
            </a>
          </li>
          <!-- /LINK LIST ITEM -->

          <!-- LINK LIST ITEM -->
          <li class="link-list-item">
            <a href="shop-grid.php">
              <?php
              echo 'Shop';
              ?>
              <!-- SVG ARROW -->
              <svg class="svg-arrow tiny">
                <use xlink:href="#svg-arrow"></use>
              </svg>
              <!-- /SVG ARROW -->
            </a>
          </li>
          <!-- /LINK LIST ITEM -->

          <!-- LINK LIST ITEM -->
          <li class="link-list-item">
            <a href="blog.php">
              <?php
              echo 'Our Blog';
              ?>
              <!-- SVG ARROW -->
              <svg class="svg-arrow tiny">
                <use xlink:href="#svg-arrow"></use>
              </svg>
              <!-- /SVG ARROW -->
            </a>
          </li>
          <!-- /LINK LIST ITEM -->

          <!-- LINK LIST ITEM -->
          <li class="link-list-item">
            <a href="contactus.php">
              <?php
              echo 'Contact';
              ?>
              <!-- SVG ARROW -->
              <svg class="svg-arrow tiny">
                <use xlink:href="#svg-arrow"></use>
              </svg>
              <!-- /SVG ARROW -->
            </a>
          </li>
          <!-- /LINK LIST ITEM -->

          <!-- LINK LIST ITEM -->
          <li class="link-list-item">
            <a href="profile.php">
              <?php
              echo 'Your Account';
              ?>
              <!-- SVG ARROW -->
              <svg class="svg-arrow tiny">
                <use xlink:href="#svg-arrow"></use>
              </svg>
              <!-- /SVG ARROW -->
            </a>
          </li>
          <!-- /LINK LIST ITEM -->

          <!-- LINK LIST ITEM -->
          <li class="link-list-item">
            <a href="#">
              <?php
              echo 'FAQs';
              ?>
              <!-- SVG ARROW -->
              <svg class="svg-arrow tiny">
                <use xlink:href="#svg-arrow"></use>
              </svg>
              <!-- /SVG ARROW -->
            </a>
          </li>
          <!-- /LINK LIST ITEM -->

          <!-- LINK LIST ITEM -->
          <li class="link-list-item">
            <a href="#">
              <?php
              echo 'Our Guarantee';
              ?>
              <!-- SVG ARROW -->
              <svg class="svg-arrow tiny">
                <use xlink:href="#svg-arrow"></use>
              </svg>
              <!-- /SVG ARROW -->
            </a>
          </li>
          <!-- /LINK LIST ITEM -->
        </ul>
        <!-- /LINK LIST -->
      </div>
      <!-- /CONTENT DROPDOWN COLUMN -->

      <!-- CONTENT DROPDOWN COLUMN -->
      <div class="content-dropdown-column">
        <h6 class="title small secondary"><?php echo 'Company';?></h6>
        <hr class="line-separator">
        <!-- LINK LIST -->
        <ul class="link-list decorated">
          <!-- LINK LIST ITEM -->
          <li class="link-list-item">
            <a href="#">
              <?php
              echo 'Shipping Policy';
              ?>
              <!-- SVG ARROW -->
              <svg class="svg-arrow tiny">
                <use xlink:href="#svg-arrow"></use>
              </svg>
              <!-- /SVG ARROW -->
            </a>
          </li>
          <!-- /LINK LIST ITEM -->

          <!-- LINK LIST ITEM -->
          <li class="link-list-item">
            <a href="#">
              <?php
              echo 'International Shipping';
              ?>
              <!-- SVG ARROW -->
              <svg class="svg-arrow tiny">
                <use xlink:href="#svg-arrow"></use>
              </svg>
              <!-- /SVG ARROW -->
            </a>
          </li>
          <!-- /LINK LIST ITEM -->

          <!-- LINK LIST ITEM -->
          <li class="link-list-item">
            <a href="#">
              <?php
              echo 'Affiliates';
              ?>
              <!-- SVG ARROW -->
              <svg class="svg-arrow tiny">
                <use xlink:href="#svg-arrow"></use>
              </svg>
              <!-- /SVG ARROW -->
            </a>
          </li>
          <!-- /LINK LIST ITEM -->

          <!-- LINK LIST ITEM -->
          <li class="link-list-item">
            <a href="#">
              <?php
              echo 'Our Sponsors';
              ?>
              <!-- SVG ARROW -->
              <svg class="svg-arrow tiny">
                <use xlink:href="#svg-arrow"></use>
              </svg>
              <!-- /SVG ARROW -->
            </a>
          </li>
          <!-- /LINK LIST ITEM -->

          <!-- LINK LIST ITEM -->
          <li class="link-list-item">
            <a href="#">
              <?php
              echo 'Privacy Policy';
              ?>
              <!-- SVG ARROW -->
              <svg class="svg-arrow tiny">
                <use xlink:href="#svg-arrow"></use>
              </svg>
              <!-- /SVG ARROW -->
            </a>
          </li>
          <!-- /LINK LIST ITEM -->

          <!-- LINK LIST ITEM -->
          <li class="link-list-item">
            <a href="#">
              <?php
              echo 'Terms and Conditions';
              ?>
              <!-- SVG ARROW -->
              <svg class="svg-arrow tiny">
                <use xlink:href="#svg-arrow"></use>
              </svg>
              <!-- /SVG ARROW -->
            </a>
          </li>
          <!-- /LINK LIST ITEM -->

          <!-- LINK LIST ITEM -->
          <li class="link-list-item">
            <a href="#">
              <?php
              echo 'Pay on Arrival';
              ?>
              <!-- SVG ARROW -->
              <svg class="svg-arrow tiny">
                <use xlink:href="#svg-arrow"></use>
              </svg>
              <!-- /SVG ARROW -->
            </a>
          </li>
          <!-- /LINK LIST ITEM -->
        </ul>
        <!-- /LINK LIST -->
      </div>
      <!-- /CONTENT DROPDOWN COLUMN -->

      <!-- CONTENT DROPDOWN COLUMN -->
      <div class="content-dropdown-column full">
        <h6 class="title small secondary"><?php echo 'Quick Contact';?></h6>
        <hr class="line-separator">
        <p class="description"><?php echo 'You can contact by using our contact number or email us below by using our email info@pcworldz.com';?></p>
        <form class="quick-contact-form">
          <input type="text" class="dark" name="qc_email" placeholder="Email">
          <textarea name="qc_message" class="dark" placeholder="Message"></textarea>
          <button class="button small"><?php echo 'Send Message';?></button>
        </form>
      </div>
      <!-- /CONTENT DROPDOWN COLUMN -->
    </div>
    <!-- /FOOTER TOP -->

    <!-- FOOTER BOTTOM -->
    <div class="footer-bottom">
      <h6 class="title tiny secondary"><?php echo 'Payment Methods:';?></h6>
      <!-- PAYMENT LIST -->
      <ul class="payment-list">
        <!-- PAYMENT LIST ITEM -->
        <li class="payment-list-item">
          <a href="#">
            <img src="img/home/card_01.png" alt="card01">
          </a>
        </li>
        <!-- PAYMENT LIST ITEM -->

        <!-- PAYMENT LIST ITEM -->
        <li class="payment-list-item">
          <a href="#">
            <img src="img/home/card_02.png" alt="card02">
          </a>
        </li>
        <!-- PAYMENT LIST ITEM -->

        <!-- PAYMENT LIST ITEM -->
        <li class="payment-list-item">
          <a href="#">
            <img src="img/home/card_03.png" alt="card03">
          </a>
        </li>
        <!-- PAYMENT LIST ITEM -->

        <!-- PAYMENT LIST ITEM -->
        <li class="payment-list-item">
          <a href="#">
            <img src="img/home/card_04.png" alt="card04">
          </a>
        </li>
        <!-- PAYMENT LIST ITEM -->

        <!-- PAYMENT LIST ITEM -->
        <li class="payment-list-item">
          <a href="#">
            <img src="img/home/card_05.png" alt="card05">
          </a>
        </li>
        <!-- PAYMENT LIST ITEM -->

        <!-- PAYMENT LIST ITEM -->
        <li class="payment-list-item">
          <a href="#">
            <img src="img/home/card_06.png" alt="card06">
          </a>
        </li>
        <!-- PAYMENT LIST ITEM -->
      </ul>
      <!-- /PAYMENT LIST -->
    </div>
    <!-- /FOOTER BOTTOM -->
  </footer>
  <!-- /FOOTER WRAP -->

  <!-- WIDGET LINE WRAP -->
  <div class="widget-line-wrap dark widget-line-copy">
    <!-- WIDGET LINE -->
    <div class="widget-line big">
      <p class="copyright"><span class="bold"><?php echo 'PC WORLDZ';?></span><?php echo '| All Rights Reserved 2022';?></p>
      <!-- ACTIONS LIST -->
      <ul class="actions-list right">
        <!-- ACTIONS LIST ITEM -->
        <li class="actions-list-item">
          <!-- SOCIAL LINK -->
          <div class="social-link">
            <a href="#">
              <i class="fa fa-facebook"></i>
            </a>
          </div>
          <!-- /SOCIAL LINK -->
        </li>
        <!-- ACTIONS LIST ITEM -->

        <!-- ACTIONS LIST ITEM -->
        <li class="actions-list-item">
          <!-- SOCIAL LINK -->
          <div class="social-link">
            <a href="#">
              <i class="fa fa-twitter"></i>
            </a>
          </div>
          <!-- /SOCIAL LINK -->
        </li>
        <!-- ACTIONS LIST ITEM -->

        <!-- ACTIONS LIST ITEM -->
        <li class="actions-list-item">
          <!-- SOCIAL LINK -->
          <div class="social-link">
            <a href="#">
              <i class="fa fa-google-plus"></i>
            </a>
          </div>
          <!-- /SOCIAL LINK -->
        </li>
        <!-- ACTIONS LIST ITEM -->

        <!-- ACTIONS LIST ITEM -->
        <li class="actions-list-item">
          <!-- SOCIAL LINK -->
          <div class="social-link">
            <a href="#">
              <i class="fa fa-rss"></i>
            </a>
          </div>
          <!-- /SOCIAL LINK -->
        </li>
        <!-- ACTIONS LIST ITEM -->

        <!-- ACTIONS LIST ITEM -->
        <li class="actions-list-item">
          <!-- SOCIAL LINK -->
          <div class="social-link">
            <a href="#">
              <i class="fa fa-vimeo"></i>
            </a>
          </div>
          <!-- /SOCIAL LINK -->
        </li>
        <!-- ACTIONS LIST ITEM -->
      </ul>
      <!-- ACTIONS LIST -->
    </div>
    <!-- WIDGET LINE -->
  </div>
  <!-- WIDGET LINE WRAP -->

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

  <!-- SVG PLUS -->
  <svg style="display: none;">
  	<symbol id="svg-plus" viewBox="0 0 10 10" preserveAspectRatio="xMinYMin meet">
  		<rect x="4" width="2" height="10"/>
  		<rect y="4" width="10" height="2"/>
  	</symbol>
  </svg>
  <!-- /SVG PLUS -->

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
<!-- masonry -->
<script src="js/vendor/masonry.pkgd.min.js"></script>
<!-- liquid -->
<script src="js/liquid.js"></script>
<!-- dropdowns -->
<script src="js/dropdowns.js"></script>
<!-- popups -->
<script src="js/popups.js"></script>
<!-- posts masonry -->
<script src="js/posts_masonry.js"></script>
</body>
</html>
