<!-- <pre>
<?php print_r($single_produk); ?>
</pre>
 -->  
 <div class="col-xs-12 col-sm-8">
    <div class="products__content">
      <div class="push-down-30"></div>

      <span class="products__category"><?php 
        echo $single_produk->kat_judul; 
      ?></span>
      <h1 class="single-product__title"><?php
       echo $single_produk->pro_title; 
       ?></h1>
      <span class="single-product__price">Rp <?php
       echo $single_produk->pro_price;
        ?> ,00</span>
     
      
      <div class="in-stock--single-product">
        <span class="in-stock">&bull;</span> <span class="in-stock--text"><?php 
        echo $single_produk->pro_stock; 
        ?> Stock</span>
      </div>
      <hr class="bold__divider">
      
      <p class="single-product__text">
        <?php 
          echo $single_produk->pro_description; 
        ?>
      </p>
      <hr class="bold__divider">
      
      <!-- Single button -->
      <!-- <select class="btn  btn-shop">
        <option>350g</option>
        <option>700g</option>
        <option>1200g</option>
      </select> -->
      
      <!-- Quantity buttons -->
      <div class="quantity  js--quantity">
        <input type="button" value="-" class="quantity__button  js--minus-one  js--clickable">
        <input type="text" name="quantity" value="1" class="quantity__input">
        <input type="button" value="+" class="quantity__button  js--plus-one  js--clickable">
      </div>
      
      <!-- Add to cart button -->
      <a class="btn btn-primary--transition" href="<?php echo base_url()?>index.php/index/add_to_cart/<?= $single_produk->pro_id ?>/beli">
        <span class="glyphicon glyphicon-plus"></span><span class="glyphicon glyphicon-shopping-cart"></span>
        <span class="single-product__btn-text">Add to shopping cart</span>
      </a>
      <!-- Social banners -->
      
    </div>
  </div>
</div>