
            <div class="page-content">
                <div class="page-subheading page-subheading-md">
                    <ol class="breadcrumb">
                        <li class="active"><a href="javascript:;">Tambah Diskon Volume</a></li>
                    </ol>
                </div>
                <div class="container-fluid-md">                    
                    
                    <div class="alert alert-success">
                        <strong>Wellcome!</strong> Admin <?php echo $this->session->userdata('nama'); ?>
                    </div>

                    <div class="panel panel-default">
                        
                        <div class="panel-heading">
                            <h4 class="panel-title">Tambah Diskon Volume</h4>  
                        </div>

                        <div class="panel-body">
                            <form role="form" action="<?= base_url()?>index.php/add_diskon_volume" method="POST">
                                <div class="form-group">
                                    <label class="control-label" >Tanggal Mulai</label>

                                    <div class="controls">
                                        <input type="date" data-rel="datepicker" name="start" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" >Tanggal Berakhir</label>

                                    <div class="controls">
                                        <input type="date" name="end" data-rel="datepicker" class="form-control" required>
                                        <!-- <input type="text" class="form-control" data-rel="datepicker"> -->
                                    </div>
                                </div>

                                <button class="btn btn-primary" type="submit">Next</button>
                                <button class="btn btn-warning" onclick="window.history.back()">Cancel</button>
                            </form>
                        </div>

                    </div>                     
                </div>
            </div>
        </div>
        <script src="<?php echo base_url(); ?>asset/dist/assets/libs/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>asset/dist/assets/bs3/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>asset/dist/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
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
