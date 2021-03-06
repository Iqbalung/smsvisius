<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Visius Tikcketing</title>
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <!-- CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,400,400italic,500,500italic">        
        <link rel="stylesheet" href="<?= base_url()?>assets2/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url()?>assets2/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?= base_url()?>assets2/css/animate.css">
        <link rel="stylesheet" href="<?= base_url()?>assets2/css/style.css">
        <link rel="shortcut icon" href="<?= base_url()?>assets2/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= base_url()?>assets2/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= base_url()?>assets2/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= base_url()?>assets2/ico/apple-touch-icon-72-precomposed.png">
    
        <link rel="apple-touch-icon-precomposed" href="<?= base_url()?>assets2/ico/apple-touch-icon-57-precomposed.png">
    <style>
    html { 
	 
	  -webkit-background-size: cover;
	  -moz-background-size: cover;
	  -o-background-size: cover;
	  background-size: cover;
	}

    </style>

    </head>
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"  id="onload">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4 class="modal-title"><i class="fa fa-exclamation-circle"></i>Perhatian</h4>
        </div>
        <div class="modal-body">
            Registrasi Gagal, Nomor yang anda dafatarkan telah ada di database kami.
        </div>
      </div>
    </div>
</div>
    <body background="<?= base_url()?>assets/img/backgrounds/bg.jpg">
		<!-- Contact Form -->
		<div class="c-form-container section-container section-container-image-bg">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-8 col-sm-offset-2 c-form section-description wow fadeIn">
	                    <h2>Welcome Visius Ticketing</h2>
	                    <img src="<?= base_url() ?>assets/images/logo.png" />
	                    <p>Please insert your details to join our event</p>
	                </div>
	            </div>
	            <div class="row">
	            	<div class="col-sm-6 col-sm-offset-3 form-box">
                        <div class="c-form-bottom">
		                    <form  action="<?= base_url() ?>index.php/index/add_peserta" method="post">
		                    	<div class="form-group">
		                    		<label>Name</label>
		                        	<input type="text" name="nama" placeholder="Your name..." class="c-form-name form-control" >
		                        </div>
		                        <div class="form-group">
		                        	<label>Phone Number</label>
		                        	<div class="input-group">
		                        	
		                        	<span class="input-group-addon" id="basic-addon3">+62</span>
		                        	<input type="number" name="nohp" placeholder="8599000XXXX" class="c-form-number form-control" >
		                        </div>
		                        </div>
		                    	<div class="form-group">
		                  			<label>Email</label>
		                        	<input type="text" name="email" placeholder="Your email address..." class="c-form-email form-control" >
		                        </div>
		                        
		                        <div class="form-group">
		                        	<label>Kota</label>
		                        	<select name="carlist" form="carform">
									  <option value="volvo">Aceh</option>
									  <option value="saab">Bandar Lampung</option>
									  <option value="saab">Bandung</option>
									  <option value="opel">Jakarta</option>
									  <option value="audi">Makasar</option>
									  <option value="audi">Surabaya</option>
									  <option value="audi">Pontianak</option>
									  <option value="audi">Semarang</option>
									  <option value="audi">Surabaya</option>
									  <option value="audi">Surabaya</option>
									</select>
		                        </div>
		                        
		                         <button type="submit" class="btn btn-warning btn-block">Send message</button>
		                    </form>
	                    </div>
	                    
	                </div>
	            </div>
	            
	            <div class="row">
	            	<div class="col-sm-12 c-form-info-title wow fadeInUp">
	            		
	            	</div>
	            </div>
	            
	            <div class="row">
	            	<div class="col-sm-4 c-form-info-box wow fadeInUp">
	            		<div class="c-form-info-box-icon">
	            			<i class="fa fa-map-marker"></i>
	            		</div>
	            		<p>Via Po 10<br>Maspion Plaza, Lt. 9 nunung Sahari – Jakarta</p>
	            	</div>
	            	<div class="col-sm-4 c-form-info-box wow fadeInDown">
	            		<div class="c-form-info-box-icon">
	            			<i class="fa fa-phone"></i>
	            		</div>
	            		<p>Phone:<br>(021) 64701213 </p>
	            	</div>
	            	<div class="col-sm-4 c-form-info-box wow fadeInUp">
	            		<div class="c-form-info-box-icon">
	            			<i class="fa fa-envelope"></i>
	            		</div>
	            		<p>Email:<br><a href="mailto:contact.azmind@gmail.com">support@zgencreative.com </a></p>
	            	</div>

	            	
	            </div>
	            
	        </div>
        </div>
        <!-- Javascript -->
        <script src="<?= base_url()?>assets2/js/jquery-1.11.1.min.js"></script>
        <script src="<?= base_url()?>assets2/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?= base_url()?>assets2/js/jquery.backstretch.min.js"></script>
        <script src="<?= base_url()?>assets2/js/wow.min.js"></script>
        <script src="<?= base_url()?>assets2/js/scripts.js"></script>
        <!--[if lt IE 10]>
            <script src="assets2/js/placeholder.js"></script>
        <![endif]-->
         <!-- Theme JavaScript -->
    <script src="<?= base_url() ?>assets/js/creative.min.js"></script>
<script>   $(window).load(function(){
                $('#onload').modal('show');
            });</script>

    </body>

</html>