
            <div class="page-content">
                <div class="page-subheading page-subheading-md">
                    <ol class="breadcrumb">
                        <li class="active"><a href="javascript:;">Laporan</a></li>
                    </ol>
                </div>
                <div class="container-fluid-md">
                    <div class="alert alert-success">
                        <strong>Wellcome!</strong> Admin <?php echo $this->session->userdata('nama'); ?>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Laporan dari tanggal <b><?php echo $start; ?></b> 
                             <?php  
                                if($end != null){
                                    echo " hingga tanggal " ."<b>".$end."</b> ";
                                }
                             ?>   
                        </div>
                        <!-- echo nice_date(substr($data_invoice->due_date,0,10), 'd-m-Y') -->
                        <!-- <div class="panel-body"> -->
                            <table class="table">
                                <tr>
                                    <th>#</th>
                                    <th>No. Invoice</th>
                                    <th>Rp</th>
                                </tr>
                                <?php  
                                    $i = 1;
                                    $total = 0;
                                    foreach ($res as $value) {
                                ?>
                                    <tr>
                                        <th><?php echo  $i; ?></th>
                                        <th><?php echo $value->id; ?></th>
                                        <th> Rp <?php echo $this->cart->format_number( $value->total_harga); ?> </th>
                                    </tr>
                                <?php
                                    $total = $total + $value->total_harga;
                                    $i++;
                                    }
                                ?>
                            </table>
                        <div class="panel-footer">
                            <br>
                            <center>
                                TOTAL <b><?php echo $this->cart->format_number($total); ?></b><br><br>
                                <button onclick="window.print()" class="btn btn-primary"> <span class="fa fa-print"></span> Cetak </button>
                            </center>
                        </div>    
                        <!-- </div> -->
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