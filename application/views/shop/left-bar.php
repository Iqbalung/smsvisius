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
            
            
            <div class="row">
            <!-- A basic setup of simple mode filter controls, all you have to do is use data-filter="all"
            for an unfiltered gallery and then the values of your categories to filter between them -->
           
        </div>
            <div class="side-menu animate-dropdown outer-bottom-xs">
        <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>        
          <nav class="yamm megamenu-horizontal" role="navigation">
            <ul class="nav">
               <?php foreach ($kategori as $val) { ?>
              <li class="dropdown menu-item">
                <a href="<?= base_url()?>index.php/shop/selected_kategori/<?php echo $val->kat_slug; ?> " class="dropdown-toggle"><?php echo $val->kat_judul; ?> </a>
              </li><!-- /.menu-item -->
               <?php } ?>
              

      
        </ul><!-- /.menu-item -->
      </nav>
                           
          </div>

            
            
          
          </div>
        </aside>
      </div>