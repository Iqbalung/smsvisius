   <section style="background-image: url(<?php echo base_url(); ?>otavio/img/kreatifitas.jpg);" class="header-section fading-title parallax">
        <div class="section-shade sep-top-5x sep-bottom-3x">
          <div class="container">
            <div class="section-title upper text-center">
              <h2 class="light small-space">The New Way to&nbsp;<span class="text-primary">Success</span></h2>
              
            </div>
          </div>
        </div>
      </section>
<section class="sep-top-2x sep-bottom-2x">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div class="section-title text-center">
                <h3>Get In Touch With Us Today</h3>
                <p class="lead">
                  You’ve got questions, and we have answers. Just send us a message
                  and one of our knowledgeable support staff will be in contact with
                  you within 48hrs – even on weekends and holidays.
                </p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <div class="contact-form sep-top-lg">
                <div id="successMessage" style="display:none" class="alert alert-success text-center">
                  <p><i class="fa fa-check-circle fa-2x"></i></p>
                  <p>Thanks for sending your message! We'll get back to you shortly.</p>
                </div>
                <div id="failureMessage" style="display:none" class="alert alert-danger text-center">
                  <p><i class="fa fa-times-circle fa-2x"></i></p>
                  <p>There was a problem sending your message. Please, try again.</p>
                </div>
                <div id="incompleteMessage" style="display:none" class="alert alert-warning text-center">
                  <p><i class="fa fa-exclamation-triangle fa-2x"></i></p>
                  <p>Please complete all the fields in the form before sending.</p>
                </div>
                <form id="contactForm" action="php/contact.php" method="post" class="validate">
                  <div class="row">
                    <div class="col-md-6 sep-top-xs">
                      <div class="form-group">
                        <label for="name" class="upper">Your Name</label>
                        <input id="name" type="text" placeholder="Enter name" name="senderName" class="form-control input-lg required">
                      </div>
                    </div>
                    <div class="col-md-6 sep-top-xs">
                      <div class="form-group">
                        <label for="email" class="upper">Your Email</label>
                        <input id="email" type="email" placeholder="Enter email" name="senderEmail" class="form-control input-lg required email">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 sep-top-xs">
                      <div class="form-group">
                        <label for="phone" class="upper">Your Phone</label>
                        <input id="phone" type="text" placeholder="Enter phone" name="phone" class="form-control input-lg required">
                      </div>
                    </div>
                    <div class="col-md-6 sep-top-xs">
                      <div class="form-group">
                        <label for="company" class="upper">Your Company</label>
                        <input id="company" type="text" placeholder="Enter company" name="company" class="form-control input-lg required">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 sep-top-xs">
                      <div class="form-group">
                        <label for="comment" class="upper">Your comment</label>
                        <textarea id="comment" placeholder="Enter comment" rows="9" name="comment" class="form-control input-lg required"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 sep-top-xs">
                      <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i>&nbsp;Send message</button>
                      </div>
                    </div>
                  </div>
                  <!--input#subject.form-control.input-lg.required(type='text', placeholder='Subject of your message', name='subject')
                  -->
                </form>
                <div class="hidden"></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 icon-gradient sep-top-lg">
              <div class="icon-box icon-horizontal icon-sm">
                <div class="icon-content img-circle"><i class="fa fa-map-marker"></i></div>
                <div class="icon-box-content">
                  <h6 class="upper">Address</h6>
                  <p>RUMAH  KREATIF WADAS KELIR [RKWK]
<br>Jln. Wadas Kelir Rt. 7 Rw. 5 Karangklesem
Purwokerto Selatan – Banyumas</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 icon-gradient sep-top-lg">
              <div class="icon-box icon-horizontal icon-sm">
                <div class="icon-content img-circle"><i class="fa fa-phone"></i></div>
                <div class="icon-box-content">
                  <h6 class="upper">Phone</h6>
                  <p>081564777990<br>087737320266</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 icon-gradient sep-top-lg">
              <div class="icon-box icon-horizontal icon-sm">
                <div class="icon-content img-circle"><i class="fa fa-envelope"></i></div>
                <div class="icon-box-content">
                  <h6 class="upper">Email</h6>
                  <p>rumahkreatifwadaskelir@gmail.com</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 icon-gradient sep-top-lg">
              <div class="icon-box icon-horizontal icon-sm">
                <div class="icon-content img-circle"><i class="fa fa-clock-o"></i></div>
                <div class="icon-box-content">
                  <h6 class="upper">Office Hours</h6>
                  <p>Mon / Friday<br>09:00 - 13.00 / 14:00 - 18:00</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Contact section-->
      <section>
        <div id="map-canvas" style="height:500px">
          <script>
            var
              lat = -37.817921,
              lon = 144.965076,
              infoText = [
                '<div style="white-space:nowrap">',
                  '<h5>OTTAVIO STUDIOS</h5>',
                  'Envato, level 13, 2<br>',
                  'Elizabeth St, Melbourne, Victoria<br>',
                  '3000, Australia',
                '</div>'
              ],
              mapOptions = {
                scrollwheel: false,
                markers: [
                  { latitude: lat, longitude: lon, html: infoText.join('') }
                ],
                icon: {
                  image: 'img/themes/meadow/marker.png',
                  iconsize: [72, 65],
                  iconanchor: [12, 65],
                },
                latitude: lat,
                longitude: lon,
                zoom: 11
              };
          </script>
        </div>
      </section>