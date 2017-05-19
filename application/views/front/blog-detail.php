<!DOCTYPE html>
<html class="no-js">
  
  <body>
    <div id="load"></div><!--[if lt IE 9]>
    <p class="browsehappy">You are using an strong outdated browser. <br>Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
  
   
      <!-- Start Nav Section-->
      
      <!-- Start main post-->
      <main role="main" itemscope itemtype="http://schema.org/BlogPosting" class="header-section sep-bottom-lg">
	   <?php  
    foreach ($detail->result() as $value) 
    {
      $date = generate_tanggal($value->date);
      $isi  = $value->text;
      //$isi  = hashtag($value->text);
      $pecah = explode(".", $value->image);
      $alt = $pecah[0];
    ?>
        <div style="background-image: url('<?php echo base_url(); ?>assets/uploads/<?php echo $value->image; ?>');" class="parallax">
          <div class="section-shade sep-top-5x sep-bottom-sm">
            <div class="container">
              <div class="row">
                <div role="contentinfo" class="col-md-3 sidebar sep-bottom-xs">
                  <footer class="author-info"><a href="#" itemprop="author" class="post-author-link"><img src="<?php echo base_url(); ?>otavio/img/wk1.png" alt="Michelle White" style="width:72px; height:72px;" class="img-circle img-responsive"></a>
                    <div class="author-info-content light">
                      <h6 class="author-name"><?php  echo $value->idlogin;?></h6>
                      <time datetime="2014-06-17T14:28-08:00" itemprop="datePublished" class="small"><?php echo $date;?></time>
                    </div>
                  </footer>
                </div>
                <div class="col-md-9 sep-bottom-xs">
                  <header class="section-title">
                    <h3 itemprop="headline" class="post-title light"><a href="#" rel="bookmark" title="link to this post" itemprop="url" class="light"><?php echo $value->title;?></a></h3>
                    <time datetime="2009-10-22T14:28-08:00" itemprop="datePublished"></time>
                  </header>
                  <p class="lead light">
</p>
                </div>
              </div>
            </div>
          </div>
        </div>
       
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-md-push-3">
              <footer role="contentinfo" class="post-info sep-top-md">
                <ul class="social-icon pull-right">
                  <li><a href="#"><i class="fa fa-twitter fa-lg"></i></a></li>
                  <li><a href="#"><i class="fa fa-facebook-square fa-lg"></i></a></li>
                  <li><a href="#"><i class="fa fa-pinterest fa-lg"></i></a></li>
                </ul>
                
                <ul class="social-icon">
                  
                  <li><a href="#"><i class="fa fa-eye"></i><small> <?php echo $value->counter;?></small></a></li>
                  <li class="maxi"><a href="#"><i class="fa fa-comments"></i><small>&nbsp;1500 Comments</small></a></li>
                </ul>
              </footer>
              <div itemprop="articleBody" class="post-text sep-top-md">
             <?php echo $isi;?>
              </div>
              <footer role="contentinfo" class="post-info sep-top-md">
                <ul class="social-icon pull-right">
                  <li><a href="#"><i class="fa fa-twitter fa-lg"></i></a></li>
                  <li><a href="#"><i class="fa fa-facebook-square fa-lg"></i></a></li>
                  <li><a href="#"><i class="fa fa-pinterest fa-lg"></i></a></li>
                </ul>
                <!--
                li
                  .btn-group
                    a.dropdown-toggle(href='#', data-toggle="dropdown")
                      i.fa.fa-bars.fa-lg
                    ul.dropdown-menu.pull-right(role='menu')
                      li
                        a(href='#') Dropdown link
                      li
                        a(href='#') Dropdown link
                -->
                
              </footer>
			   <?php
}
?>
              <!-- start Comments-->
              
              <!-- end Comments-->
              <!-- start Comment Form-->
              <section id="comment-form" class="sep-top-lg">
                <h4>Leave a comment</h4>
                <div class="sep-top-sm">
                  <div class="contact-form">
                    <form method="get" action="" class="validate">
                      <div class="form-group">
                        <label for="name">Your Name</label>
                        <input id="name" type="text" name="name" class="form-control input-lg required">
                      </div>
                      <div class="form-group">
                        <label for="email">Your Email</label>
                        <input id="email" type="email" name="email" class="form-control input-lg required email">
                      </div>
                      <div class="form-group">
                        <label for="website">Your Website</label>
                        <input id="website" type="text" name="website" class="form-control input-lg">
                      </div>
                      <div class="form-group">
                        <label for="comment">Your comment</label>
                        <textarea id="comment" placeholder="Enter comment" rows="9" name="comment" class="form-control input-lg required"></textarea>
                      </div>
                      <div class="form-group sep-top-xs">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-comment"></i>&nbsp;Post comment</button>
                      </div>
                    </form>
                  </div>
                </div>
              </section>
              <!-- end Comment Form-->
            </div>
            <aside id="sidebar" role="complementary" class="col-md-3 col-md-pull-9 sep-top-md sidebar">
              <!-- start sidebar-->
              <h5 class="widget-title upper sep-bottom-xs">Recent Posts</h5>
              <?php foreach ($random->result() as $rand) 
				{
					$pecah = explode(".", $value->image);
					$alt = $pecah[0];
				?>
			  <ul class="widget widget-media rounded sep-bottom-lg">
                <li class="media media-bordered clearfix"><a href="<?php echo base_url(); ?>show/detail/<?php echo $rand->slug; ?>"><img width="600" height="250" src="<?php echo base_url(); ?>assets/uploads/<?php echo $rand->image; ?>" class="img-responsived img-thumbnail post-image" alt="<?php echo $alt;?>"/></a>
                  <div class="media-body">
                    <h6 class="media-heading"><a href="#"><?php echo $rand->title;?></a></h6><small>November 28, 2013</small>
                  </div>
                </li>
                
              </ul>
				<?php } ?>
              <!-- end sidebar-->
            </aside>
          </div>
        </div>
      </main>
      <!-- End main post-->
      <div class="container">
        <div class="sep-bottom-2x">
          <!-- start pagination-->
          <ul class="pager">
            <li class="previous hidden-xs"><a href="#"><i class="fa fa-arrow-left"></i>&nbsp;Older</a></li>
            <li class="next disabled hidden-xs"><a href="#">Newer&nbsp;<i class="fa fa-arrow-right"></i></a></li>
          </ul>
          <!-- end pagination-->
        </div>
      </div>
      <!-- Start call to action section-->
      
      <!-- End call to action section-->
      <!-- Start Footer section-->
      
      <!-- End Footer section-->
      
  </body>
</html>