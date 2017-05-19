<section id="event" class="sep-top-3x sep-bottom-3x">
        <div class="container">
          <div class="row">
            <div class="col-md-5">
              <div class="section-title">
                <h1 class="bordered-left upper wow bounceInLeft">Event</h1>
                <p class="lead wow bounceInRight">Event Menarik Yang Diadakan Oleh Rumah Kreatif Wadas Kelir</p>
              </div>
            </div>
          </div>
          <div class="row">
          <?php foreach ($project->result() as $value)
                {
                  $isi = strip_tags(substr($value->text ,0,190));
                  $pecah = explode(".", $value->image);
                  $alt = $pecah[0];
                ?>
            <div class="col-md-6 sep-top-2x">
              <div class="row">
                
                <div class="col-md-6">
                  <div class="team-photo"><img src="<?php echo base_url(); ?>assets/uploads/<?php echo $value->image; ?>" alt="Anna Larkins" class="img-responsive">
                    <div class="team-connection">
                      <div class="team-connection-list text-center">
                        <ul>
                          <li><a href="#"><i class="fa fa-github fa-2x"></i></a></li>
                          <li><a href="#"><i class="fa fa-pinterest fa-2x"></i></a></li>
                          <li><a href="#"><i class="fa fa-dribbble fa-2x"></i></a></li>
                          <li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
               
                <div class="col-md-6">
                  <div class="team-name">
                    <h5 class="upper"><?php echo $value->title;?></h5><span>Web Designer</span>
                  </div>
                  <p>Pellentesque pellentesque pharetra lacus, eget aliquet mi mattis eu. Cum sociis natoque penatibus et magnis.</p>
                 <!--  <div class="sep-top-sm">
                    <div class="progress minimal">
                      <div role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;" class="progress-bar">Photoshop</div>
                    </div>
                    <div class="progress minimal">
                      <div role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;" class="progress-bar">Php &amp; MySql</div>
                    </div>
                    <div class="progress minimal">
                      <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;" class="progress-bar">Html &amp; Css</div>
                    </div>
                    <div class="indicator"><span class="indicator-line"></span><span class="pull-left">0</span><span class="middle">50</span><span class="pull-right">100</span></div>
                  </div> -->
                </div>
              </div>
            </div>
             <?php } ?>
            
            </div>
          </div>
       
      </section>