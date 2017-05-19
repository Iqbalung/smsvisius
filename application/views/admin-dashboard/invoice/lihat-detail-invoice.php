
            <div class="page-content">
                <div class="page-subheading page-subheading-md">
                    <ol class="breadcrumb">
                        <li class="active"><a href="javascript:;">Detail Invoice</a></li>
                    </ol>
                </div>
                <div class="container-fluid-md">
                    
                    <!-- NOTIFICATION -->
                    <?php if($this->session->flashdata('info')=='saved') { ?>
                        <div class="alert alert-success">
                            <button data-dismiss="alert" class="close" type="button">×</button>
                            Data's been <b>saved!</b></span>
                        </div>
                    <?php }elseif($this->session->flashdata('info')=='deleted'){ ?>
                        <div class="alert alert-danger">
                            <button data-dismiss="alert" class="close" type="button">×</button>
                            Data's been <b>deleted!</b></span>
                        </div>
                    <?php }elseif($this->session->flashdata('info')=='updated'){ ?>
                        <div class="alert alert-info">
                            <button data-dismiss="alert" class="close" type="button">×</button>
                            Data's been <b>updated!</b></span> 
                        </div>
                    <?php } ?>
                    <!-- END NOTIFICATION -->
                    
                    <div class="panel panel-default">
                        <!-- Default panel contents -->
                        <div class="panel-heading">Detail Invoice No </div>
                        <div class="panel-body">
                            <div class="col-md-6">

                            	<span class="col-md-5">No Invoice </span>: <b><?php echo $data_invoice->id; ?></b><br>
                            	<span class="col-md-5">Due Date </span>: <b><?php echo $data_invoice->due_date  ; ?></b><br>
                            	<span class="col-md-5">Status</span> :  <?php if($data_invoice->status == 2){?><b class="text-danger">PAID</b><?php  }else{?><b class="text-success">UNPAID</b><?php }?><br>
                            	
                            </div>
                           
                            <div class="col-md-6">
                            	<span class="col-md-5">Kepada </span>: <b><?php echo $data_invoice->usr_name; ?></b><br>
                            	<span class="col-md-5">Alamat </span>: <b><?php echo $data_invoice->lengkap; ?></b><br>
                            	<span class="col-md-5">Layanan  </span>: <b><?php echo $data_invoice->kurir; ?> - <?php echo $data_invoice->service; ?></b> <br>
                            </div>

                            <div class="col-md-12">
                            	<table class="table table-striped">
                        			<tr>
                        				<th width=20%>Nama</th>
                        				<th width=20%>Qty</th>
                        				<th width=30%>Harga</th>
                        			</tr>
                        			<?php  
                        				foreach ($data_detail as  $value) {
                        			?>
                        				<tr>
                            				<td ><?php echo $value->product_type; ?></td>
                            				<td ><?php echo $value->qty; ?></td>
                            				<td > Rp <?php echo $this->cart->format_number( $value->price); ?></td>
                            			</tr>
                                        
                        			<?php
                        				}
                        			?>
                                    <tr>
                                        <td> Biaya Kirim </td>
                                        <td> </td>
                                        <td>Rp 
                                            <?php  
                                                foreach ($data_detail as  $value) {
                                                   echo $this->cart->format_number($value->biaya_kirim);
                                                }
                                            ?>
                                        </td>
                                    </tr>
                        		</table>
                            </div>

                            <div class="col-md-6 col-md-offset-6">
                            	<br><br><br>
                            	Total Pembayaran <br>
                            	<b></b>  Rp <?php echo $this->cart->format_number( $data_invoice->total_harga); ?>
                            </div>
                            <div class="col-md-12">
                            	<center>
                            		<br><br><br>
                            		<button class="btn btn-primary" onclick="window.print()"> Cetak </button>
                            		<!-- <button ></a> -->
                            	</center>
                            </div>
                        </div>

                    </div>                    
                </div>
            </div>
        </div>
        <script src="<?php echo base_url(); ?>asset/dist/assets/libs/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>asset/dist/assets/bs3/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>asset/dist/assets/plugins/jquery-navgoco/jquery.navgoco.js"></script>
        <script src="<?php echo base_url(); ?>asset/dist/js/main.js"></script>
        <script src="<?php echo base_url(); ?>asset/dist/assets/plugins/jquery-sparkline/jquery.sparkline.js"></script>
        <script src="<?php echo base_url(); ?>asset/demo/js/demo.js"></script>
        <script src="<?php echo base_url(); ?>asset/dist/assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="<?php echo base_url(); ?>asset/dist/assets/plugins/jquery-jvectormap/maps/world_mill_en.js"></script>
        <script src="<?php echo base_url(); ?>asset/dist/assets/plugins/rickshaw/js/vendor/d3.v3.js"></script>
        <script src="<?php echo base_url(); ?>asset/dist/assets/plugins/rickshaw/rickshaw.min.js"></script>
        <script src="<?php echo base_url(); ?>asset/dist/assets/plugins/flot/jquery.flot.js"></script>
        <script src="<?php echo base_url(); ?>asset/dist/assets/plugins/flot/jquery.flot.resize.js"></script>
        <script src="<?php echo base_url(); ?>asset/dist/assets/plugins/raphael/raphael-min.js"></script>
        <script src="<?php echo base_url(); ?>asset/dist/assets/plugins/morris/morris.min.js"></script>
        <script src="<?php echo base_url(); ?>asset/demo/js/dashboard.js"></script>
    </body>
</html>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>