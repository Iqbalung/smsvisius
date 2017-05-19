<!-- <pre>
<?php print_r($related_produk); ?>
</pre>
 -->
<div class="container">
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
				      <a href="single-product.html">
				        <img alt="#" class="product__image" width="263" height="334" src="<?php echo base_url(); ?>asset/upload/<?php echo $key->pro_image; ?>">
				      </a>
				      <div class="product-overlay">
				        <a class="product-overlay__more" href="<?php echo base_url(); ?>produk_detail/index/<?php echo $key->pro_id; ?>/<?php echo $key->pro_kategori; ?>">
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
				          <a class="products__link  js--isotope-title" href="<?php echo base_url(); ?>produk_detail/index/<?php echo $key->pro_id; ?>/<?php echo $key->pro_kategori; ?>"><?php echo $key->pro_title; ?></a>
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
		 ?>
		
			
		
	</div>
</div>
</div>
