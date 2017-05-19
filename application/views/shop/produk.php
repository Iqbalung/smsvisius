<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.2/isotope.pkgd.js"></script>
<!-- or -->
<link rel="stylesheet" href="<?= base_url()?>asset/css/index.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.2/isotope.pkgd.min.js"></script>
    <div class="col-xs-12  col-sm-9">
        <div class="grid">
         <!--  <ul class="pagination  shop__amount-filter">
            <li>
              <a class="shop__amount-filter__link  hidden-xs" href="shop.html"><span class="glyphicon glyphicon-th"></span></a>
            </li>
            <li>
                <a class="shop__amount-filter__link  hidden-xs" href="shop-list-view.html"><span class="glyphicon glyphicon-th-list"></span></a>
            </li>
          </ul> -->
          <div class="shop__sort-filter">
          <form action="<?= base_url()?>index.php/shop/sort_product" method="post">
            <!-- <select class="js--isotope-sorting  btn  btn-shop" name="sort" onchange="this.form.submit()">
               <option value="">By Price (Low to High) &uarr;</option>
                <option value="">By Price (High to Low) &darr;</option> 
                 <option name="sort" value="az">Filter &uarr;</option>
                <option name="sort" value="az">By Name a - z &uarr;</option>
                <option name="sort" value="za">By Name z - a &darr;</option>
               
                
            </select> -->
             <div class="shop__sort-filter">
         <!--  <select class="js--isotope-sorting  btn  btn-shop">
              <option value='{"sortBy":"price", "sortAscending":"true"}'>By Price (Low to High) &uarr;</option>
              <option value='{"sortBy":"price", "sortAscending":"false"}'>By Price (High to Low) &darr;</option>
              <option value='{"sortBy":"name", "sortAscending":"true"}'>By Name (Low to High) &uarr;</option>
              <option value='{"sortBy":"name", "sortAscending":"false"}'>By Name (High to Low) &darr;</option>
              <option value='{"sortBy":"rating", "sortAscending":"true"}'>By Rating (Low to High) &uarr;</option>
              <option value='{"sortBy":"rating", "sortAscending":"false"}'>By Rating (High to Low) &darr;</option>
          </select> -->
      </div>
            </form>
          </div>
             
            <div class="row">
            
        </div>
          <hr class="shop__divider">
          <div class="row filtr-container" >

              <?php foreach($produk as $val) { ?> 
                  <div class="col-xs-6 col-sm-4  js--isotope-target filtr-item  js--cat-1" data-price="<?php echo $val->pro_price; ?>" data-category="<?=  $val->pro_kategori ?>"  data-sort="<?=  $val->pro_name?>" style="min-height:320px;">
                <div class="products__single">
                  
                  <figure class="products__image">
                    <a href="<?php echo base_url()?>index.php/produk_detail/index/<?=  $val->kat_slug  ?>/<?=  $val->pro_slug  ?>">
                      <img alt="#" class="product__image" width="260" height="334" src="<?php echo base_url(""); ?>asset/upload/<?php echo $val->pro_image; ?>">
                    </a>
                    <div class="product-overlay">
                      <a class="product-overlay__more" href="<?php echo base_url()?>index.php/produk_detail/index/<?=  $val->kat_slug  ?>/<?=  $val->pro_slug  ?>">
                        <span class="glyphicon glyphicon-search"></span>
                      </a>
                    
                      <div class="product-overlay__stock">
                          <?php echo $val->pro_stock; ?> STOCK
                        </span>
                      </div>
                    </div>
                      <a class="btn btn-success" href="<?php echo base_url()?>index.php/produk_detail/index/<?=  $val->kat_slug  ?>/<?=  $val->pro_slug  ?>">
                        +<span class="glyphicon glyphicon-shopping-cart"></span>Beli 
                      </a>
                  </figure>

                  <div class="row">
                    <div class="col-xs-12">
                      <h5 class="products__title">
                        <a class="products__link  js--isotope-title" href="<?php echo base_url()?>index.php/produk_detail/index/<?=  $val->kat_slug  ?>/<?=  $val->pro_slug  ?>"><?php echo $val->pro_name; ?></a>
                      </h5>
                    </div>
                    <div class="col-xs-12">
                    
                    </div>
                  </div>
                    Rp <?php echo  $this->cart->format_number($val->pro_price); ?>
                     
                  <div class="products__category">
                    <?php echo $val->kat_judul; ?>
                  </div>
                </div>
              </div>
              <?php } ?><br>  <br>       
           </div>  
            </div>
            
    <?php echo $pagination; ?>
             </div>
     
             <!-- Include jQuery & Filterizr -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="<?= base_url()?>asset/filterizr/jquery.filterizr.js"></script>
    <script src="<?= base_url()?>asset/js/controls.js"></script>

    <!-- Kick off Filterizr -->
    <script type="text/javascript">
        $(function() {
            //Initialize filterizr with default options
            $('.filtr-container').filterizr();
        });
    </script>