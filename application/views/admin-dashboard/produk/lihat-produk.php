
            <div class="page-content">
                <div class="page-subheading page-subheading-md">
                    <ol class="breadcrumb">
                        <li class="active"><a href="javascript:;">Barang</a></li>
                    </ol>
                </div>
                <div class="container-fluid-md">
                    <div class="alert alert-success">
                        <strong>Wellcome!</strong> Admin <?php echo $this->session->userdata('nama'); ?>
                    </div>
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
                        <div class="panel-heading">Barang</div>
                        <div class="panel-body">
                            <a class="btn btn-primary" href="form_barang">
                                <i class="fa fa-plus"></i> Add Produk
                            </a>

                            <!-- <a class="btn btn-primary" href="save_featured">
                                <i class="fa fa-save"></i> Save Featured Product
                            </a> -->
                        </div>

                        <!-- Table -->
                        <table class="table table-hover">
                            <tr>
                                <th>#</th>
                                <th>Page</th>
                                <th>Action</th>
                                <!-- <th>1</th> -->
                            </tr> 
                            <?php 
                                $i = 1;
                                foreach ($majalah as  $value) { 
                            ?>
                                <tr>
                                    <!-- <th><?php echo $value->pro_id; ?></th> -->
                                    <th><?php echo $i; ?> </th>
                                    <th><img src="<?= base_url()?>asset/upload/<?php echo $malalah->picture_small ?>"  width="42"> <?php echo $majalah->page; ?></th>
                               
                                    <th> 
                                        <a class="btn btn-primary"  data-toggle="tooltip" data-placement="top" title="update" href="form_edit_barang/<?php echo $value->pro_id; ?>"><i class="fa fa-edit"></i></a>
                                        <a class="btn btn-danger"  data-toggle="tooltip" data-placement="top" title="delete" href="delete_barang/<?php echo $value->pro_id; ?>"><i class="fa fa-eraser"></i></a>
                                    </th>
                                    
                                </tr>
                            <?php 
                                $i++;
                                } 
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
