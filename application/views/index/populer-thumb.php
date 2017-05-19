<div class="container">
<div class="row">
  <!-- KIRI -->
  <div class="col-xs-12 col-sm-4">
    <div class="widgets__navigation">      
      <div class="widgets__heading--line">
        <h4 class="widgets__heading">Top Rated Products</h4>
      </div>
        <?php foreach ($top as $tops ) : ?>
      <div class="push-down-20  clearfix">
        <a href="single-product.html<?= base_url()?>index.php/produk_detail/index/<?=  $tops->kat_slug  ?>/<?=  $tops->pro_slug  ?>">
          <img alt="" class="widgets__products" width="78" height="78" src="<?php echo base_url(); ?>asset/upload/<?=  $tops->pro_image  ?>">
        </a>
        <h5 class="products__title">
          <a class="products__link" href="<?= base_url()?>index.php/produk_detail/index/<?=  $tops->kat_slug  ?>/<?=  $tops->pro_slug  ?>"> <?=  $tops->pro_title  ?> </a>
        </h5>
        <span class="line-through">Rp <?=  ($tops->pro_price*(10/100))+$tops->pro_price  ?> </span> <span class="products__price--widgets"> Rp<?=  $tops->pro_price  ?> </span>
        <br><br>    
        <span class="glyphicon glyphicon-star  star-on"></span>    
        <span class="glyphicon glyphicon-star  star-on"></span>    
        <span class="glyphicon glyphicon-star  star-on"></span>    
        <span class="glyphicon glyphicon-star  star-on"></span>
        <span class="glyphicon glyphicon-star  star-on"></span>
        
      </div>
  	<?php endforeach; ?>
      
  
    </div>
  </div>
  <!-- END KIRI -->