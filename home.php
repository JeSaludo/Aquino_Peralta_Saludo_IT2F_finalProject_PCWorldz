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
  <title><?php echo 'PC WORLDZ | Home';?></title>
</head>
<body>

  <!-- FORM POPUP -->
  <!-- dashdgajshdg-->
  <div id="login-popup" class="form-popup medium mfp-hide">
    <!-- CLOSE BTN -->
    <svg class="svg-cross medium close-btn">
      <use xlink:href="#svg-cross"></use>
    </svg>
    <!-- /CLOSE BTN -->

    <!-- FORM POPUP COLUMN -->
    <div class="form-popup-column small">
      <h2 class="subsection-title medium"><?php echo 'Register now!'; ?></h2>
      <hr class="line-separator">
      <p class="small"><?php echo 'Fill all the requirements on the space provided.'; ?></p>
      <!-- FORM -->
      <form>
        <!-- FORM ROW -->
        <div class="form-row">
          <label for="email" class="rl-label"><?php echo 'Email'; ?></label>
          <input type="text" id="email" name="email" placeholder="Enter your email...">
        </div>
        <!-- /FORM ROW -->

        <!-- FORM ROW -->
        <div class="form-row">
          <label for="password" class="rl-label"><?php echo 'Password'; ?></label>
          <input type="password" id="password" name="password" placeholder="Enter your password...">
        </div>
        <!-- /FORM ROW -->

        <!-- FORM ROW -->
        <div class="form-row separated">
          <button class="button dark full"><?php echo 'Register to PC WORLDZ!'; ?></button>
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
      <h2 class="subsection-title medium"><?php echo 'Login to PC WORLDZ'; ?></h2>
      <hr class="line-separator">
      <!-- FORM -->
      <form>
        <!-- FORM ROW -->
        <div class="form-row">
          <label for="username" class="rl-label"><?php echo 'Username'; ?></label>
          <input type="text" id="username" name="username" placeholder="Enter your username...">
        </div>
        <!-- /FORM ROW -->

        <!-- FORM ROW -->
        <div class="form-row">
          <label for="password2" class="rl-label"><?php echo 'Password'; ?></label>
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
						<?php echo 'Keep me logged in'; ?>
					</label>
					<!-- /CHECKBOX -->

          <a href="#" class="link"><?php echo 'Forgot password?'; ?></a>
        </div>
        <!-- /FORM ROW -->

        <!-- FORM ROW -->
        <div class="form-row short-space separated">
          <button class="button full"><?php echo 'Login to your Account'; ?></button>
        </div>
        <!-- /FORM ROW -->

        <!-- FORM ROW -->
        <div class="form-row">
          <div class="half">
            <a href="#" class="button blue full"><?php echo 'Facebook Login'; ?></a>
          </div>
          <div class="half">
            <a href="#" class="button lightblue full"><?php echo 'Twitter Login'; ?></a>
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
            <span class="language-selected-option"><?php echo 'eng'; ?></span>
            <!-- SVG ARROW -->
  					<svg class="svg-arrow small face-down">
  						<use xlink:href="#svg-arrow"></use>
  					</svg>
  					<!-- /SVG ARROW -->
          </a>

          <!-- DROPDOWN LIST -->
          <ul class="dropdown-list dropdown">
            <li data-language="eng" class="dropdown-list-item language-option selected">
              <a href="#"><?php echo 'eng'; ?></a>
            </li>
            <li data-language="spa" class="dropdown-list-item language-option">
              <a href="#"><?php echo 'spa'; ?></a>
            </li>
            <li data-language="ger" class="dropdown-list-item language-option">
              <a href="#"><?php echo 'ger'; ?></a>
            </li>
          </ul>
          <!-- /DROPDOWN LIST -->
        </li>
        <!-- ACTIONS LIST ITEM -->

        <!-- ACTIONS LIST ITEM -->
        <li class="actions-list-item">
          <a class="action-button options-dropdown dropdown-control click-closable" href="#">
            <span class="currency-selected-option"><?php echo 'usd'; ?></span>
            <!-- SVG ARROW -->
  					<svg class="svg-arrow small face-down">
  						<use xlink:href="#svg-arrow"></use>
  					</svg>
  					<!-- /SVG ARROW -->
          </a>

          <!-- DROPDOWN LIST -->
          <ul class="dropdown-list dropdown">
            <li data-currency="usd" class="dropdown-list-item currency-option selected">
              <a href="#"><?php echo 'usd'; ?></a>
            </li>
            <li data-currency="euro" class="dropdown-list-item currency-option">
              <a href="#"><?php echo 'euro'; ?></a>
            </li>
          </ul>
          <!-- /DROPDOWN LIST -->
        </li>
        <!-- ACTIONS LIST ITEM -->

        <!-- ACTIONS LIST ITEM -->
        <li class="actions-list-item">
          <a class="action-button" href="profile.php"><?php echo 'My Account'; ?></a>
        </li>
        <!-- ACTIONS LIST ITEM -->

        <!-- ACTIONS LIST ITEM -->
        <li class="actions-list-item">
          <a class="action-button" href="wishlist.php"><?php echo 'Wishlist'; ?><span class="bold"><?php echo '4'; ?></span></a>
        </li>
        <!-- ACTIONS LIST ITEM -->

        <!-- ACTIONS LIST ITEM -->
        <li class="actions-list-item">
          <a class="action-button" href="index.php"><?php echo 'Logout'; ?></a>
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
        <figcaption><?php echo 'PC WORLDZ'; ?></figcaption>
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
                <p class="product-description small"><?php echo 'Gaming'; ?></p>
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
                <p class="product-quantity"><?php echo 'x4'; ?></p>
                <p class="product-price"><br><br>
                <?php echo '???233,848'; ?>
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
                <p class="product-description small"><?php echo 'Gaming'; ?></p>
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
                <p class="product-quantity">x2</p>
                <p class="product-price"><br><br>              
                <?php echo '???57,032'; ?>
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
                <p class="product-description small"><?php echo 'Gaming'; ?></p>
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
                <p class="product-quantity">x1</p>
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
            <p class="title small"><?php echo 'Cart Subtotal'; ?></p>
            <p class="product-price"><?php echo '???303,827'; ?></p>
          </div>
          <!-- /CART DROPDOWN SUBTOTAL -->

          <!-- CART DROPDOWN ACTIONS -->
          <div class="cart-dropdown-actions">
            <a href="cart.php" class="button dark large"><?php echo 'Go to the Cart'; ?></a>
            <a href="identification.php" class="button large"><?php echo 'Go to Checkout'; ?></a>
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
          <a href="home.php"><?php echo 'Home'; ?></a>
        </li>
        <!-- /MAIN MENU ITEM -->

        <!-- MAIN MENU ITEM -->
        <li class="main-menu-item">
          <a href="aboutus.php"><?php echo 'About'; ?></a>
        </li>
        <!-- /MAIN MENU ITEM -->

        <!-- MAIN MENU ITEM -->
        <li class="main-menu-item">
          <a href="shop-list.php">
          <?php echo 'Shop'; ?>            
          </a>

          <!-- MENU DROPDOWN -->
          <ul class="menu-dropdown">           
            <!-- MENU DROPDOWN ITEM -->
            <li class="menu-dropdown-item">
              <a href="shop-list.php"><?php echo 'Motherboards'; ?></a>
            </li>
            <li class="menu-dropdown-item">
              <a href="shop-list2.php"><?php echo 'Processors'; ?></a>
            </li>
            <li class="menu-dropdown-item">
              <a href="shop-list3.php"><?php echo 'Graphic Cards'; ?></a>
            </li>
             
            </li>
           
          </ul>
          <!-- /MENU DROPDOWN -->
        </li>
        <!-- /MAIN MENU ITEM -->

        <!-- MAIN MENU ITEM -->
        <li class="main-menu-item">
          <a href="blog.php"><?php echo 'Our Blog'; ?></a>
        </li>
        <!-- /MAIN MENU ITEM -->

        <!-- MAIN MENU ITEM -->
        <li class="main-menu-item sub">
          <a href="#">
          <?php echo 'Features'; ?>
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
              <h6 class="title tiny secondary"><?php echo 'Account'; ?></h6>
              <hr class="line-separator">
              <!-- LINK LIST -->
              <ul class="link-list simple">
                <!-- LINK LIST ITEM -->
                <li class="link-list-item">
                  <a href="identification.php"><?php echo 'Identification'; ?></a>
                </li>
                <!-- /LINK LIST ITEM -->

                <!-- LINK LIST ITEM -->
                <li class="link-list-item">
                  <a href="billing-shipping.php"><?php echo 'Billing and Shipping'; ?></a>
                </li>
                <!-- /LINK LIST ITEM -->

                <!-- LINK LIST ITEM -->
                <li class="link-list-item">
                  <a href="confirmation.php"><?php echo 'Confirmation'; ?></a>
                </li>
                <!-- /LINK LIST ITEM -->

                <!-- LINK LIST ITEM -->
                <li class="link-list-item">
                  <a href="cart.php"><?php echo 'Shopping Cart'; ?></a>
                </li>
                <!-- /LINK LIST ITEM -->

                <!-- LINK LIST ITEM -->
                <li class="link-list-item">
                  <a href="wishlist.php"><?php echo 'Wishlist'; ?></a>
                </li>
                <!-- /LINK LIST ITEM -->

                <!-- LINK LIST ITEM -->
                <li class="link-list-item">
                  <a href="profile.php"><?php echo 'Your Account'; ?></a>
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
          <a href="contactus.php"><?php echo 'Contact'; ?></a>
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
        <a href="home.php"><?php echo 'Home'; ?></a>
      </li>
      <!-- /MOBILE MENU ITEM -->

      <!-- MOBILE MENU ITEM -->
      <li class="mobile-menu-item">
        <a href="aboutus.php"><?php echo 'About'; ?></a>
      </li>
      <!-- /MOBILE MENU ITEM -->

      <!-- MOBILE MENU ITEM -->
      <li class="mobile-menu-item">
        <a href="#" class="dropdown-control">
        <?php echo 'Shop'; ?>          
        </a>

        <!-- MOBILE MENU DROPDOWN -->
        <ul class="mobile-menu-dropdown dropdown">         
          
          <li class="mobile-menu-dropdown-item">
            <a href="shop-list2.php"><?php echo 'Motherboards'; ?></a>
          </li>
          <li class="mobile-menu-dropdown-item">
            <a href="shop-list2.php"><?php echo 'Processors'; ?></a>
          </li>
          <li class="mobile-menu-dropdown-item">
            <a href="shop-list2.php"><?php echo 'Graphic Cards'; ?></a>
          </li>
          
        </ul>
        <!-- /MOBILE MENU DROPDOWN -->
      </li>
      <!-- /MOBILE MENU ITEM -->

      <!-- MOBILE MENU ITEM -->
      <li class="mobile-menu-item">
        <a href="blog.php"><?php echo 'Our Blog'; ?></a>
      </li>
      <!-- /MOBILE MENU ITEM -->

      <!-- MOBILE MENU ITEM -->
      <li class="mobile-menu-item">
        <a href="#" class="dropdown-control">
          Features
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
            <a href="aboutus.php"><?php echo 'About'; ?></a>
          </li>
          
          <!-- MOBILE MENU DROPDOWN ITEM -->
          <li class="mobile-menu-dropdown-item">
            <a href="identification.php"><?php echo 'Identification'; ?></a>
          </li>
          <!-- /MOBILE MENU DROPDOWN ITEM -->

          <!-- MOBILE MENU DROPDOWN ITEM -->
          <li class="mobile-menu-dropdown-item">
            <a href="billing-shipping.php"><?php echo 'Billing and Shipping'; ?></a>
          </li>
          <!-- /MOBILE MENU DROPDOWN ITEM -->

          <!-- MOBILE MENU DROPDOWN ITEM -->
          <li class="mobile-menu-dropdown-item">
            <a href="confirmation.php"><?php echo 'Confirmation'; ?></a>
          </li>
          <!-- /MOBILE MENU DROPDOWN ITEM -->

          <!-- MOBILE MENU DROPDOWN ITEM -->
          <li class="mobile-menu-dropdown-item">
            <a href="cart.php"><?php echo 'Shopping Cart'; ?></a>
          </li>
          <!-- /MOBILE MENU DROPDOWN ITEM -->

          <!-- MOBILE MENU DROPDOWN ITEM -->
          <li class="mobile-menu-dropdown-item">
            <a href="wishlist.php"><?php echo 'Wishlist'; ?></a>
          </li>
          <!-- /MOBILE MENU DROPDOWN ITEM -->

          <!-- MOBILE MENU DROPDOWN ITEM -->
          <li class="mobile-menu-dropdown-item">
            <a href="profile.php"><?php echo 'Your Account'; ?></a>
          </li>
          <!-- /MOBILE MENU DROPDOWN ITEM -->
        </ul>
        <!-- /MOBILE MENU DROPDOWN -->
      </li>
      <!-- /MOBILE MENU ITEM -->

      <!-- MOBILE MENU ITEM -->
      <li class="mobile-menu-item">
        <a href="contactus.php"><?php echo 'Contact'; ?></a>
      </li>
      <!-- /MOBILE MENU ITEM -->

      <!-- MOBILE MENU ITEM -->
      <li class="mobile-menu-item">
        <a href="profile.php"><?php echo 'My Account'; ?></a>
      </li>
      <!-- /MOBILE MENU ITEM -->

      <!-- MOBILE MENU ITEM -->
      <li class="mobile-menu-item">
        <a href="wishlist.php">
        <?php echo 'Wishlist'; ?>
          <span class="bold"><?php echo '4'; ?></span>
        </a>
      </li>
      <!-- /MOBILE MENU ITEM -->

      <!-- MOBILE MENU ITEM -->
      <li class="mobile-menu-item">
        <a href="#" class="dropdown-control">
        <?php echo 'Language:'; ?>
          <span class="selected-option language-selected-option"><?php echo 'eng'; ?></span>
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
            <a href="#"><?php echo 'eng'; ?></a>
          </li>
          <!-- /MOBILE MENU DROPDOWN ITEM -->

          <!-- MOBILE MENU DROPDOWN ITEM -->
          <li data-language="spa" class="mobile-menu-dropdown-item language-option">
            <a href="#"><?php echo 'eu'; ?></a>
          </li>
          <!-- /MOBILE MENU DROPDOWN ITEM -->

          <!-- MOBILE MENU DROPDOWN ITEM -->
          <li data-language="ger" class="mobile-menu-dropdown-item language-option">
            <a href="#"><?php echo 'spa'; ?></a>
          </li>
          <!-- /MOBILE MENU DROPDOWN ITEM -->
        </ul>
        <!-- /MOBILE MENU DROPDOWN -->
      </li>
      <!-- /MOBILE MENU ITEM -->

      <!-- MOBILE MENU ITEM -->
      <li class="mobile-menu-item">
        <a href="#" class="dropdown-control">
        <?php echo 'Currency:'; ?>
          <span class="selected-option currency-selected-option"><?php echo 'usd'; ?></span>
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
            <a href="#"><?php echo 'usd'; ?></a>
          </li>
          <!-- /MOBILE MENU DROPDOWN ITEM -->

          <!-- MOBILE MENU DROPDOWN ITEM -->
          <li data-currency="euro" class="mobile-menu-dropdown-item currency-option">
            <a href="#"><?php echo 'euro'; ?></a>
          </li>

          
          <!-- /MOBILE MENU DROPDOWN ITEM -->
        </ul>
        <!-- /MOBILE MENU DROPDOWN -->
      </li>
      <!-- /MOBILE MENU ITEM -->

      <!-- MOBILE MENU ITEM -->
      <li class="mobile-menu-item void">
        <a href="#"><?php echo 'Logout'; ?></a>
      </li>
      <!-- /MOBILE MENU ITEM -->
    </ul>
    <!-- /MOBILE MENU -->
  </div>
  <!-- /MOBILE MENU WRAP -->

  <!-- MAIN SLIDER -->
  <div class="main-slider">
    <!-- SLIDER CONTROLS -->
    <div class="slider-controls">
      <!-- SLIDER CONTROL -->
      <div class="slider-control"></div>
      <!-- SLIDER CONTROL -->

      <!-- SLIDER CONTROL -->
      <div class="slider-control"></div>
      <!-- SLIDER CONTROL -->

      <!-- SLIDER CONTROL -->
      <div class="slider-control"></div>
      <!-- SLIDER CONTROL -->
    </div>
    <!-- /SLIDER CONTROLS -->

    <!-- SLIDE LIST -->
    <div class="slide-list">
      <!-- SLIDE -->
      <div class="slide slide-1">
        <!-- SLIDE CONTENT WRAP -->
        <div class="slide-content-wrap">
          <!-- SLIDE CONTENT -->
          <div class="slide-content">
            <h2 class="banner-title tiny"><?php echo 'WELCOME TO'; ?></h2>
            <h2 class="banner-title"><?php echo 'PC WORLDZ'; ?></h2>
            <h2 class="banner-title micro"><?php echo 'You have hundreds of pc parts to choose from!';?></h2>
          </div>
          <!-- SLIDE CONTENT -->
        </div>
        <!-- SLIDE CONTENT WRAP -->
      </div>
      <!-- SLIDE -->

      <!-- SLIDE -->
      <div class="slide slide-2">
        <!-- SLIDE CONTENT WRAP -->
        <div class="slide-content-wrap">
          <!-- SLIDE CONTENT -->
          <div class="slide-content">
            <h2 class="banner-title small"><?php echo 'We have'; ?></h2>
            <h2 class="banner-title"><span class="highlighted"><?php echo 'High-end'; ?></span></h2>
            <h2 class="banner-title"><?php echo 'PC Parts'; ?></h2>
            <h2 class="banner-title micro"><?php echo 'Hundreds of brands to choose from!'; ?></h2>
            <a href="shop-list.php" class="button"><?php echo 'Explore now!'; ?></a>

          </div>
          <!-- SLIDE CONTENT -->
        </div>
        <!-- SLIDE CONTENT WRAP -->
      </div>
      <!-- SLIDE -->

      <!-- SLIDE -->
      <div class="slide slide-3">
        <!-- SLIDE CONTENT WRAP -->
        <div class="slide-content-wrap">
          <!-- SLIDE CONTENT -->
          <div class="slide-content">
            <h2 class="banner-title dark large"><?php echo 'Choose'; ?></h2>
            <h2 class="banner-title main medium"><?php echo 'Your Parts'; ?></h2>
            <h2 class="banner-title micro light"><?php echo 'Build your dream gaming PC!'; ?></h2>
            <a href="shop-list.php" class="button"><?php echo 'Lets Go!'; ?> </a>
          </div>
          <!-- SLIDE CONTENT -->
        </div>
        <!-- SLIDE CONTENT WRAP -->
      </div>
      <!-- SLIDE -->
    </div>
    <!-- /SLIDE LIST -->
  </div>
  <!-- /MAIN SLIDER -->

  <!-- BUILDER ACTIONS -->
  <div class="builder-actions column-full-3-wrap">
    <!-- BUILDER ACTIONS ITEM WRAP -->
    <div class="builder-actions-item-wrap column">
      <!-- BUILDER ACTIONS ITEM -->
      <div class="builder-actions-item">
        <img src="img/home/start01.png" alt="start01">
        <h6 class="title"><?php echo 'Motherboard'; ?></h6>
        <p><?php echo 'Better optimization'; ?></p>
        <a href="shop-list.php" class="button small"><?php echo 'Explore'; ?></a>
      </div>
      <!-- /BUILDER ACTIONS ITEM -->
    </div>
    <!-- /BUILDER ACTIONS ITEM WRAP -->

    <!-- BUILDER ACTIONS ITEM WRAP -->
    <div class="builder-actions-item-wrap column">
      <!-- BUILDER ACTIONS ITEM -->
      <div class="builder-actions-item">
        <img src="img/home/start02.png" alt="start02">
        <h6 class="title"><?php echo 'Processor'; ?></h6>
        <p><?php echo 'Faster than ever'; ?></p>
        <a href="shop-list2.php" class="button small"><?php echo 'Explore'; ?></a>
      </div>
      <!-- /BUILDER ACTIONS ITEM -->
    </div>
    <!-- /BUILDER ACTIONS ITEM WRAP -->

    <!-- BUILDER ACTIONS ITEM WRAP -->
    <div class="builder-actions-item-wrap column">
      <!-- BUILDER ACTIONS ITEM -->
      <div class="builder-actions-item">
        <img src="img/home/start03.png" alt="start03">
        <h6 class="title"><?php echo 'GRAPHICS CARD'; ?></h6>
        <p><?php echo 'Boost your gaming experience'; ?></p>
        <a href="shop-list3.php" class="button small"><?php echo 'Explore'; ?></a>
      </div>
      <!-- /BUILDER ACTIONS ITEM -->
    </div>
    <!-- /BUILDER ACTIONS ITEM WRAP -->
  </div>
  <!-- /BUILDER ACTIONS -->

  <!-- SECTION WRAP -->
  <div class="section-wrap welcome-section-wrap">
    <!-- WELCOME SECTION -->
    <div class="welcome-section section">
      <h6 class="pretitle"><?php echo 'Build your own gaming PC right now!'; ?></h6>
      <h3 class="title large"><?php echo 'Welcome to PC WORLDZ'; ?></h3>
      <hr class="line-separator short">
      <p class="section-description"><?php echo 'We are dedicated to give you the very best of Computer Products, with a focus on quality, price and uniqueness. Founded in 2022 by Saludo, Peralta and Aquino, PC WORLDZ serves customer worldwide, and are thrilled to be a part of the fair trade wing of the IT industry.'; echo 'We hope you enjoy our products as much as we enjoy offering them to you. If you have any questions or comments, please do not hesitate to contact us.'; ?></p>
    </div>
    <!-- /WELCOME SECTION -->
  </div>
  <!-- /SECTION WRAP -->

  <!-- ACTION POSTER WRAP -->
  <div class="action-poster-wrap">
    <!-- ACTION POSTER -->
    <div class="action-poster">
      <!-- ACTION POSTER INFO -->
      <div class="action-poster-info">
        <h3 class="title"><?php echo 'Check our'; ?> <span class="bold"><?php echo 'Available Items'; ?></span></h3>
        <p><?php echo 'Carefully Designed by Experts'; ?></p>
      </div>
      <!-- /ACTION POSTER INFO -->

      <a href="shop-list.php" class="button medium with-icon">
      <?php echo 'Start Browsing'; ?>
        <!-- SVG ARROW -->
        <svg class="svg-arrow">
          <use xlink:href="#svg-arrow"></use>
        </svg>
        <!-- /SVG ARROW -->
      </a>
    </div>
    <!-- /ACTION POSTER -->
  </div>
  <!-- /ACTION POSTER WRAP -->

  <!-- SECTION WRAP -->
  <div class="section-wrap">
    <!-- FEATURES SECTION -->
    <div class="features-section section">
      <h6 class="pretitle"><?php echo 'Take a Peek to the'; ?></h6>
      <h3 class="title large"><?php echo 'PC WORLDZ FEATURES'; ?></h3>
      <hr class="line-separator">
      <!-- BG DECORATION -->
      <img src="img/home/features.png" alt="features" class="bg-decoration">

      <!-- FEATURE LIST -->
      <ul class="feature-list small">
        <!-- FEATURE LIST ITEM -->
        <li class="feature-list-item">
          <!-- SVG CHECK -->
          <svg class="svg-check medium">
            <use xlink:href="#svg-check"></use>
          </svg>
          <!-- /SVG CHECK -->
          <p class="title"><?php echo 'Original Products'; ?></p>
          <p><?php echo 'You can make sure that all of the products that you buy here is original because we do not sell fake products'; ?></p>
        </li>
        <!-- /FEATURE LIST ITEM -->

        <!-- FEATURE LIST ITEM -->
        <li class="feature-list-item">
          <!-- SVG CHECK -->
          <svg class="svg-check medium">
            <use xlink:href="#svg-check"></use>
          </svg>
          <!-- /SVG CHECK -->
          <p class="title"><?php echo 'Affordable Pricess'; ?></p>
          <p><?php echo 'We lowered our price but depends on the product.'; ?></p>
        </li>
        <!-- /FEATURE LIST ITEM -->

        <!-- FEATURE LIST ITEM -->
        <li class="feature-list-item">
          <!-- SVG CHECK -->
          <svg class="svg-check medium">
            <use xlink:href="#svg-check"></use>
          </svg>
          <!-- /SVG CHECK -->
          <p class="title"><?php echo 'Fast Shipping'; ?></p>
          <p><?php echo 'We ship our products as fast as possible.'; ?></p>
        </li>
        <!-- /FEATURE LIST ITEM -->

        <!-- FEATURE LIST ITEM -->
        <li class="feature-list-item">
          <!-- SVG CHECK -->
          <svg class="svg-check medium">
            <use xlink:href="#svg-check"></use>
          </svg>
          <!-- /SVG CHECK -->
          <p class="title"><?php echo '24/7 Customer Support'; ?></p>
          <p><?php echo 'We will keep updated to our customer support 24/7.'; ?></p>
        </li>
        <!-- /FEATURE LIST ITEM -->
      </ul>
      <!-- /FEATURE LIST -->
    </div>
    <!-- /FEATURES SECTION -->
  </div>
  <!-- /SECTION WRAP -->

  <!-- SERVICE BANNERS -->
  <div class="service-banners">
    <!-- SERVICE BANNER -->
    <div class="service-banner main">
      <!-- SERVICE BANNER CONTENT -->
      <div class="service-banner-content">
        <i class="icon-badge s-icon"></i>
        <h5 class="title medium"><?php echo 'Best Quality'; ?></h5>
        <h3 class="title big"><?php echo 'Products'; ?></h3>
        <hr class="line-separator big">
        <p><?php echo 'We have the best quality pc products and items to make your pc at the next level.'; ?></p>
      </div>
      <!-- /SERVICE BANNER CONTENT -->
    </div>
    <!-- /SERVICE BANNER -->

    <!-- SERVICE BANNER -->
    <div class="service-banner secondary">
      <!-- SERVICE BANNER CONTENT -->
      <div class="service-banner-content">
        <i class="icon-like s-icon"></i>
        <h5 class="title medium"><?php echo 'One Year'; ?></h5>
        <h3 class="title big"><?php echo 'Guarantee'; ?></h3>
        <hr class="line-separator big">
        <p><?php echo 'We will make sure that you get the best products in our shop'; ?></p>
      </div>
      <!-- /SERVICE BANNER CONTENT -->
    </div>
    <!-- /SERVICE BANNER -->

    <!-- SERVICE BANNER -->
    <div class="service-banner tertiary">
      <!-- SERVICE BANNER CONTENT -->
      <div class="service-banner-content">
        <i class="icon-rocket s-icon"></i>
        <h5 class="title medium"><?php echo 'Worldwide'; ?></h5>
        <h3 class="title big"><?php echo 'Shipping'; ?></h3>
        <hr class="line-separator big">
        <p><?php echo 'We ship our product all around the world.'; ?></p>
      </div>
      <!-- /SERVICE BANNER CONTENT -->
    </div>
    <!-- /SERVICE BANNER -->
  </div>
  <!-- /SERVICE BANNERS -->

  <!-- SECTION WRAP -->
  <div class="section-wrap">
    <!-- SECTION -->
    <div class="section">
      <!-- STEP LIST -->
      <div class="step-list">
        <!-- STEP LIST ITEM -->
        <div class="step-list-item left">
          <div class="step-list-item-info">
            <h6 class="title medium"><span class="bold"><?php echo '01.'; ?></span></h6>
            <h6 class="title large"><?php echo 'Choose the'; ?><br><?php echo 'PC PARTS'; ?></h6>
            <h6 class="title small"><?php echo 'Starting choosing the items for your PC'; ?></h6>
            <p><?php echo 'We provide computer part selection, compatibility, and pricing under guidance for do-it-yourself computer builders. Please choose wisely.'; ?></p>
          </div>
          <img src="img/home/step01.png" alt="step01" class="step-list-item-img">
        </div>
        <!-- /STEP LIST ITEM -->

        <!-- STEP LIST ITEM -->
        <div class="step-list-item right">
          <div class="step-list-item-info">
            <h6 class="title medium"><span class="bold"><?php echo '02.'; ?></span></h6>
            <h6 class="title large"><?php echo 'Add Items to'; ?><br><?php echo 'Cart'; ?></h6>
            <h6 class="title small"><?php echo 'Do not forget to add desired items to your cart'; ?></h6>
            <p><?php echo 'You can add on product page, select add to cart, preferred variation option, and select add to cart. Do not miss out on exciting deals and discounts.'; ?></p>
          </div>
          <img src="img/home/step02.png" alt="step02" class="step-list-item-img">
        </div>
        <!-- /STEP LIST ITEM -->

        <!-- STEP LIST ITEM -->
        <div class="step-list-item left">
          <div class="step-list-item-info">
            <h6 class="title medium"><span class="bold"><?php echo '03.'; ?></span></h6>
            <h6 class="title large"><?php echo 'Confirm and'; ?><br><?php echo 'YOU ARE DONE'; ?></h6>
            <h6 class="title small"><?php echo 'Finishing the purchase'; ?></h6>
            <p><?php echo 'Purchase and always check the confirmation and use your discount codes if you have one and then checkout.'; ?></p>
          </div>
          <img src="img/home/step03.png" alt="step03" class="step-list-item-img">
        </div>
        <!-- /STEP LIST ITEM -->
      </div>
      <!-- /STEP LIST -->
    </div>
    <!-- /SECTION -->
  </div>
  <!-- /SECTION WRAP -->

  <!-- PROMO BANNERS -->
  <div class="promo-banners">
    <!-- PROMO BANNER -->
    <div class="promo-banner main">
      <!-- PROMO BANNER TITLE WRAP -->
      <div class="promo-banner-title-wrap">
        <h3 class="title title-promo composed"><?php echo '25'; ?></h3>
        <h3 class="title title-percent"><?php echo '%'; ?><br><span class="title-unit"><?php echo 'off'; ?></span></h3>
        <h3 class="title title-extra"><?php echo 'First time'; ?> <br><?php echo 'Purchase'; ?></h3>
      </div>
      <!-- PROMO BANNER TITLE WRAP -->

      <h6 class="title title-description"><?php echo 'Redeeming this code: PCWRLDZ69'; ?></h6>
      <p><?php echo '* code valid untill 08/12/2023 only for first time purchase'; ?></p>
      <a href="#" class="button medium dark"><?php echo 'Buy now!'; ?></a>
    </div>
    <!-- /PROMO BANNER -->

    <!-- PROMO BANNER -->
    <div class="promo-banner dark">
      <!-- PROMO BANNER TITLE WRAP -->
      <div class="promo-banner-title-wrap">
        <h3 class="title title-promo simple"><span class="bold"><?php echo 'Sale'; ?></span></h3>
        <h3 class="title title-extra"><?php echo 'Black'; ?> <br><?php echo 'Friday'; ?></h3>
      </div>
      <!-- PROMO BANNER TITLE WRAP -->

      <h6 class="title title-description"><?php echo 'Amazing discounts all day long!'; ?></h6>
      <p><?php echo '* discount valid untill 08/12/2023'; ?></p>
      <a href="#" class="button medium with-icon">
      <?php echo 'Check all deals'; ?>
        <!-- SVG ARROW -->
        <svg class="svg-arrow">
          <use xlink:href="#svg-arrow"></use>
        </svg>
        <!-- /SVG ARROW -->
      </a>
    </div>
    <!-- /PROMO BANNER -->
  </div>
  <!-- /PROMO BANNERS -->

  <!-- SECTION WRAP -->
  <div class="section-wrap">
    <!-- SECTION -->
    <div class="section bottom-short">
      <h6 class="pretitle"><?php echo 'PC WORLDZ'; ?></h6>
      <h3 class="title large"><?php echo 'Latest Arrivals'; ?></h3>
      <hr class="line-separator">

      <!-- PRODUCT LIST -->
      <div class="product-list column-4-wrap">
        <!-- PRODUCT LIST ITEM -->
        <div class="product-list-item column">
          <!-- PRODUCT LIST ITEM PREVIEW -->
          <div class="product-list-item-preview">
            <!-- PRODUCT IMG -->
            <figure class="product-img">
              <img src="img/products/01.jpg" alt="product01">
            </figure>
            <!-- /PRODUCT IMG -->

            <!-- PRODUCT LIST ITEM ACTIONS -->
            <div class="product-list-item-actions">
              <!-- BUTTON LIST -->
              <div class="button-list wrap-4">
                <!-- BUTTON -->
                <a href="#" class="button square">
                  <!-- SVG CART -->
                  <svg class="svg-cart-small">
                    <use xlink:href="#svg-cart-small"></use>
                  </svg>
                  <!-- /SVG CART -->
                </a>
                <!-- /BUTTON -->

                <!-- BUTTON -->
                <a href="#" class="button square">
                  <!-- SVG HEART -->
                  <svg class="svg-heart">
                    <use xlink:href="#svg-heart"></use>
                  </svg>
                  <!-- /SVG HEART -->
                </a>
                <!-- /BUTTON -->

                <!-- BUTTON -->
                <a href="#" class="button square">
                  <i class="fa fa-facebook"></i>
                </a>
                <!-- /BUTTON -->

                <!-- BUTTON -->
                <a href="#" class="button square">
                  <i class="fa fa-twitter"></i>
                </a>
                <!-- /BUTTON -->
              </div>
              <!-- /BUTTON LIST -->
            </div>
            <!-- /PRODUCT LIST ITEM ACTIONS -->
          </div>
          <!-- /PRODUCT LIST ITEM PREVIEW -->

          <!-- PRODUCT LIST ITEM INFO -->
          <div class="product-list-item-info">
            <a href="#"><h6 class="title"><?php echo 'RTX 3080'; ?></h6></a>
            <p class="product-description"><?php echo 'NVIDIA'; ?></p>
            <!-- PRODUCT LIST ITEM PRICE -->
            <div class="product-list-item-price">
              <!-- RATING -->
              <ul class="rating">
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
              <h6 class="product-price"><?php echo '$699'; ?></h6>
            </div>
            <!-- /PRODUCT LIST ITEM PRICE -->
          </div>
          <!-- /PRODUCT LIST ITEM INFO -->
        </div>
        <!-- /PRODUCT LIST ITEM -->

        <!-- PRODUCT LIST ITEM -->
        <div class="product-list-item column">
          <!-- PRODUCT LIST ITEM PREVIEW -->
          <div class="product-list-item-preview">
            <!-- PRODUCT IMG -->
            <figure class="product-img">
              <img src="img/products/02.jpg" alt="product02">
            </figure>
            <!-- /PRODUCT IMG -->

            <!-- PRODUCT LIST ITEM ACTIONS -->
            <div class="product-list-item-actions">
              <!-- BUTTON LIST -->
              <div class="button-list wrap-4">
                <!-- BUTTON -->
                <a href="#" class="button square">
                  <!-- SVG CART -->
                  <svg class="svg-cart-small">
                    <use xlink:href="#svg-cart-small"></use>
                  </svg>
                  <!-- /SVG CART -->
                </a>
                <!-- /BUTTON -->

                <!-- BUTTON -->
                <a href="#" class="button square">
                  <!-- SVG HEART -->
                  <svg class="svg-heart">
                    <use xlink:href="#svg-heart"></use>
                  </svg>
                  <!-- /SVG HEART -->
                </a>
                <!-- /BUTTON -->

                <!-- BUTTON -->
                <a href="#" class="button square">
                  <i class="fa fa-facebook"></i>
                </a>
                <!-- /BUTTON -->

                <!-- BUTTON -->
                <a href="#" class="button square">
                  <i class="fa fa-twitter"></i>
                </a>
                <!-- /BUTTON -->
              </div>
              <!-- /BUTTON LIST -->
            </div>
            <!-- /PRODUCT LIST ITEM ACTIONS -->
          </div>
          <!-- /PRODUCT LIST ITEM PREVIEW -->

          <!-- PRODUCT LIST ITEM INFO -->
          <div class="product-list-item-info">
            <a href="#"><h6 class="title"><?php echo 'Intel Core i9'; ?></h6></a>
            <p class="product-description"><?php echo 'Intel'; ?></p>
            <!-- PRODUCT LIST ITEM PRICE -->
            <div class="product-list-item-price">
              <!-- RATING -->
              <ul class="rating">
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
                <li class="rating-item filled">
                  <!-- SVG STAR -->
                  <svg class="svg-star">
                    <use xlink:href="#svg-star"></use>
                  </svg>
                  <!-- /SVG STAR -->
                </li>
                <!-- /RATING ITEM -->
              </ul>
              <!-- /RATING -->
              <h6 class="product-price"><?php echo '$399'; ?></h6>
            </div>
            <!-- /PRODUCT LIST ITEM PRICE -->
          </div>
          <!-- /PRODUCT LIST ITEM INFO -->
        </div>
        <!-- /PRODUCT LIST ITEM -->

        <!-- PRODUCT LIST ITEM -->
        <div class="product-list-item column">
          <!-- PRODUCT LIST ITEM PREVIEW -->
          <div class="product-list-item-preview">
            <!-- PRODUCT IMG -->
            <figure class="product-img">
              <img src="img/products/03.jpg" alt="product03">
            </figure>
            <!-- /PRODUCT IMG -->

            <!-- PRODUCT LIST ITEM ACTIONS -->
            <div class="product-list-item-actions">
              <!-- BUTTON LIST -->
              <div class="button-list wrap-4">
                <!-- BUTTON -->
                <a href="#" class="button square">
                  <!-- SVG CART -->
                  <svg class="svg-cart-small">
                    <use xlink:href="#svg-cart-small"></use>
                  </svg>
                  <!-- /SVG CART -->
                </a>
                <!-- /BUTTON -->

                <!-- BUTTON -->
                <a href="#" class="button square">
                  <!-- SVG HEART -->
                  <svg class="svg-heart">
                    <use xlink:href="#svg-heart"></use>
                  </svg>
                  <!-- /SVG HEART -->
                </a>
                <!-- /BUTTON -->

                <!-- BUTTON -->
                <a href="#" class="button square">
                  <i class="fa fa-facebook"></i>
                </a>
                <!-- /BUTTON -->

                <!-- BUTTON -->
                <a href="#" class="button square">
                  <i class="fa fa-twitter"></i>
                </a>
                <!-- /BUTTON -->
              </div>
              <!-- /BUTTON LIST -->
            </div>
            <!-- /PRODUCT LIST ITEM ACTIONS -->
          </div>
          <!-- /PRODUCT LIST ITEM PREVIEW -->

          <!-- PRODUCT LIST ITEM INFO -->
          <div class="product-list-item-info">
            <a href="#"><h6 class="title"><?php echo 'ROG STRIX Z490-H'; ?> </h6></a>
            <p class="product-description"><?php echo 'Republic of Gamers'; ?></p>
            <!-- PRODUCT LIST ITEM PRICE -->
            <div class="product-list-item-price">
              <!-- RATING -->
              <ul class="rating">
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
              <h6 class="product-price"><?php echo '$287'; ?></h6>
            </div>
            <!-- /PRODUCT LIST ITEM PRICE -->
          </div>
          <!-- /PRODUCT LIST ITEM INFO -->
        </div>
        <!-- /PRODUCT LIST ITEM -->

        <!-- PRODUCT LIST ITEM -->
        <div class="product-list-item column">
          <!-- PRODUCT LIST ITEM PREVIEW -->
          <div class="product-list-item-preview">
            <!-- PRODUCT IMG -->
            <figure class="product-img">
              <img src="img/products/04.jpg" alt="product04">
            </figure>
            <!-- /PRODUCT IMG -->

            <!-- PRODUCT LIST ITEM ACTIONS -->
            <div class="product-list-item-actions">
              <!-- BUTTON LIST -->
              <div class="button-list wrap-4">
                <!-- BUTTON -->
                <a href="#" class="button square">
                  <!-- SVG CART -->
                  <svg class="svg-cart-small">
                    <use xlink:href="#svg-cart-small"></use>
                  </svg>
                  <!-- /SVG CART -->
                </a>
                <!-- /BUTTON -->

                <!-- BUTTON -->
                <a href="#" class="button square">
                  <!-- SVG HEART -->
                  <svg class="svg-heart">
                    <use xlink:href="#svg-heart"></use>
                  </svg>
                  <!-- /SVG HEART -->
                </a>
                <!-- /BUTTON -->

                <!-- BUTTON -->
                <a href="#" class="button square">
                  <i class="fa fa-facebook"></i>
                </a>
                <!-- /BUTTON -->

                <!-- BUTTON -->
                <a href="#" class="button square">
                  <i class="fa fa-twitter"></i>
                </a>
                <!-- /BUTTON -->
              </div>
              <!-- /BUTTON LIST -->
            </div>
            <!-- /PRODUCT LIST ITEM ACTIONS -->
          </div>
          <!-- /PRODUCT LIST ITEM PREVIEW -->

          <!-- PRODUCT LIST ITEM INFO -->
          <div class="product-list-item-info">
            <a href="#"><h6 class="title"><?php echo 'Ryzen 9'; ?></h6></a>
            <p class="product-description"><?php echo 'AMD'; ?></p>
            <!-- PRODUCT LIST ITEM PRICE -->
            <div class="product-list-item-price">
              <!-- RATING -->
              <ul class="rating">
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
              <h6 class="product-price"><?php echo '$461'; ?></h6>
            </div>
            <!-- /PRODUCT LIST ITEM PRICE -->
          </div>
          <!-- /PRODUCT LIST ITEM INFO -->
        </div>
        <!-- /PRODUCT LIST ITEM -->
      </div>
      <!-- /PRODUCT LIST -->
    </div>
    <!-- /SECTION -->
  </div>
  <!-- /SECTION WRAP -->

  <!-- WIDGET FORM WRAP -->
  <div class="widget-form-wrap">
    <!-- WIDGET FORM -->
    <div class="widget-form">
      <!-- WIDGET FORM INFO -->
      <div class="widget-form-info">
        <h6 class="title"><?php echo 'Join our newsletter'; ?></h6>
        <p><?php echo 'Sign up and join.'; ?></p>
      </div>
      <!-- /WIDGET FORM INFO -->

      <!-- WIDGET FORM INPUT -->
      <form class="widget-form-input">
        <input type="text" name="subscribe_email" placeholder="Enter your email here...">
        <i class="icon-envelope"></i>
      </form>
      <!-- /WIDGET FORM INPUT -->
    </div>
    <!-- /WIDGET FORM -->
  </div>
  <!-- /WIDGET FORM WRAP -->

  <!-- FOOTER WRAP -->
  <footer class="footer-wrap">
    <!-- FOOTER TOP -->
    <div class="footer-top">
      <!-- ABOUTUS PREVIEW -->
      <div class="aboutus-preview">
        <!-- LOGO -->
        <figure class="logo">
          <img src="img/logo-footer.png" alt="logo">
          <figcaption><?php echo 'PC WORLDZ'; ?></figcaption>
        </figure>
        <!-- /LOGO -->
        <p class="description"><?php echo 'We are dedicated to give you the very best of Computer Products, with a focus on quality, price and uniqueness. Founded in 2022 by Saludo, Peralta and Aquino, PC WORLDZ serves customer worldwide, and are thrilled to be a part of the fair trade wing of the IT industry.'; ?></p>

        <!-- CONTACTUS LIST -->
        <ul class="contactus-list">
          <!-- CONTACTUS LIST ITEM -->
          <li class="contactus-list-item">
            <i class="s-icon icon-location-pin"></i>
            <p><?php echo 'Marinduque, PH'; ?></p>
          </li>
          <!-- /CONTACTUS LIST ITEM -->

          <!-- CONTACTUS LIST ITEM -->
          <li class="contactus-list-item">
            <i class="s-icon icon-envelope"></i>
            <a href="mailto:info@tricksterhelmets.com" class="link"><?php echo 'info@pcworldz.com'; ?></a>
          </li>
          <!-- /CONTACTUS LIST ITEM -->

          <!-- CONTACTUS LIST ITEM -->
          <li class="contactus-list-item">
            <i class="s-icon icon-phone"></i>
            <p><?php echo '044 - 555 - 123 - 1234'; ?></p>
          </li>
          <!-- /CONTACTUS LIST ITEM -->
        </ul>
        <!-- /CONTACTUS LIST -->
      </div>
      <!-- /ABOUTUS PREVIEW -->

      <!-- CONTENT DROPDOWN COLUMN -->
      <div class="content-dropdown-column">
        <h6 class="title small secondary"><?php echo 'Sitemap'; ?></h6>
        <hr class="line-separator">
        <!-- LINK LIST -->
        <ul class="link-list decorated">
          <!-- LINK LIST ITEM -->
          <li class="link-list-item">
            <a href="home.php">
            <?php echo 'Home'; ?>
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
            <?php echo 'About Us'; ?>
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
            <?php echo 'Shop'; ?>
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
            <?php echo 'Our Blog'; ?>
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
            <?php echo 'Contact'; ?>
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
            <?php echo 'Your Account'; ?>
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
            <?php echo 'FAQs'; ?>
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
            <?php echo 'Our Guarantee'; ?>
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
        <h6 class="title small secondary"><?php echo 'Company'; ?></h6>
        <hr class="line-separator">
        <!-- LINK LIST -->
        <ul class="link-list decorated">
          <!-- LINK LIST ITEM -->
          <li class="link-list-item">
            <a href="#">
            <?php echo 'Shipping Policy'; ?>
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
            <?php echo 'International Shipping'; ?>
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
            <?php echo 'Affiliates'; ?>
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
            <?php echo 'Our Sponsors'; ?>
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
            <?php echo 'Privacy Policy'; ?>
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
            <?php echo 'Terms and Conditions'; ?>
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
            <?php echo 'Pay on Arrival'; ?>
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
        <h6 class="title small secondary"><?php echo 'Quick Contact'; ?></h6>
        <hr class="line-separator">
        <p class="description"><?php echo 'You can contact by using our contact number or email us below by using our email info@pcworldz.com'; ?></p>
        <form class="quick-contact-form">
          <input type="text" class="dark" name="qc_email" placeholder="Email">
          <textarea name="qc_message" class="dark" placeholder="Message"></textarea>
          <button class="button small"><?php echo 'Send Message'; ?></button>
        </form>
      </div>
      <!-- /CONTENT DROPDOWN COLUMN -->
    </div>
    <!-- /FOOTER TOP -->

    <!-- FOOTER BOTTOM -->
    <div class="footer-bottom">
      <h6 class="title tiny secondary"><?php echo 'Payment Methods:'; ?></h6>
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
      <p class="copyright"><span class="bold"><?php echo 'PC WORLDZ'; ?></span> <?php echo '| All Rights Reserved 2022'; ?></p>
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

  <!-- SVG CART SMALL -->
  <svg style="display: none;">
    <symbol id="svg-cart-small" viewBox="0 0 16 13" preserveAspectRatio="xMinYMin meet">
      <g>
      	<g>
      		<path fill-rule="evenodd" clip-rule="evenodd" d="M12.49,10.012c-0.826,0-1.495,0.669-1.495,1.493
      			c0,0.825,0.669,1.494,1.495,1.494s1.495-0.669,1.495-1.494C13.985,10.681,13.316,10.012,12.49,10.012z M5.497,10.012
      			c-0.826,0-1.495,0.669-1.495,1.493c0,0.825,0.669,1.494,1.495,1.494c0.825,0,1.495-0.669,1.495-1.494
      			C6.992,10.681,6.322,10.012,5.497,10.012z M4,1.001v-1H1c-0.553,0-1,0.448-1,1s0.447,1,1,1h1.25l1.75,7h10l2-8H4z M12.438,7.001
      			H5.561l-1-4h8.877L12.438,7.001z"/>
      	</g>
      </g>
    </symbol>
  </svg>
  <!-- /SVG CART SMALL -->

  <!-- SVG HEART -->
  <svg style="display: none;">
    <symbol id="svg-heart" viewBox="0 0 14 12" preserveAspectRatio="xMinYMin meet">
      <path d="M10.043,1.998c0.55,0,0.95,0.167,1.381,0.577c0.371,0.353,0.575,0.813,0.575,1.297
      	c0,0.484-0.204,0.945-0.591,1.313C11.384,5.208,11.34,5.25,7.002,9.705C5.717,8.346,2.975,5.451,2.576,5.071
      	C2.205,4.719,2,4.258,2,3.774s0.204-0.943,0.576-1.296C2.823,2.243,3.178,2.003,3.93,2.003c0.209,0,0.802,0.225,1.702,1.069
      	l1.39,1.303l1.369-1.325C9.213,2.255,9.858,1.998,10.043,1.998 M10.043-0.002C9.011-0.002,7.859,0.782,7,1.613
      	c-0.887-0.832-2.003-1.61-3.07-1.61c-1.045,0-1.965,0.297-2.731,1.025c-1.598,1.517-1.598,3.976,0,5.493
      	c0.456,0.434,4.883,5.121,4.883,5.121c0.252,0.24,0.583,0.359,0.914,0.359c0.33,0,0.66-0.119,0.912-0.359
      	c0,0,4.843-4.974,4.895-5.024c1.597-1.517,1.597-3.977,0-5.494C12.009,0.372,11.123-0.002,10.043-0.002L10.043-0.002z"/>
    </symbol>
  </svg>
  <!-- /SVG HEART -->

  <!-- SVG CHECK -->
  <svg style="display: none;">
    <symbol id="svg-check" viewBox="0 0 20 16" preserveAspectRatio="xMinYMin meet">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M19.692,3.398L7.764,15.669c-0.412,0.424-1.08,0.424-1.491,0
    	L0.308,9.534C-0.104,9.11-0.104,8.423,0.308,8l1.491-1.534c0.412-0.424,1.08-0.424,1.491,0l3.728,3.834L16.71,0.33
    	c0.412-0.423,1.08-0.423,1.491,0l1.491,1.534C20.104,2.288,20.104,2.975,19.692,3.398z"/>
    </symbol>
  </svg>
  <!-- /SVG CHECK -->

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
<!-- imgLiquid -->
<script src="js/vendor/imgLiquid-min.js"></script>
<!-- magnificPopup -->
<script src="js/vendor/jquery.magnific-popup.min.js"></script>
<!-- liquid -->
<script src="js/liquid.js"></script>
<!-- dropdowns -->
<script src="js/dropdowns.js"></script>
<!-- app -->
<script src="js/xmslider.js"></script>
<!-- popups -->
<script src="js/popups.js"></script>
</body>
</html>
