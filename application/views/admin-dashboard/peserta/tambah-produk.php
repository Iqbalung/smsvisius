            <div class="page-content">
                <div class="page-subheading page-subheading-md">
                    <ol class="breadcrumb">
                        <li class="active"><a href="javascript:;">Form Tambah Barang</a></li>
                    </ol>
                </div>
                <div class="container-fluid-md">                    
                    <div class="alert alert-success">
                        <strong>Wellcome!</strong> Admin <?php echo $this->session->userdata('nama'); ?>
                    </div>
                    <?php if(!empty($error)) :?>
                        <div class="alert alert-danger">
                            <button data-dismiss="alert" class="close" type="button">×</button>
                            <?php echo $error; ?>
                        </div>  
                    <?php endif?> 
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">Tambah Barang</h4>  
                        </div>

                       <div class="panel-body">
                            <form ENCTYPE="multipart/form-data" class="form-horizontal form-bordered" role="form" action="<?php echo base_url(); ?>index.php/admin_olshop/add_test" method="POST">
                                <div class="form-group">
                                    <label class="control-label col-sm-3">Nama</label>
                                    <div class="controls col-sm-6">
                                        <input type="text" name="name" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3">No Hp</label>
                                    <div class="controls col-sm-6">
                                        <input type="text" name="nohp" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3">Email</label>
                                    <div class="controls col-sm-6">
                                        <input type="text" name="email" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3">Kota</label>
                                    <div class="controls col-sm-6">
                                        <input type="text" name="kota" class="form-control" required>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="controls col-sm-12">
                                        <center>
                                            <button class="btn btn-primary" type="submit">Submit</button>
                                        </center>
                                    </div>
                                </div>
                            </form>
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
<!-- <pre>
<?php print_r($subkat); ?>
</pre>  -->