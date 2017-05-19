<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Online</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('/assets/css/bootstrap.min.css');?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('/assets/css/modern-business.css');?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('/assets/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation Top_Menu -->
 
    <!-- Header Carousel -->

    <!-- Page Content -->
    <div class="container"><br><br><br><br>
    <div class="row">
  <div class="col-xs-12  col-sm-12">
  <div class="col-xs-12  col-sm-4">
    <div class="alert  alert-info  uppercase  fade  in"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        Total Tagihan<br>
        <p>		
        <?php
        $id = $this->session->userdata('id');
        $this->db->where('status', '1');
        $this->db->where('user_id', $id);
		$this->db->from('invoices');
		echo $this->db->count_all_results(); ?>
		</p>
      </div>
      </div>
      <div class="col-xs-12  col-sm-4">
    <div class="alert  alert-danger  uppercase  fade  in"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        Transaksi Berhasil<br>
        <p> <?php
        $id = $this->session->userdata('id');
        $this->db->where('status', '2');
        $this->db->where('user_id', $id);
		$this->db->from('invoices');
		echo $this->db->count_all_results(); ?></p>
      </div>
      </div>
      <div class="col-xs-12  col-sm-4">
    <div class="alert  alert-warning  uppercase  fade  in"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        Pemberitahuan<br>
        <p>0</p>
      </div>
      </div>
    
  </div>
  
  </div>


       <hr>
        <!-- /.row -->
        <div class="row">
                        <!-- body items -->
            <!-- load products from table -->
             <div class="col-md-12">

                <div class="">
                    
					
                    <div class="panel-body" width="100px">
						<div class="col-md-12 alert  alert-default  uppercase  fade  in">
						
								<div class=""><div class="col-md-1"></div>
								<div class="col-md-2">
								<h6>Invouce No.</h6>
								</div>
								<div class="col-md-2">
								<h6>Invoice Date</h6>
								</div>
								<div class="col-md-2">
								<h6>Due Date</h6>
								</div>
								<div class="col-md-2">
								<h6>Total Amout</h6>
								</div>
								<div class="col-md-3">
								<h6>Status</h6>
								</div>
								
								
						</div>  		
						</div>  
						
						<?php if ($history>0){ foreach ($history as $row): ?>
						<div class="col-md-12">
							<hr>
							<div class="col-md-1"></div>
							<div class="col-md-2">
								<?= $row->id ?>
							</div>
							<div class="col-md-2">
								<?= $row->data ?>
							</div>
							<div class="col-md-2">
								<?= $row->due_date ?>
							</div>
							<div class="col-md-2">
								Rp <?php echo $this->cart->format_number($row->total_harga);?>
							</div>
							<div class="col-md-3">
								
								<?php if($row->status == '1'):?>
								<label class="btn btn-danger btn-xs active"><?= "Unpaid"?></label>
								<?= anchor('customer/payment_confirmation/'.$row->id,'Konfirmasi',array('class'=>'btn btn-info btn-xs')) ?>
								<?php else:?>
								 <label class="btn btn-default btn-xs active">Paid</label>
								<?php endif;?>
							</div>
							
							
							
						</div> 
						<?php endforeach; }
                        else{
                            ;
                        }
                            ?>
						
						<div class="col-md-12">
							<hr>
							<div class="col-md-10">
							<hr>
							</div>
							<div class="col-md-2">
							<?=  anchor(base_url(),'Back to Home',['class'=>'btn btn-default','role'=>'button']) ?>
							</div>
						</div>
					
                    </div>
					
					
					
					
                </div>
            </div>  
			
        </div>
        <!-- /.row -->

        <!-- Features Section -->

        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
       

        <hr>

        <!-- Footer -->
       

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="<?php echo base_url('/assets/js/jquery.js');?>"></script>
	
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('/assets/js/bootstrap.min.js');?>"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
