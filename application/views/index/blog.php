    <?php 
                                $i = 1;
                                foreach ($blog as  $value) {    
                                
                            ?><div class="col-xs-12 col-sm-4">
      <div class="widgets__navigation">
        <div class="widgets__heading--line">
          <h4 class="widgets__heading"><?php echo  $value->blog_title; ?></h4>
        </div>
        <img alt="#" class="product__image" src="<?= base_url()?>asset/upload/<?php echo  $value->blog_img; ?>" width="353" height="186">
        <div class="products__title">
        <div class="push-down-10"></div>
          
        </div>
      <?php echo  substr($value->text, 0,200); ?>...<a class="btn btn-success" href="<?= base_url() ?>/index.php/index/blog_detail/<?php echo  $value->blog_slug; ?>">Read More</a>
      </div>
    </div><?php
                                $i++;
                                }
                            ?>    
  </div>
</div>