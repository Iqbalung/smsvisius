<!-- <pre>
<?php print_r($related_produk); ?>
</pre>
 -->
   <!-- ============================================== UPSELL PRODUCTS ============================================== -->
<section class="section featured-product wow fadeInUp">
  <h3 class="section-title">upsell products</h3>
  <div class="owl-carousel home-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs">
        <?php 
			$tot_related = count($related_produk);
		 	if($tot_related == 0 ){
		 		echo "<h1 class=single-product__title> No Related Products</h1>";
		 	}else{
		 		foreach ($related_produk as $key) { 
		?>
    <div class="item item-carousel">
      <div class="products">
        
  <div class="product">   
    <div class="product-image">
      <div class="image">
        <a href="<?php echo base_url(); ?>index.php/produk_detail/index/<?php echo $key->kat_slug; ?>/<?php echo $key->pro_slug; ?>"><img  src="<?= base_url()?>assets/images/blank.gif" data-echo="<?php echo base_url(); ?>asset/upload/<?php echo $key->pro_image; ?>" alt=""></a>
      </div><!-- /.image -->      

                                 
    </div><!-- /.product-image -->
      
    
    <div class="product-info text-left">
      <h3 class="name"><a href="<?php echo base_url(); ?>index.php/produk_detail/index/<?php echo $key->kat_slug; ?>/<?php echo $key->pro_slug; ?>"><?php echo $key->pro_title; ?></a></h3>
      <div class="rating rateit-small"></div>
      <div class="description"></div>

      <div class="product-price"> 
        <span class="price">
          Rp<?php echo $this->cart->format_number($key->pro_price); ?>  </span>
                      Rp <span class="price-before-discount"> <?php echo $this->cart->format_number($key->pro_price+($key->pro_price*(10/100))); ?>  </span>
                  
      </div><!-- /.product-price -->
      
    </div><!-- /.product-info -->
          <div class="cart clearfix animate-effect">
        <div class="action">
          <ul class="list-unstyled">
            <li class="add-cart-button btn-group">
              <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                <i class="fa fa-shopping-cart"></i>                         
              </button>
              <a href="<?php echo base_url(); ?>index.php/produk_detail/index/<?php echo $key->kat_slug; ?>/<?php echo $key->pro_slug; ?>" class="btn btn-primary" type="button">Add to cart</a>
                          
            </li>
                     
                    <li class="lnk wishlist">
              <a class="add-to-cart" href="<?php echo $key->kat_slug; ?>/<?php echo $key->pro_slug; ?>" title="Wishlist">
                 <i class="icon fa fa-heart"></i>
              </a>
            </li>

            <li class="lnk">
              <a class="add-to-cart" href="<?php echo $key->kat_slug; ?>/<?php echo $key->pro_slug; ?>" title="Compare">
                  <i class="fa fa-retweet"></i>
              </a>
            </li>
          </ul>
        </div><!-- /.action -->
      </div><!-- /.cart -->
      </div><!-- /.product -->
      
      </div><!-- /.products -->
    </div><!-- /.item -->
  
    <?php


		 		}
		 	}
		 ?> 
    
    
    
      </div><!-- /.home-owl-carousel -->
</section><!-- /.section -->
<!-- <div class="container">
	<div class="push-down-30">
	<div class="products-navigation">
	  <div class="products-navigation__title">
	    <h3><span class="light">Related</span> Products</h3>
	  </div>
	</div>
</div>

<div class="push-down-30">
	<div class="row">
		<?php 
			$tot_related = count($related_produk);
		 	if($tot_related == 0 ){
		 		echo "<h1 class=single-product__title> No Related Products</h1>";
		 	}else{
		 		foreach ($related_produk as $key) { 
		?>
		 	<div class="col-xs-6 col-sm-3  js--isotope-target  js--cat-6" data-price="16.88" data-rating="4">
				<div class="products__single">
				    <figure class="products__image">
				      <a href="<?php echo base_url(); ?>produk_detail/index/<?php echo $key->kat_slug; ?>/<?php echo $key->pro_slug; ?>">
				        <img alt="#" class="product__image" width="263" height="334" src="<?php echo base_url(); ?>asset/upload/<?php echo $key->pro_image; ?>">
				      </a>
				      <div class="product-overlay">
				        <a class="product-overlay__more" href="<?php echo base_url(); ?>index.php/produk_detail/index/<?php echo $key->kat_slug; ?>/<?php echo $key->pro_slug; ?>">
				          <span class="glyphicon glyphicon-search"></span>
				        </a>
				        <a class="product-overlay__cart" href="#">
				          +<span class="glyphicon glyphicon-shopping-cart"></span>
				        </a>
				        <div class="product-overlay__stock">
				          <span class="in-stock">&bull;</span> <span class="in-stock--text"><?php echo $key->pro_stock; ?> Stock</span>
				        </div>
				      </div>
				    </figure>
				    <div class="row">
				      <div class="col-xs-9">
				        <h5 class="products__title">
				          <a class="products__link  js--isotope-title" href="<?php echo base_url(); ?>index.php/produk_detail/index/<?php echo $key->pro_id; ?>/<?php echo $key->pro_kategori; ?>"><?php echo $key->pro_title; ?></a>
				        </h5>
				      </div>
				      <div class="col-xs-3">
				        <div class="products__price">
				          <?php echo $key->pro_price; ?>
				        </div>
				      </div>
				    </div>
				    <div class="products__category">
				     	<?php echo $key->kat_judul; ?>
				    </div>
				</div>
			</div>
		<?php


		 		}
		 	}
		 ?> -->
		
			
		
	