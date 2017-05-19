<section id="news" class="sep-top-2x">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div class="section-title text-center">
                <div data-wow-delay=".5s" class="icon-box icon-horizontal icon-md wow bounceInDown">
                  <div class="icon-content img-circle"><i class="fa fa-cloud"></i></div>
                </div>
                <h2 class="upper">Wadas Kelir <em>News</em></h2>
                <p class="lead">Info Menarik dari Rumah Kreatif Wadas Kelir</p>
              </div>
            </div>
          </div>
        </div>
        <div class="blog-preview container">
          <div class="swiper-wrapper sep-top-2x">
            <!--       Article-->
            
            <!--       Article end-->
            <!--       Article-->
           <?php
foreach($content->result() as $value)
{
  $date = generate_tanggal($value->date);
  $isi = hashtag(strip_tags(substr($value->text ,0,200)));
  $pecah = explode(".", $value->image);
  $alt = $pecah[0];
?> 
            <!-- <article class="swiper-slide">
              <div class="post-info text-center"><span class="info-text pull-left text-right">4 April 2014<small>8:36</small></span><a href="blog-detail-single.html"><img src="<?php echo base_url(); ?>otavio/img/team/square/2.jpg" alt="Henry Kolms" style="width:99px; height:99px;" class="img-circle user-thumb"></a><span class="info-text pull-right text-left">Henry Kolms<small><a href="blog-detail-single.html">0 Comment</a></small></span></div>
              <iframe src="http://player.vimeo.com/video/80547152" width="500" height="281" allowfullscreen="allowfullscreen"></iframe>
              <div class="post-content">
                <h5><a href="blog-detail-single.html">How Videos can help promote your business</a></h5>
                <p>Nunc blandit tincidunt consequat. Duis diam metus, suscipit in pulvinar eget, egestas id arcu. Duis a enim vel mauris ultrices. Nullam aliquet velit ac velit tempus in semper neque auctor.</p>
              </div>
            </article> -->
            <!--       Article end-->
            <!--       Article-->
            <article class="swiper-slide">
              <div class="post-info text-center"><span class="info-text pull-left text-right"> <?php echo $date; ?><small>8:36</small></span><a href="<?php echo base_url(); ?>show/detail/<?php echo $value->slug; ?>"><img src="<?php echo base_url(); ?>otavio/img/wk1.png" alt="Marc Crow" style="width:99px; height:99px;" class="img-circle user-thumb"></a><span class="info-text pull-right text-left"><?php echo $value->idlogin; ?><small><a href="blog-detail-single.html">0 Comment</a></small></span></div>
              <div data-navitagion="false" data-slide-speed="300" data-pagination-speed="400" data-single-item="true" data-auto-height="true" data-auto-play="true" class="owl-carousel owl-theme">
                <div class="item"><a href="<?php echo base_url(); ?>show/detail/<?php echo $value->slug; ?>">"><img src="<?php echo base_url(); ?>assets/uploads/<?php echo $value->image; ?>" alt="" class="img-responsive" style="height:300px;width:100%;"></a></div>
                
                
                
              </div>
             

              <div class="post-content">
                <h5><a href="<?php echo base_url(); ?>show/detail/<?php echo $value->slug; ?>"><?php echo $value->title;?></a></h5>
                
                <p> <?php echo $isi; ?>[...].<a href="<?php echo base_url(); ?>show/detail/<?php echo $value->slug; ?>" class="read-more-btn btn btn-link btn-sm">Read More <span class="fa fa-chevron-right"></span></a></p>
              </div>
              <?php 
$tags = explode(',', $value->tag);
foreach($tags as $tag){
?>
<a href="<?php echo base_url();?>tag/show/<?php echo $tag; ?>" rel="tag"><?php echo $tag; ?></a>
<?php } ?>
            </article>
             <?php
            }
?>
            <!--       Article end-->
            <!--       Article-->
              
            <!--       Article end-->
          </div>
        </div>
      </section>