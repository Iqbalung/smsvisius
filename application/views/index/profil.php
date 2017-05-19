
				

<div class="container">
	<h1>Profil Anda<h1>
	<div class="row">
		<br><br><br>
     	<table class="table" >
       
        <tr>

                
                 	<td>
                                    <label for="username">Username</label>
                    </td>
                    <td>
                    	:
                    </td>
                    <td>    
                                   <?= $this->session->userdata('username');?>
          			</td>
                              
         </tr>

  <tr>

                
                 	<td>
                                    <label for="username">Nama</label>
                    </td>
                    <td>
                    	:
                    </td>
                    <td>    
                                   <?= $this->session->userdata('email');?>
          			</td>
                              
         </tr>
           <tr>

                
                 	<td>
                                    <label for="username">Alamat </label>
                    </td>
                    <td>
                    	:
                    </td>
                    <td>    
                                    <?= $this->session->userdata('alamat');?>
          			</td>
                              
         </tr>
         <tr>

                
                 	<td>
                                    <label for="username">Status Sebagai </label>
                    </td>
                    <td>
                    	:
                    </td>
                    <td>    
                                   <?php if($this->session->userdata('usr_group')=="2"){echo "Wholesale";}else{ echo "Retail";}?>
          			</td>
                              
         </tr>


          </table >
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
    </div>
  </div>
</div>
		</div>	
		
	</div>
