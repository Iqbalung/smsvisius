            <div class="page-content">
                <div class="page-subheading page-subheading-md">
                    <ol class="breadcrumb">
                        <li class="active"><a href="javascript:;">Edit Detail Diskon Volume</a></li>
                    </ol>
                </div>
                <div class="container-fluid-md">                    
                        
                    <div class="alert alert-success">
                        <strong>Wellcome!</strong> Admin <?php echo $this->session->userdata('nama'); ?>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">Edit Detail Diskon Volume</h4>  
                        </div>
                        <div class="panel-body">
                            <form role="form" action="<?php echo base_url('index.php/admin_olshop/edit_detail_diskon_volume'); ?>" method="POST">
                                <div class="form-group">
                                    <label class="control-label" >Kategori</label>
                                    <div class="controls">
                                        <select class="form-control" name="kategori">
                                            <?php  foreach ($kategori as $value) { ?>
                                                <option <?php if($value->kat_id == $disk->id_kategori){echo "selected";} ?> value="<?php echo $value->kat_id; ?>"  > <?php echo $value->kat_judul; ?></option>    
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <input type="hidden" value="<?php echo $disk->id; ?>" name="id_detail"> 
                                <input type="hidden" value="<?php echo $disk->id_disk_volume; ?>" name="id">
                                <div class="form-group">
                                    <label class="control-label" >Min Volume</label>
                                    <div class="controls">
                                        <input type="text" value="<?php echo $disk->minim_volume; ?>" name="min" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" >Max Volume</label>
                                    <div class="controls">
                                        <input type="text" value="<?php echo $disk->max_volume; ?>" name="max" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" >Diskon</label>
                                    <div class="controls">
                                        <input value="<?php echo $disk->diskon; ?>" type="text" name="diskon" class="form-control" required>
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Submit</button>
                                <button class="btn btn-warning" onclick="window.history.back()">Cancel</button>
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
<br><br><br><br><br><br><br><br>
