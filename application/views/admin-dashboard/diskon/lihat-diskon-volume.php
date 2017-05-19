
            <div class="page-content">
                <div class="page-subheading page-subheading-md">
                    <ol class="breadcrumb">
                        <li class="active"><a href="javascript:;">Diskon Volume</a></li>
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

                     <?php if($diskon_v == null) {?>
                        <div class="alert alert-info">
                            <button data-dismiss="alert" class="close" type="button">×</button>
                            <b>Belum ada diskon Volume</b> <a href="diskon_volume_form" class="alert-link">Klik sini untuk tambah</a></span> 
                        </div>
                    <?php } else { ?>
                        <div class="panel panel-default">
                            <div class="panel-heading">Diskon Volume</div>
                            <div class="panel-body">
                                <a class="btn btn-primary" href="diskon_volume_form">
                                    <i class="fa fa-plus"></i> Add Diskon Volume
                                </a>
                            </div>
                            <table class="table table-hover">
                                <tr>
                                    <th>#</th>
                                    <th>ID</th>
                                    <th>Stare Date</th>
                                    <th>End Date</th>
                                    <th>Action</th>
                                </tr>
                                <?php  
                                    $i = 1;
                                    foreach($diskon_v as $val){ 
                                ?>
                                    <tr>
                                        <td><b><?php echo $i;?></b></td>
                                        <td><?php echo $val->id_disk_volume;?></td>
                                        <td><?php echo $val->start_date;?></td>
                                        <td><?php echo $val->end_date;?></td> 
                                        <td>
                                            <a data-toggle="tooltip" title="Edit" class="btn btn-primary" href="form_edit_diskon_volume/<?php echo $val->id_disk_volume; ?>"><i class="fa fa-edit"></i></a>
                                            <a data-toggle="tooltip" title="Detail" class="btn btn-info" href="diskon_volume_detail_form/<?php echo $val->id_disk_volume; ?>"><i class="fa fa-book"></i></a>
                                            <a data-toggle="tooltip" title="Delete" class="btn btn-danger" href="delete_diskon_volume/<?php echo $val->id_disk_volume; ?>"><i class="fa fa-eraser"></i></a>
                                        </td>
                                    </tr>
                                <?php 
                                    $i++;
                                    } 
                                ?>
                            </table>
                        </div>
                    <?php } ?>                    
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