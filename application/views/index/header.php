<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
	    <meta name="keywords" content="MediaCenter, Template, eCommerce">
	    <meta name="robots" content="all">

	    <title>Fenomagz Shop</title>

	    <!-- Bootstrap Core CSS -->
	    <link rel="stylesheet" href="<?= base_url()?>assets/css/bootstrap.min.css">
	    
	    <!-- Customizable CSS -->
	    <link rel="stylesheet" href="<?= base_url()?>assets/css/main.css">
	    <link rel="stylesheet" href="<?= base_url()?>assets/css/green.css">
	    <link rel="stylesheet" href="<?= base_url()?>assets/css/owl.carousel.css">
		<link rel="stylesheet" href="<?= base_url()?>assets/css/owl.transitions.css">
		<!--<link rel="stylesheet" href="<?= base_url()?>assets/css/owl.theme.css">-->
		<link href="<?= base_url()?>assets/css/lightbox.css" rel="stylesheet">
		<link rel="stylesheet" href="<?= base_url()?>assets/css/animate.min.css">
		<link rel="stylesheet" href="<?= base_url()?>assets/css/rateit.css">
		<link rel="stylesheet" href="<?= base_url()?>assets/css/bootstrap-select.min.css">

		<!-- Demo Purpose Only. Should be removed in production -->
		<link rel="stylesheet" href="<?= base_url()?>assets/css/config.css">

		<link href="<?= base_url()?>assets/css/green.css" rel="alternate stylesheet" title="Green color">
		<link href="<?= base_url()?>assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
		<link href="<?= base_url()?>assets/css/red.css" rel="alternate stylesheet" title="Red color">
		<link href="<?= base_url()?>assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
		<link href="<?= base_url()?>assets/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
		<!-- Demo Purpose Only. Should be removed in production : END -->

		
		<!-- Icons/Glyphs -->
		<link rel="stylesheet" href="<?= base_url()?>assets/css/font-awesome.min.css">

        <!-- Fonts --> 
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="<?= base_url()?>assets/images/favicon.ico">

		<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="//v2.zopim.com/?3rqE3keqctOMyAt0c6eAqvTEqJZOnSQN";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zopim Live Chat Script-->
	</head>
    <body class="cnt-home">
	
		
	
		<!-- ============================================== HEADER ============================================== -->

	<!-- ============================================== TOP MENU : END ============================================== -->
	 <div class="main-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
					<div class="logo">
						<a href="home.html">	
							<img src="<?= base_url()?>assets/images/logo.png" alt="">
						</a>
					</div>			
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 top-search-holder">
					<div class="contact-row">
    					
   
</div>
 
<!-- /.contact-row -->
<!-- ============================================================= SEARCH AREA ============================================================= -->

<!-- ============================================================= SEARCH AREA : END ============================================================= -->				</div><!-- /.top-search-holder -->

				<div class="col-xs-12 col-sm-12 col-md-3 animate-dropdown top-cart-row">
					<!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->

	<div class="dropdown dropdown-cart">
		<a href="<?= base_url() ?>index.php/index/cart" class="dropdown-toggle lnk-cart" >
			<div class="items-cart-inner">
				<div class="total-price-basket">
					<span class="lbl">cart -</span>
					<span class="total-price">
						<?php 
						if($this->cart->total_items() == 0):?>
						

						<?php endif; ?>
				
						<span class="sign">Rp</span>
						<span class="value"><?php echo $this->cart->format_number($this->cart->total());?></span>
				
					 
				

						</span>
				</div>
				<div class="basket">
					<i class="glyphicon glyphicon-shopping-cart"></i>
				</div>
				<div class="basket-item-count"><span class="count"><?= $this->cart->total_items() ?></span></div>
			
		    </div>
		</a>
		<!-- <ul class="dropdown-menu">
			<li>
				<div class="cart-item product-summary">
					<div class="row">
						<div class="col-xs-4">
							<div class="image">
								<a href="detail.html"><img src="assets/images/cart.jpg" alt=""></a>
							</div>
						</div>
						<div class="col-xs-7">
							
							<h3 class="name"><a href="index.php?page-detail">Simple Product</a></h3>
							<div class="price">$600.00</div>
						</div>
						<div class="col-xs-1 action">
							<a href="#"><i class="fa fa-trash"></i></a>
						</div>
					</div>
				</div><!-- /.cart-item -->
				<!-- <div class="clearfix"></div>
			<hr>
		
			<div class="clearfix cart-total">
				<div class="pull-right">
					
						<span class="text">Sub Total :</span><span class='price'>$600.00</span>
						
				</div>
				<div class="clearfix"></div>
					
				<a href="checkout.html" class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a>	
			</div><!-- /.cart-total-->
					
				
		<!-- </li>
		</ul> /.dropdown-menu --> 
	</div><!-- /.dropdown-cart -->

<!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->				</div><!-- /.top-cart-row -->
			</div><!-- /.row -->

		</div><!-- /.container -->

	</div><!-- /.main-header -->

	<!-- ============================================== NAVBAR ============================================== -->
<div class="header-nav animate-dropdown">
    <div class="container">
        <div class="yamm navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="nav-bg-class">
                <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
	<div class="nav-outer">
		<ul class="nav navbar-nav">
			
			<li >
				<a href="<?= base_url() ?>" class="dropdown-toggle" >Home</a>
				
			</li>
			<li >
				<a href="<?= base_url() ?>index.php/shop" class="dropdown-toggle" >Catalog</a>
				
			</li>
			<!-- <li class="dropdown yamm">
				<a href="<?= base_url()?>index.php/shop/selected_kategori/training-kits" >Training Kit</a>
				
			</li>

			<li class="dropdown">
				
				<a href="<?= base_url()?>index.php/shop/selected_kategori/aksesori">Aksesoris
				   <!-- <span class="menu-label hot-menu hidden-xs">hot</span> -->
			<!-- 	</a>
			</li>
			<li class="dropdown hidden-sm">
				
				<a href="<?= base_url()?>index.php/shop/selected_kategori/gym">Gym
				    <span class="menu-label new-menu hidden-xs">new</span>
				</a>
			</li>

			<li class="dropdown hidden-sm">
				<a href="<?= base_url()?>index.php/shop/selected_kategori/bike">Bike</a>
			</li> -->

			<li class="dropdown">
				<a href="<?= base_url()?>index.php/index/contact_us">Contact</a>
			</li>
			
			
			
		</ul><!-- /.navbar-nav -->
		<div class="clearfix"></div>				
	</div><!-- /.nav-outer -->
</div><!-- /.navbar-collapse -->


            </div><!-- /.nav-bg-class -->
        </div><!-- /.navbar-default -->
    </div><!-- /.container-class -->

</div>
</div>
</div>
</div>
</div><!-- /.header-nav -->
<!-- ============================================== NAVBAR : END ============================================== -->

</header>



</body>
</html>