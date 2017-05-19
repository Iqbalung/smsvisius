<!-- <!-- <!-- <!-- <pre>

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
       echo $single_produk->pro_price);
        ?></span>
      <!-- <div class="single-product__rating">
        <span class="glyphicon  glyphicon-star  star-on"></span>
        <span class="glyphicon  glyphicon-star  star-on"></span>
        <span class="glyphicon  glyphicon-star  star-on"></span>
        <span class="glyphicon  glyphicon-star  star-on"></span>
        <span class="glyphicon  glyphicon-star  star-off"></span>
      </div> -->
      
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
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.js" type="text/
javascript"></script>
<script src="<?= base_url()?>assets/js/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
<script src="<?= base_url()?>assets/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="<?= base_url()?>assets/css/validationEngine.jquery.css" type="text/css"/>
      <?php if($this->session->flashdata('info')=='notsaved') { ?>
                        <div class="alert  alert-danger  uppercase  fade  in">
                            <button data-dismiss="alert" class="close" type="button">×</button>
                            Kurang dari  <b>minimum pembelian</b></span>
                        </div>
      <?php } ?>
      
      <!-- Quantity buttons -->
      <form name="myform" action="<?php echo base_url()?>index.php/index/add_to_cart/" method="post">
      <div class="quantity  js--quantity">
      
        <label> Qty </label><br>
        <input type="text" id="qty" name="qty"  value="<?= $single_produk->pro_minim_pembelian ?>" class="quantity__input validate[required,equals[qty2]] text-input">
        Minimal order <label  id="qty2"><?= $single_produk->pro_minim_pembelian ?></label>
        <input type="hidden" name="id" value="<?= $single_produk->pro_id ?>" class="quantity__input">
        <input type="hidden" name="slug" value="<?= $single_produk->pro_slug ?>" class="quantity__input">
         <input type="hidden" name="kat" value="<?= $single_produk->pro_kategori ?>" class="quantity__input">
          <input type="hidden" name="qty2" value="<?= $single_produk->pro_minim_pembelian ?>" class="quantity__input">
        
      </div>
      
      <!-- Add to cart button -->
      <input type="submit" class="btn btn-primary--transition" value="Tambahkan Ke Keranjang" >
        
       
      </a>
      </form>
      
      <script type="text/javascript">
YUI().use(
  'aui-form-validator',
  function(Y) {
    var rules = {
      quantity: {
        quantity: true,
        required: true
      },
      qty2: {
        quantity: true,
        equalTo: '#quantity',
        required: true
      },
     
    };

    var fieldStrings = {
      quantity: {
        required: 'Type your email in this field.'
      },
    
    };

    new Y.FormValidator(
      {
        boundingBox: '#myForm',
        fieldStrings: fieldStrings,
        rules: rules,
        showAllMessages: true
      }
    );
  }
);
      </script>
      <!-- Social banners -->
      
    </div>
  </div>
