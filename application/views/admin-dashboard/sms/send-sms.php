
            <div class="page-content">
                <div class="page-subheading page-subheading-md">
                    <ol class="breadcrumb">
                        <li class="active"><a href="javascript:;">SMS</a></li>
                    </ol>
                </div>
                <div class="container-fluid-md">
                    <div class="alert alert-success">
                        <strong>Wellcome!</strong> Admin <?php echo $this->session->userdata('nama'); ?>
                    </div>
                    <!-- NOTIF -->
                    <?php if($this->session->flashdata('info')=='saldo') { ?>
                        <div class="alert alert-danger">
                            <button data-dismiss="alert" class="close" type="button">×</button>
                            Gagal, mohon cek saldo anda
                        </div>
                    <?php } elseif ($this->session->flashdata('info')=='sukses') {?>
                        <div class="alert alert-success">
                            <button data-dismiss="alert" class="close" type="button">×</button>
                            <b>Berhasil</b>
                        </div>
                    <?php } ?>
                        
                    <!-- END NOTIF -->
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">SMS Blast To All</div>
                            <div class="panel-body">
                                <a href="cek_saldo" role="button" class="btn btn-warning"> Cek saldo</a>
                            </div>

                            <form action="all" method="POST">
                                <table class="table">
                                    <tr>
                                        <th>Check</th>
                                        <th>Nama</th>
                                        <th>No</th>
                                    </tr>
                                    <?php  
                                        foreach ($retail as $value) {
                                    ?>
                                        <tr>
                                            <th><input type="checkbox" name="phone[]" value="<?php echo $value->no_hp; ?>" /></th>
                                            <th><?php echo $value->usr_name; ?></th>
                                            <th><?php echo $value->no_hp; ?></th>
                                        </tr>
                                    <?php        
                                        }
                                    ?>
                                </table>
                                
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="control-label" for="exampleInputMessage6">Message</label>
                                        <textarea required rows="6" class="form-control" name="pesan" style="resize:vertical"  placeholder="Max 160 karakter"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary" type="submit"> Send </button>
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
