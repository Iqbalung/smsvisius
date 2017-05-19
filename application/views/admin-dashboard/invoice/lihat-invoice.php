
            <div class="page-content">
                <div class="page-subheading page-subheading-md">
                    <ol class="breadcrumb">
                        <li class="active"><a href="javascript:;">Invoice</a></li>
                    </ol>
                </div>
                <div class="container-fluid-md">
                    <div class="alert alert-success">
                        <strong>Wellcome!</strong> Admin <?php echo $this->session->userdata('nama'); ?>
                    </div>
                  

                    <div class="panel panel-default">
                   
                        <div class="panel-heading">Invoices</div>
                        

                        <!-- Table -->
                        <table class="table table-hover">
                            <tr>
                                <th>#</th>
                                <th>ID Invoice</th>
                                <th>Nama Pembeli</th>
                                <th>Status Pembayaran</th>
                                <th>Action</th>
                                <!-- <th>1</th> -->
                            </tr> 
                            <?php 
                                $i = 1;
                                foreach ($invoice as $value) { 
                            ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $value->id; ?></td>
                                    <td><?php echo $value->usr_name; ?></td>
                                    <td>
                                        <?php 
                                            if($value->status == 2){
                                        ?>
                                            <p class="text-success"><b>PAID</b></p>
                                        <?php        
                                            }else{
                                        ?>
                                             <p class="text-danger"><b>UNPAID</b></p>
                                           
                                        <?php        
                                            }  
                                        ?>
                                         
                                    </td>
                                    <td>
                                        <?php if($value->status=='1'):?>
                                            <a href="konfirm_pemesanan/<?php echo $value->id; ?>" role="button" class="btn btn-danger">Konfirm</a>
                                        <?php endif; ?>
                                         <?php if($value->status=='3'):?>
                                            <a href="konfirm_pemesanan/<?php echo $value->id; ?>" role="button" class="btn btn-warning">Konfirm</a>
                                        <?php endif; ?>
                                        <?php if($value->status=='2'):?>
                                            <a href="#" role="button" class="btn btn-success">Lunas</a>
                                        <?php endif; ?>
                                        <a href="detail_invoice/<?php echo $value->id; ?>" role="button" class="btn btn-primary">Detail</a>
                                    </td>
                                </tr>
                            <?php 
                                } 
                                $i++;
                            ?>
                        </table>
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
