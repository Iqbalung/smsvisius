<div class="main" id="main">
    <div class="container">
    <div id="content" class="col">
      <div class="row">
      	<div class="col-md-12">      		
      			<div class="widget-header">
      				<h3>Account</h3>
  				</div> <!-- /widget-header -->
				<div class="widget-content">
					<?php
      			//flash messages
                if($this->session->flashdata('flash_message')){
                if($this->session->flashdata('flash_message') == 'updated')
        		{
         		 echo '<div class="alert alert-success">';
           		 echo '<a class="close" data-dismiss="alert">×</a>';
            	 echo '<strong>Well done!</strong> account updated with success.';
          		 echo '</div>';
        		}else{
         		 echo '<div class="alert alert-warning">';
           		 echo '<a class="close" data-dismiss="alert">×</a>';
            	 echo '<strong>Oh snap!</strong> change a few things up and try submitting again.';
          		 echo '</div>';          
        		}
      			}
      			?>
					
					<div class="tabbable">
					<ul class="nav nav-tabs">
					  <li class="active">
					    <a href="#profile" data-toggle="tab">Profile</a>
					  </li>
					</ul>
					
					<br>
						<div class="tab-content">
							<div class="tab-pane active" id="profile">
							<?php
				             $attributes = array('class' => 'form-horizontal col-md-8', 'id' => '');
      			             //form validation
      			             echo validation_errors();
                   
      			             echo form_open('dashboard/account/'.$this->uri->segment(3).'', $attributes);
      			             ?>
      			               <fieldset>
									
									<div class="form-group">						
										<label class="col-md-4" for="twitter">Name</label>
										<div class="col-md-8">
											<input type="text" class="form-control" id="" name="name" value="<?php echo $field[0]['name']; ?>">
										</div> <!-- /controls -->				
									</div> <!-- /control-group -->

									<div class="form-group">											
										<label for="text" class="col-md-4">Description</label>
										<div class="col-md-8">
											<textarea id="text" class="form-control" name="text"><?php echo $field[0]['text']; ?></textarea>
										</div> <!-- /controls -->				
									</div> <!-- /control-group -->
									
									<div class="form-group">											
										<label for="image" class="col-md-4">Url Image</label>
										<div class="col-md-8">
											<input type="text" class="form-control" id="" name="image" value="<?php echo $field[0]['images']; ?>">
										</div> <!-- /controls -->				
									</div> <!-- /control-group -->
									
									<div class="form-group">											
										<label class="col-md-4" for="twitter">Url Twitter</label>
										<div class="col-md-8">
											<input type="text" class="form-control" id="" name="twitter" value="<?php echo $field[0]['twitter']; ?>">
										</div> <!-- /controls -->				
									</div> <!-- /control-group -->
									
									<div class="form-group">																						
										<label for="plus" class="col-md-4">Url Google Plus</label>
										<div class="col-md-8">
											<input type="text" class="form-control" id="" name="plus" value="<?php echo $field[0]['plus']; ?>">
										</div> <!-- /controls -->				
									</div> <!-- /control-group -->

									<div class="form-group">											
										<label class="col-md-4" for="email">Url Github</label>
										<div class="col-md-8">
											<input type="text" class="form-control" id="" name="github" value="<?php echo $field[0]['github']; ?>">
										</div> <!-- /controls -->				
									</div> <!-- /control-group -->
										<br />
										
									<div class="form-group">

										<div class="col-md-offset-4 col-md-8">
											<button type="submit" class="btn btn-success">Update</button>
											<!--<input type="hidden" name="id_login" value="<?php echo $id; ?>" />-->
										</div>
									</div> <!-- /form-actions -->
								</fieldset>
							<?php echo form_close(); ?>
							</div>
							
						</div>
					  
					</div>
					
				</div> <!-- /widget-content -->
					
			</div> <!-- /widget -->
      		
	    </div> <!-- /span8 -->
      	
      </div> <!-- /row -->

    </div> <!-- /container -->
    
</div> <!-- /main -->