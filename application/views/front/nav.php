<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Rumah Kreatif Wadas Kelir</title>
    <meta name="description" content="One Page Layout">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>otavio/http://fonts.googleapis.com/css?family=Montserrat:400,700%7COpen+Sans:300italic,400italic,600italic,700italic,800italic,300,400,600,700">
    <link rel="stylesheet" href="<?php echo base_url(); ?>otavio/styles/font-awesome.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>otavio/styles/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>otavio/styles/owl.theme.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>otavio/styles/slit-slider-style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>otavio/styles/slit-slider-custom.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>otavio/styles/idangerous.swiper.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>otavio/styles/yamm.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>otavio/styles/animate.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>otavio/styles/prettyPhoto.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>otavio/styles/bootstrap-slider.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>otavio/styles/device-mockups2.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>otavio/styles/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>otavio/styles/main.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>otavio/styles/main-responsive.css">
    <link id="primary_color_scheme" rel="stylesheet" href="<?php echo base_url(); ?>otavio/styles/theme_meadow.css">
    <script src="<?php echo base_url(); ?>otavio/scripts/vendor/modernizr.js"></script>
    <noscript>
      <link rel="stylesheet" href="<?php echo base_url(); ?>otavio/styles/styleNoJs.css">
    </noscript>
  </head>
<nav id="main-navigation" role="navigation" class="navbar navbar-fixed-top navbar-standard"><a href="<?php echo base_url(); ?>/otavio/javascript:void(0)" class="search_button"><i class="fa fa-search"></i></a>
         
        <form action="index.php/search/result" method="POST" role="search" class="h_search_form">
          <div class="container">
            <div class="h_search_form_wrapper">
              <div class="input-group"><span class="input-group-btn">
                  <button type="submit" class="btn btn-sm"><i class="fa fa-search fa-lg"></i></button></span>
                <input type="text" placeholder="Search on site" name="keyword" class="form-control">
              </div>
              <div class="h_search_close"><a href="<?php echo base_url(); ?>/otavio/#"><i class="fa fa-times"></i></a></div>
            </div>
          </div>
        </form>
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle"><i class="fa fa-align-justify fa-lg"></i></button><a href="<?php echo base_url(); ?>otavio/#" class="navbar-brand"><img src="<?php echo base_url(); ?>otavio/img/logo-white.png" alt="" class="logo-white"><img src="<?php echo base_url(); ?>otavio/img/logo-dark.png" alt="" class="logo-dark"></a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right service-nav">
              <li><a id="dropdownMenuLogin1" data-toggle="dropdown" class="upper dropdown-toggle"  data-toggle="dropdown" class="upper dropdown-toggle"><?php if ($this->session->userdata('username')): ?>
                <?php echo (''.'Welcome '.$this->session->userdata('username').''); ?><?php endif;?></a>
                 <div aria-labelledby="dropdownMenuLogin1" class="dropdown-menu widget-box">
                <?php echo anchor('logout','Logout');?>
                   
                </div>
              </li>

              <li><a id="dropdownMenuLogin" href="<?php echo base_url(); ?> data-toggle="dropdown" class="upper dropdown-toggle"  data-toggle="dropdown" class="upper dropdown-toggle"><?php if ($this->session->userdata('username')==''){ echo 'Login'; }; ?></a>
                <div aria-labelledby="dropdownMenuLogin" class="dropdown-menu widget-box">
                 <?= form_open('login') ?>
                    <div class="form-group">
                      <label class="sr-only">Username or Email</label>
                      <input type="text" value="" placeholder="Username or Email" name="username" class="form-control input-lg">
                    </div>
                    <div class="form-group">
                      <label class="sr-only">Password</label>
                      <input type="password" value="" placeholder="Password" name="password" class="form-control input-lg">
                    </div>
                    <div class="form-inline form-group">
                      <button type="submit" class="btn btn-primary btn-xs">Login</button>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"><small> Remember me</small>
                        </label>
                      </div>
                    </div><a href="<?php echo base_url(); ?>/otavio/#"><small>Lost your Password?</small></a>
                  </form>
                </div>
              </li>
              <li><a href="<?php echo base_url(); ?>index.php/shop/cart"><i class="fa fa-shopping-cart fa-lg"></i>&nbsp;<span class="badge"><?= $this->cart->total_items(); ?></span></a>
               <!--  <div aria-labelledby="dropdownMenuCart" class="dropdown-menu widget-box">
                  <div class="shopping_cart_dropdown">
                    <ul class="cart_list product_list_widget">
                      <li><a href="<?php echo base_url(); ?>/otavio/#" class="delete"><i class="fa fa-close"></i></a><a href="<?php echo base_url(); ?>/otavio/#"><img alt="" src="img/products/3.jpg"><span>New Peace Baja</span></a>
                        <h5 class="quantity">45.00</h5>
                      </li>
                      <li><a href="<?php echo base_url(); ?>/otavio/#" class="delete"><i class="fa fa-close"></i></a><a href="<?php echo base_url(); ?>/otavio/#"><img alt="" src="img/products/5.jpg"><span>Sunny Tank Selected</span></a>
                        <h5 class="quantity">25.00</h5>
                      </li>
                    </ul>
                    <div class="total">
                      <h6>Subtotal</h6><span>$70.00</span>
                    </div>
                    <div class="action-button"><a href="<?php echo base_url(); ?>/otavio/shop-cart.html" class="btn btn-dark btn-bordered btn-xs upper">View Cart</a><a href="<?php echo base_url(); ?>/otavio/shop-checkout.html" class="btn btn-primary btn-xs upper">Checkout</a></div>
                  </div>
                </div> -->
              </li>
            </ul>
            <button type="button" class="navbar-toggle"><i class="fa fa-close fa-lg"></i></button>
            <ul id="one-page-menu" role="menu" class="nav navbar-nav navbar-left">
              <li><a href="<?php echo base_url(); ?>" title="Home" data-ref="home">Home</a>
              </li>
              <li><a href="<?php echo base_url(); ?>index.php/about" title="About us" data-ref="about">About us</a>
              </li>
              
              <li><a href="<?php echo base_url(); ?>index.php/shop" title="Shop" data-ref="shop">Shop</a>
              
              
              <li><a href="#event" title="Team" data-ref="event">Event</a>
              </li>
              <li><a href="#news" title="News" data-ref="news">News</a>
              </li>
              
              <li><a href="<?php echo base_url(); ?>index.php/contact" title="Contacts" data-ref="contacts">Contacts</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
