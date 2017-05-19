            <div class="page-content">
                <div class="page-subheading page-subheading-md">
                    <ol class="breadcrumb">
                        <li class="active"><a href="javascript:;">Tambah Detail Diskon Volume</a></li>
                    </ol>
                </div>
                <div class="container-fluid-md">                    
                    <div class="row">
                        
                        <div class="col-md-12 alert alert-success">
                            <strong>Wellcome!</strong> Admin <?php echo $this->session->userdata('nama'); ?>
                        </div>

                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Tambah Detail Diskon Volume</h4>  
                                </div>
                                <div class="panel-body">
                                    <form role="form" action="<?= base_url()?>index.php/add_trans_diskon_volume" method="POST">

                                        <div class="form-group">
                                            <label class="control-label" >Kategori</label>
                                            <div class="controls">
                                                <select class="form-control" name="kategori">
                                                    <?php foreach ($kategori as $value) { ?>
                                                        <option value="<?php echo $value->kat_id; ?>" >
                                                            <?php echo $value->kat_judul; ?>
                                                        </option>       
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <input type="hidden" value="<?php echo $id; ?>" name="id">
                                        <div class="form-group">
                                            <label class="control-label" >Min Volume</label>
                                            <div class="controls">
                                                <input type="text" name="min" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" >Max Volume</label>
                                            <div class="controls">
                                                <input type="text" name="max" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" >Diskon</label>
                                            <div class="controls">
                                                <input type="text" name="diskon" class="form-control" required>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="panel panel-default">
                                <!-- Default panel contents -->
                                <div class="panel-heading">Diskon basic</div>
                                <table class="table table-hover">
                                    <tr>
                                        <th>ID</th>
                                        <!-- <th>ID Diskon Vol</th> -->
                                        <th>Kategori</th>
                                        <th>Min</th>
                                        <th>Max</th>
                                        <th>Diskon</th>
                                        <th>Action</th>
                                    </tr>
                                    <?php foreach ($diskon_v as $value) { ?>
                                        <tr>
                                            <th><?php echo $value->id; ?></th>
                                            <!-- <th><?php echo $value->id_disk_volume; ?></th> -->
                                            <th><?php echo $value->kat_judul; ?></th>
                                            <th><?php echo $value->minim_volume; ?></th>
                                            <th><?php echo $value->max_volume; ?></th>
                                            <th><?php echo $value->diskon; ?></th>
                                            <th>
                                                <a data-toggle="tooltip" title="Edit" class="btn btn-primary" href="../form_edit_detail_diskon_volume/<?php echo $value->id; ?>/<?php echo $value->id_disk_volume; ?>"><i class="fa fa-edit"></i></a>
                                                <a data-toggle="tooltip" title="Delete" class="btn btn-danger" href="../delete_detail_diskon_volume/<?php echo $value->id; ?>/<?php echo $value->id_disk_volume; ?>" ><i class="fa fa-eraser"></i></a>
                                            </th>   
                                        </tr>        
                                    <?php } ?>
                                </table>
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
