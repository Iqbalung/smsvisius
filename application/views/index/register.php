<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content  ">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
        <h3><span class="light">Register</span> </h3>
        <hr class="divider">
      </div>
      <div class="modal-body">
        <?= form_open('register') ?>
       
                                   
                <div class="form-group">
                  <label for="username">Username (Tanpa Spasi atau Alphanumeric) :</label>
                  <input type="text"class="form-control  push-down-10"  name="rusername" value="<?= set_value('rusername') ?>">
                </div> 
<style>
input[type=text] {
     border: 1px solid #E6E6E6;
}
input[type=password] {
     border: 1px solid #E6E6E6;
}
select{
     border: 1px solid #E6E6E6;
}

input[type=text]:focus {
     border: 1px solid #555;
}
.verticalLine {
    border-left: thick solid #ff0000;
}
</style>
                
                                 
                                
                <div class="form-group">
<label >Password (Tanpa Spasi atau Alphanumeric) : </label>
                  <input type="password"class="form-control  push-down-10"  name="rpassword" value="<?= set_value('rpassword') ?>" >
                  <label for="password">Re-Type Password : </label>
                  <input type="password"class="form-control  push-down-10"  name="repassword" value="<?= set_value('repassword') ?>" >
                </div>
                 <div class="form-group"><label for="username">Nama</label>
                                    <input type="text"class="form-control  push-down-10"  name="email" value="<?= set_value('email') ?>">
                                </div>
                                <div class="form-group">
                                    <label for="username">Alamat</label>
                                    <input type="text"class="form-control  push-down-10"  name="alamat" value="<?= set_value('alamat') ?>">
                                </div>
                                  
                                <div class="form-group">
                                    <label for="username">Handphone</label>
                                    <input type="text"class="form-control  push-down-10"  name="no_hp" value="<?= set_value('no_hp') ?>">

                                </div>
                                <div class="form-group">
                                    <label>Kodepos</label>
                                    <input type="text"class="form-control  push-down-10"  name="kodepos" value="<?= set_value('kodepos') ?>">

                                </div>
                                 <div class="form-group"> </div>
                               <span></span>
                               <label>
                               Daftar Sebagai
                    
                  <button type="submit" class="btn btn-success">Register</button>
                  <?=  anchor(base_url(),'Cancel',['class'=>'btn ']) ?>
                  
                </div>

                <div class="col-md-3">
                  <?=  anchor('Login','Login',['class'=>'btn  btn-default']) ?>
                </div>
                </div>
              <?= form_close() ?>
        <!-- <form action="#" class="push-down-15">
          <div class="form-group">
            <input type="text" id="name" class="form-control  form-control--contact" placeholder="Username">
          </div>
          <div class="form-group">
            <input type="text" id="email" class="form-control  form-control--contact" placeholder="Email">
          </div>
          <div class="form-group">
            <input type="password" id="subject" class="form-control  form-control--contact" placeholder="Password">
          </div>
          <button class="btn  btn-primary" data-toggle="modal" data-target="#myModal" >REGISTER</button>
        </form> -->
       <br><br>
      </div>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>
$(document).ready(function(){

  $("#propinsi_asal").click(function(){
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
