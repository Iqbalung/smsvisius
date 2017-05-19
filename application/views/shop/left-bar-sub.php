<!-- <pre>
<?php echo print_r($kategori); ?>
<?php echo print_r($subkat); ?> 
</pre> -->
<div class="container">
  <div class="row">
      <div class="col-xs-12  col-sm-3">
        <aside class="sidebar  sidebar--shop">
         
          <hr class="shop__divider">
          <div class="shop-filter">
            
            <h5 class="sidebar__subtitle">Categories</h5>
            <ul class="nav  nav--filter">          
              <?php foreach ($kategori as $val) { ?>

                <li><a data-multifilter="1" class="js--filter-selectable"><?php echo $val->kat_judul; ?></a></li>
                   <ul style="list-style-type:disc"> <?php foreach ($subkat as $value) { ?>
                     <li><a href="<?php echo base_url()?>index.php/shop/selected_sub/<?php echo $val->kat_slug; ?>/<?php echo $value->subkat_slug; ?>"> <?php  echo $value->subkat_judul; ?></a></li>
                      <?php } ?></ul>
              <?php } ?>
            
            <hr class="divider">
            
            
          
          </div>
        </aside>
      </div>