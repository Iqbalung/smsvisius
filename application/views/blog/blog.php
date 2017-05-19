<!-- Banners big -->
<div class="container">
  <div class="banners--big  banners--big-left  push-down-30">
    <div class="row">
      <div class="col-xs-12  col-md-7">
        <div class="banners--big__text">
          This is a <strong>Organique blog</strong> where smart people write even smarter things :)
        </div>
      </div>
      <div class="col-xs-12  col-md-5">
        <div class="blog__archive">
          <a class="blog__banner__link" href="blog.html">SEE BLOG ARCHIVE &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="glyphicon  glyphicon-circle  glyphicon-chevron-right"></span></a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container  push-down-30">
  <div class="row">
    <div class="col-xs-12  col-sm-8  col-sm-push-4">
      

<section>
   <?php 
                                $i = 1;
                                foreach ($blog as  $value) {    
                                
                            ?>
  <article>
    
    
    
    <header>
      
      <div class="metadata  push-down-30">
        
      </div>
    </header>
    <div class="blog-content__text">
    <div class="row">
    <div class="col-md-4"><a href="single-post.html"><img alt="Blog featured image" src="<?= base_url()?>asset/upload/<?php echo  $value->blog_img; ?>" height="5%" ></a>
    </div>
    <div class="col-md-8">
      <h3 class="blog-title"><a href="single-post.html"><span class="light"><?php echo  $value->blog_title; ?></a></h3>  
      <hr></hr>
        <time class="blog__date" datetime="Fri Dec 13 2013 01:00:00 GMT+0100 (CET)"><?php echo $value->time; ?></time>
    <p><?php echo  substr($value->text, 0,200); ?>...<a class="btn btn-success" href="<?= base_url() ?>/index.php/index/blog_detail/<?php echo  $value->blog_slug; ?>">Read More</a></p>
</div>
    </div>
    </div>
     <hr class="divider">
  </article>
   <?php
                                $i++;
                                }
                            ?>    
 
  
   
  
  
</section>


    </div>
    <div class="col-xs-12  col-sm-4  col-sm-pull-8">
      <aside class="sidebar  sidebar--blog">
  
  <nav class="sidebar-container">
    <h3><span class="light">Blog</span> Posts Archive</h3>
    <hr>
    <ul class="nav-blog">

       <?php 
                                $i = 1;
                                foreach ($blog as  $value) {    
                                
                            ?>
      <li><a href="#"><?php echo  $value->blog_title; ?></a> (5)</li>
       <?php
                                $i++;
                                }
                            ?>    
     
    </ul>
  </nav>
  <div class="sidebar-container">
    <h3><span class="light">Twitter</span> Feed</h3>
    <hr>
    <a class="twitter-timeline" href="https://twitter.com/ProteusNetCom" data-widget-id="428877992446554113">Tweets by @ProteusNetCom</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
  </div>
  
</aside>
    </div>
  </div>
</div>