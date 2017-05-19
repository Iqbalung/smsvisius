<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.2/isotope.pkgd.js"></script>
<!-- or -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.2/isotope.pkgd.min.js"></script>
    
         <!--  <form action="<?= base_url()?>index.php/shop/sort_product" method="post">
            <select class="js--isotope-sorting  btn  btn-shop" name="sort" onchange="this.form.submit()">
               <option value="">By Price (Low to High) &uarr;</option>
                <option value="">By Price (High to Low) &darr;</option> 
                 <option name="sort" value="az">Filter &uarr;</option>
                <option name="sort" value="az">By Name a - z &uarr;</option>
                <option name="sort" value="za">By Name z - a &darr;</option>
               
                
            </select>
            
            </form> -->
        


              <?php foreach($produk as $val) { ?> 
              <div class="col-md-12">
                
                  <div class="col-md-2 " data-price="<?php echo $val->pro_price; ?>" data-rating="5" style="min-height:320px;">
                <div class="products__single">
                  
                  <figure class="products__image">
                    <a href="">
                      <img alt="#" class="product__image" width="263" height="334" src="<?php echo base_url(""); ?>asset/upload/<?php echo $val->pro_image; ?>">
                    </a>
                    </figure>
                </div>
                 </div>

                

                

                    
                      <a class="" href="<?php echo base_url()?>index.php/produk_detail/index/<?=  $val->kat_slug  ?>/<?=  $val->pro_slug  ?>">
                        <span class="glyphicon glyphicon-search"></span>
                      </a>
                      <a class="" href="<?php echo base_url()?>index.php/produk_detail/index/<?=  $val->kat_slug  ?>/<?=  $val->pro_slug  ?>">
                        +<span class="glyphicon glyphicon-shopping-cart"></span>
                      </a>
                         <span class="in-stock">&bull;</span> <span class="in-stock--text">
                          <?php echo $val->pro_stock; ?> STOCK
                        </span>
                    
                      <div class="col-xs-9">
                      <h5 class="products__title">
                        <a class="products__link  js--isotope-title" href=""><?php echo $val->pro_name; ?></a>
                      </h5>
                    </div>
                    <form name="myform" action="<?php echo base_url()?>index.php/index/add_fast/" method="post">
                       <input type="hidden" id="quantity" name="quantity"  value="<?= $val->pro_minim_pembelian ?>" class="quantity__input validate[required,equals[qty2]] text-input">
                     <div class="col-xs-1">
                      <div class="products__price">
                        <?php echo $val->pro_price; ?><br>
                        Minimal order <label name="qty2" id="qty2"><?= $val->pro_minim_pembelian ?></label>
                   <input type="submit" class="btn btn-primary--transition" value="Tambahkan Ke Keranjang" >
                      </div>
                    </div>
               
                  <div class="products__category">
                    <?php echo $val->kat_judul; ?>
                  </div>
                  <input type="hidden" name="id" value="<?= $val->pro_id ?>" class="quantity__input"><br>
                     </form>
        
      </div>
      
      <!-- Add to cart button -->
      
                   
                

                 
                    
                   
                
             
              <?php } ?><br>  <br>       
          
         
             
            