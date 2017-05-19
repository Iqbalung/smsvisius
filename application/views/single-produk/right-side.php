<!-- ============================================== COLOR============================================== -->
   
<!-- ============================================== COLOR: END ============================================== -->
        </div>
      </div><!-- /.sidebar -->
      <div class='col-md-12'>
        <div class="row  wow fadeInUp">
          <div class="col-md-5">
                  <a data-lightbox="image-1" data-title="Gallery" href="assets/images/single-product/1.jpg">
                    <img class="img-responsive" alt="" src="<?php echo base_url() ?>asset/upload/<?=  $single_produk->pro_image  ?>" data-echo="<?php echo base_url() ?>asset/upload/<?=  $single_produk->pro_image  ?>" />
                  </a>
        </div><!-- /.gallery-holder -->             
          <div class='col-sm-6 col-md-7 product-info-block'>
            <div class="product-info">
              <h1 class="name"><?php
       echo $single_produk->pro_title; 
       ?></h1>
              
              <div class="rating-reviews m-t-20">
                <div class="row">
                  <div class="col-sm-3">
                    <div class="rating rateit-small"></div>
                  </div>
                  <div class="col-sm-8">
                    <!-- <div class="reviews">
                      <a href="#" class="lnk">(06 Reviews)</a>
                    </div> -->
                  </div>
                </div><!-- /.row -->    
              </div><!-- /.rating-reviews -->

              <div class="stock-container info-container m-t-10">
                <div class="row">
                  <div class="col-sm-3">
                    <div class="stock-box">
                      <span class="label">Stock : <?php 
        echo $single_produk->pro_stock; 
        ?> </span>
                    </div>  
                  </div>
                  <div class="col-sm-9">
                   <!--  <div class="stock-box">
                      <span class="value">In Stock</span>
                    </div>   -->
                  </div>
                </div><!-- /.row -->  
              </div><!-- /.stock-container -->

              <div class="description-container m-t-20">        <?php 
          echo $single_produk->pro_description; 
        ?></div><!-- /.description-container -->

              <div class="price-container info-container m-t-20">
                <div class="row">
                  

                  <div class="col-sm-6">
                    <div class="price-box">
                      <span class="price">Rp <?php
       echo $this->cart->format_number($single_produk->pro_price);
        ?></span>
                     
                    </div>
                  </div>

                  <!-- <div class="col-sm-6">
                    <div class="favorite-button m-t-10">
                      <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Wishlist" href="#">
                          <i class="fa fa-heart"></i>
                      </a>
                      <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Add to Compare" href="#">
                         <i class="fa fa-retweet"></i>
                      </a>
                      <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="E-mail" href="#">
                          <i class="fa fa-envelope"></i>
                      </a>
                    </div>
                  </div> -->

                </div><!-- /.row -->
              </div><!-- /.price-container -->

              <div class="quantity-container info-container">
                <div class="row">
                  
                
                  <div class="col-sm-2">
                    <div class="cart-quantity">
                     
                  </div>
                  <form name="myform" action="<?php echo base_url()?>index.php/index/add_to_cart/" method="post">
      <div class="quantity  js--quantity">
      
        
        
        <input type="hidden" name="id" value="<?= $single_produk->pro_id ?>" class="quantity__input">
        <input type="hidden" name="slug" value="<?= $single_produk->pro_slug ?>" class="quantity__input">
         <input type="hidden" name="kat" value="<?= $single_produk->pro_kategori ?>" class="quantity__input">
          <input type="hidden" name="qty2" value="<?= $single_produk->pro_minim_pembelian ?>" >
        
      </div>
      
      <!-- Add to cart button -->
      <input type="submit" class="btn btn-primary" value="Tambahkan Ke Keranjang" >
        
       
      </a>
      </form>
            
                </div><!-- /.row -->
              </div><!-- /.quantity-container -->

              <div class="product-social-link m-t-20 text-right">
                <span class="social-label">Share :</span>
                <div class="social-icons">
                        <ul class="list-inline">
                            <li><a class="fa fa-facebook" href="http://facebook.com/transvelo"></a></li>
                            
                        </ul><!-- /.social-icons -->
                    </div>
              </div>

              

              
            </div><!-- /.product-info -->
          </div><!-- /.col-sm-7 -->
        </div><!-- /.row -->

        
        

        <!-- ============================================== UPSELL PRODUCTS ============================================== -->
</div>
<!-- ============================================== UPSELL PRODUCTS : END ============================================== -->
        <script src="<?= base_url()?>switchstylesheet/switchstylesheet.js"></script>
  
  <script>
    $(document).ready(function(){ 
      $(".changecolor").switchstylesheet( { seperator:"color"} );
      $('.show-theme-options').click(function(){
        $(this).parent().toggleClass('open');
        return false;
      });
    });

    $(window).bind("load", function() {
       $('.show-theme-options').delay(2000).trigger('click');
    });
  </script>
  <!-- For demo purposes – can be removed on production : End -->
</div>