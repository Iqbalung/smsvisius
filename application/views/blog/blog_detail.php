 <div class="container">
   
  <article>
     
    <br><br><br><br>
    <header>
      <h3 class="blog-title"><a href="single-post.html"><span class="light"><?php echo $blog->blog_title; ?></a></h3>
      <div class="metadata  push-down-30">
        <time class="blog__date" datetime="Fri Dec 13 2013 01:00:00 GMT+0100 (CET)"><?php echo $blog->time; ?></time> 
      </div>
    </header>
    <div class="blog-content__text">
    
    <a href="single-post.html"><img class="wp-post-image" alt="Blog featured image" src="<?= base_url()?>asset/upload/<?php echo  $blog->blog_img; ?>" width="600" height="284"></a>
      <p><?php echo $blog->text; ?>.</p>
    </div>
    
  </article> 
  <hr class="divider">
</div>