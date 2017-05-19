

<div class="col-xs-12 col-sm-12 col-md-9 ">
<?php $i=0;$jumlah_desimal ="0";
$pemisah_desimal =",";
$pemisah_ribuan =".";?>
<section class="section featured-product wow fadeInUp">
	<h3 class="section-title">Featured products</h3>
	<div class="row">
	<?php foreach ($products_f as $product ) { ?>		   	
		<div class="col-md-5">
			<div class="products">		
	<div class="product">
		<?php if($product->barang_habis==0): ?>
		<div class="tag new"><span>new</span></div>
		<?php endif;?>
		<?php if($product->barang_habis==1): ?>
		<div class="tag hot"><span>Habis</span></div>
		<?php endif;?>
		
		<div class="product-image">
			<div class="image">
				<a href="<?= base_url() ?>index.php/produk_detail/index/<?php echo $product->kat_slug; ?>/<?php echo $product->pro_slug; ?>"><img  src="assets/images/blank.gif" width="300" data-echo="<?php echo base_url() ?>asset/upload/<?=  $product->pro_image  ?>" alt=""></a>
			</div><!-- /.image -->			

			                        	   
		</div><!-- /.product-image -->
			
		
		<div class="product-info text-left">
			<h3 class="name"><a href="<?= base_url() ?>index.php/produk_detail/index/<?php echo $product->kat_slug; ?>/<?php echo $product->pro_slug; ?>"> <?=  $product->pro_name  ?></a></h3>
			
			<div class="description"></div>

			<div class="product-price">	
				<span class="price">
					Rp.<?php echo number_format(  $product->pro_price, $jumlah_desimal, $pemisah_desimal,$pemisah_ribuan );  ?>			</span>
										     
									
			</div><!-- /.product-price -->
			
		</div><!-- /.product-info -->
					<div class="cart clearfix animate-effect">
				<div class="action">
					<ul class="list-unstyled">
						<li class="add-cart-button btn-group">							
							<a class="btn btn-primary btn-block" type="button" href="<?= base_url() ?>index.php/produk_detail/index/<?=  $product->kat_slug  ?>/<?=  $product->pro_slug  ?>"><i class="fa fa-shopping-cart"></i>Add to cart</a>
						</li>
					</ul>
				</div><!-- /.action -->
			</div><!-- /.cart -->
			</div><!-- /.product -->
      
			</div><!-- /.products -->
		</div><!-- /.item -->
	
		
	<?php }?>
        
		
		
		
	
		</div>
		<?php echo $pagination; ?>
			<!-- /.home-owl-carousel -->
</section><!-- /.section -->
</div>
<!-- ============================================== FEATURED PRODUCTS : END ============================================== -->
	</div>

	<br><br><br><br>