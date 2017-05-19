
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ProteusNet">
    <link rel="icon" type="image/ico" href="images/favicon.png">

    <title>Organique - HTML Template For Organic Shop</title>

    <!-- Custom styles for this template -->
    <!-- build:css stylesheets/main.css -->
    <link href="stylesheets/bootstrap.css" rel="stylesheet">
    <link href="stylesheets/main.css" rel="stylesheet">
    <!-- endbuild -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- Google fonts -->
    // <script type="text/javascript">
    //   WebFontConfig = {
    //     google: { families: [ 'Arvo:700:latin', 'Open+Sans:400,600,700:latin' ] }
    //   };
    //   (function() {
    //     var wf = document.createElement('script');
    //     wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
    //       '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    //     wf.type = 'text/javascript';
    //     wf.async = 'true';
    //     var s = document.getElementsByTagName('script')[0];
    //     s.parentNode.insertBefore(wf, s);
    //   })();
    // </script>

  </head>
  <body>

<div class="breadcrumbs  no-margin">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
       
      </div>
    </div>
  </div>
</div>
<div class="woocommerce  push-down-30">
  <div class="container">
  
    <div class="row">
      <div class="col-xs-12">
        <h3>Checkout</h3>
        <hr>
     
      </div>
      <div class="col-xs-12  col-sm-6">
        <h3><span class="light">Sudah Punya akun ?</span> Loggin</h3>
        <div class="row">
        
          <?= validation_errors() ?>
          <?= form_open('login/login_checkout') ?>
          <div class="col-xs-12  col-sm-8  push-down-10">
            <p>
              <label>
               Username
                <abbr class="required">
                  *
                </abbr>
              </label>
              <input name="username" class="form-control" placeholder="Username Anda">
            </p>
          </div>
          <div class="col-xs-12  col-sm-8  push-down-10">
            <p>
              <label>
              Password               
                
              </label>
              <input  name="password" class="form-control" placeholder="Password Anda" type="password"><br><br>
             <button type="submit" class="btn btn-success">Login</button>
                  <?=  anchor(base_url(),'Cancel',['class'=>'btn btn-default']) ?>
            </p>
          </div>
            
          <?= form_close() ?>
        </div>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 
      <div class="col-xs-12 col-sm-6">
        <p class="form-row">

         <h3><span class="light">Belum Punya Akun ? </span> isi form</h3>
        </p>
         <?= form_open('register') ?>
                <div class="form-group">
                  <label for="username">Nama</label>
                  <input type="text"class="form-control  push-down-10"  name="rusername" value="<?= set_value('rusername') ?>">
                </div>

                
                                  

                                 <div class="form-group">
                                    <label for="username">Email</label>
                                    <input type="text"class="form-control  push-down-10"  name="email" value="<?= set_value('email') ?>">
                                </div>
                <div class="form-group">
                  <label for="password">Password : </label>
                  <input type="password"class="form-control  push-down-10"  name="rpassword" value="<?= set_value('rpassword') ?>" >
                  <label for="password">Re-Type Password : </label>
                  <input type="password"class="form-control  push-down-10"  name="repassword" value="<?= set_value('repassword') ?>" >
                </div>
                                
                                 
                                <div class="form-group">
                                    <label for="username">Handphone</label>
                                    <input type="text"class="form-control  push-down-10"  name="no_hp" value="<?= set_value('no_hp') ?>">

                                </div>
                                <div class="form-group">
                                    <label for="username">Koepos</label>
                                    <input type="text"class="form-control  push-down-10"  name="kodepos" value="<?= set_value('kodepos') ?>">

                                </div>
                                 
                                <select class="form-control  push-down-10" name="propinsi_tujuan" id="propinsi_tujuan" value="<?= set_value('propinsitujan'); ?>">
                                  <option value="" selected="" disabled="">Pilih Provinsi</option>
                                  <?php $this->load->view('rajaongkir/getProvince'); ?>
                                </select>
                                <br>
                                <select class="form-control  push-down-10" name="destination" id="destination" value="<?= set_value('destination'); ?>">
                                <option value="" selected="" disabled="">Pilih Kota</option>
                                </select><br>

                                <div class="form-group">
                                    <label for="username">Alamat</label>
                                    <input type="text"class="form-control  push-down-10"  name="alamat" value="<?= set_value('alamat') ?>">
                                </div>


                <div class="form-group">
                <div class="col-md-2"></div>
                <div class="col-md-7">
                  <button type="submit" class="btn btn-success">Register</button>
                  <?=  anchor(base_url(),'Cancel',['class'=>'btn ']) ?>
                  
                </div>

                <div class="col-md-3">
                  <?=  anchor('Login','Login',['class'=>'btn  btn-default']) ?>
                </div>
                </div>
              <?= form_close() ?>
       
        <div class="panel-body">
          <br>
         
          </div>
          <div class="panel-body">
            
          <br>
         
          </div>
          
         
        </div>
      </div>



      </div>
      
    </div>
    <hr class="divider">
  </div>
</div>
 
  <div class="search-mode__overlay"></div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<script>
$(document).ready(function(){

  $("#propinsi_tujuan").click(function(){
    $.post("<?php echo base_url(); ?>index.php/rajaongkir/getCity/"+$('#propinsi_asal').val(),function(obj){
      $('#origin').html(obj);
    });
      
  });

  $("#propinsi_tujuan").click(function(){
    $.post("<?php echo base_url(); ?>index.php/rajaongkir/getCity/"+$('#propinsi_tujuan').val(),function(obj){
      $('#destination').html(obj);
    });
      
  });

  /*
  $("#cari").click(function(){
    $.post("<?php echo base_url(); ?>index.php/rajaongkir/getCost/"+$('#origin').val()+'&dest='+$('#destination').val()+'&berat='+$('#berat').val()+'&courier='+$('#courier').val(),function(obj){
      $('#hasil').html(obj);
    });
  });

  */

  
});
</script>



  </body>
</html>
