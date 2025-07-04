  <!-- header -->
  <header id="header_main" class="header header-fixed">
      <div class="themesflat-container w1791">
          <div class="row">
              <div class="col-12">
                  <div class="header-inner">
                      <div class="header-inner-wrap">
                          <div id="site-logo">
                              <div id="site-logo-inner">
                                  <a href="index.html" rel="home" class="main-logo">
                                      <img id="logo_header" alt="" src="assets/images/logo/logo.png"
                                          data-retina="assets/images/logo/logo.png">
                                  </a>
                              </div>
                          </div><!-- /logo -->
                          <nav class="main-nav">
                              <ul class="menu-primary-menu">
                                  <?php $current_page = basename($_SERVER['PHP_SELF']); ?>
                                  <li class="menu-item<?php if ($current_page == 'index.php' || $current_page == 'home-2.html') echo ' current-menu-item'; ?>">
                                      <a href="/">Accueil</a>
                                      <!-- <ul class="sub-menu">
                                          <li class="menu-item current-item"><a href="index.html">Home 1</a>
                                          </li>
                                          <li class="menu-item"><a href="home-2.html">Accueil</a></li>
                                      </ul> -->
                                  </li>
                                  <!-- <li class="menu-item menu-item-has-children">
                                      <a href="#">Livraison</a>
                                      <ul class="sub-menu">
                                          <li class="menu-item"><a href="about.html">About</a></li>
                                          <li class="menu-item"><a href="book-a-table.html">Book A Table</a>
                                          </li>
                                          <li class="menu-item"><a href="our-chef.html">Our Chef</a></li>
                                          <li class="menu-item"><a href="space.html">Space</a></li>
                                          <li class="menu-item"><a href="shop.html">Shop</a></li>
                                          <li class="menu-item"><a href="shop-single.html">Shop Single</a>
                                          </li>
                                          <li class="menu-item"><a href="404.html">404</a></li>
                                      </ul>
                                  </li> -->
                                  <li class="menu-item<?php if ($current_page == 'space.php') echo ' current-menu-item'; ?>">
                                      <a href="space.php">Brunch</a>
                                  </li>
                                  <li class="menu-item<?php if ($current_page == 'menu.php') echo ' current-menu-item'; ?>">
                                      <a href="#" data-toggle="modal" data-target="#menuModal"> menu</a>
                                  </li>
                                  <li class="menu-item<?php if ($current_page == 'book-a-table.php') echo ' current-menu-item'; ?>">
                                      <a href="index.php#privatisation">Réservations</a>
                                  </li>
                                  <!-- <li class="menu-item menu-item-has-children">
                                      <a href="#">Blog</a>
                                      <ul class="sub-menu">
                                          <li class="menu-item"><a href="blog.html">Blog</a></li>
                                          <li class="menu-item"><a href="blog-single.html">Blog Single</a>
                                          </li>
                                      </ul>
                                  </li> -->
                                  <li class="menu-item">
                                      <a href="index.php#contact_">Contact</a>
                                  </li>
                              </ul>
                          </nav><!-- /main-nav -->
                          <!-- <div class="header-right">
                              <div class="canvas">
                                  <span></span>
                              </div>
                          </div> -->
                          <!-- /header-right -->
                          <div class="mobile-button">
                              <span></span>
                          </div>
                          <!-- /mobile-button -->
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="mobile-nav-wrap">
          <div class="overlay-mobile-nav"></div>
          <div class="inner-mobile-nav">
              <a href="index.html" rel="home" class="main-logo">
                  <img id="mobile-logo_header" alt="" src="assets/images/logo/logo.png"
                      data-retina="assets/images/logo/logo-dark@2x.png">
              </a>
              <div class="mobile-nav-close">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                      fill="white" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 122.878 122.88"
                      enable-background="new 0 0 122.878 122.88" xml:space="preserve">
                      <g>
                          <path
                              d="M1.426,8.313c-1.901-1.901-1.901-4.984,0-6.886c1.901-1.902,4.984-1.902,6.886,0l53.127,53.127l53.127-53.127 c1.901-1.902,4.984-1.902,6.887,0c1.901,1.901,1.901,4.985,0,6.886L68.324,61.439l53.128,53.128c1.901,1.901,1.901,4.984,0,6.886 c-1.902,1.902-4.985,1.902-6.887,0L61.438,68.326L8.312,121.453c-1.901,1.902-4.984,1.902-6.886,0 c-1.901-1.901-1.901-4.984,0-6.886l53.127-53.128L1.426,8.313L1.426,8.313z" />
                      </g>
                  </svg>
              </div>
              <nav id="mobile-main-nav" class="mobile-main-nav">
                  <ul id="menu-mobile-menu" class="menu">
                      <li class="menu-item <?php if ($current_page == 'index.php' || $current_page == 'home-2.html') echo ' current-menu-item'; ?>">
                          <a class="item-menu-mobile" href="/">Accueil</a>
                      </li>

                      <li class="menu-item<?php if ($current_page == 'space.php') echo ' current-menu-item'; ?>">
                          <a href="space.php">Brunch</a>
                      </li>
                      <li class="menu-item<?php if ($current_page == 'menu.php') echo ' current-menu-item'; ?>">
                          <a href="#" data-toggle="modal" data-target="#menuModal">Menu</a>
                      </li>
                      <li class="menu-item<?php if ($current_page == 'book-a-table.php') echo ' current-menu-item'; ?>">
                          <a href="index.php#privatisation">Réservations</a>
                      </li>
                      <li class="menu-item">
                          <a href="index.php#contact_">Contact</a>
                      </li>
                  </ul>
              </nav>
          </div>
      </div>
      <div class="canvas-nav-wrap">
          <div class="overlay-canvas-nav"></div>
          <div class="inner-canvas-nav">
              <div class="side-bar">
                  <a href="index.html" rel="home" class="main-logo">
                      <img id="logo_header_1" alt="" src="assets/images/logo/logo.png">
                  </a>
                  <div class="canvas-nav-close">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                          fill="black" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 122.878 122.88"
                          enable-background="new 0 0 122.878 122.88" xml:space="preserve">
                          <g>
                              <path
                                  d="M1.426,8.313c-1.901-1.901-1.901-4.984,0-6.886c1.901-1.902,4.984-1.902,6.886,0l53.127,53.127l53.127-53.127 c1.901-1.902,4.984-1.902,6.887,0c1.901,1.901,1.901,4.985,0,6.886L68.324,61.439l53.128,53.128c1.901,1.901,1.901,4.984,0,6.886 c-1.902,1.902-4.985,1.902-6.887,0L61.438,68.326L8.312,121.453c-1.901,1.902-4.984,1.902-6.886,0 c-1.901-1.901-1.901-4.984,0-6.886l53.127-53.128L1.426,8.313L1.426,8.313z">
                              </path>
                          </g>
                      </svg>
                  </div>
                  <div class="side-bar-item mt-30 recent-product">
                      <div class="title">recent product</div>
                      <div class="content">
                          <div class="cart-item">
                              <div class="image">
                                  <img src="assets/images/avatar/avt-item-3.jpg" alt="">
                              </div>
                              <div class="content">
                                  <div class="price">$32.00</div>
                                  <div class="name"><a href="blog-single.html">Traditional ramen noodles</a>
                                  </div>
                              </div>
                          </div>
                          <div class="cart-item">
                              <div class="image">
                                  <img src="assets/images/avatar/avt-item-4.jpg" alt="">
                              </div>
                              <div class="content">
                                  <div class="price">$25.00</div>
                                  <div class="name"><a href="blog-single.html">fried rice shrimp sushi</a>
                                  </div>
                              </div>
                          </div>
                          <div class="cart-item last">
                              <div class="image">
                                  <img src="assets/images/avatar/avt-item-5.jpg" alt="">
                              </div>
                              <div class="content">
                                  <div class="price">$24.19</div>
                                  <div class="name"><a href="blog-single.html">caviar sashimi</a></div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="side-bar-item categories">
                      <div class="title">categories</div>
                      <div class="content">
                          <ul>
                              <li>
                                  <a href="#">Sushi</a>
                              </li>
                              <li>
                                  <a href="#">Sashimi</a>
                              </li>
                              <li>
                                  <a href="#">Ramens</a>
                              </li>
                              <li>
                                  <a href="#">Special Sushi</a>
                              </li>
                              <li>
                                  <a href="#">Pastry</a>
                              </li>
                              <li class="mb-0">
                                  <a href="#">Sandwiches</a>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </header>
  <!-- /header -->