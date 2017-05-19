
            <div class="page-content">
                <div class="page-subheading page-subheading-md">
                    <ol class="breadcrumb">
                        <li class="active"><a href="javascript:;">Blog</a></li>
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
                        <div class="panel-heading">Tambah Blog</div>
                        <div class="panel-body">
                            <form ENCTYPE="multipart/form-data" class="form-horizontal form-bordered" role="form" action="../edit_blog/<?php echo $blog->blog_id; ?>" method="POST">
                                
                                <div class="form-group">
                                    <label  class="col-sm-3 control-label">Title </label>
                                    <div class="col-sm-6">
                                        <input type="text" value="<?php echo $blog->blog_title; ?>" class="form-control" name="title" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-sm-3 control-label">Text </label>
                                    <div class="col-sm-6">
                                          <textarea name="text" class="form-control" rows="4" required><?php echo $blog->text; ?></textarea>
                                       
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3">Gambar </label>
                                    <div class="controls col-sm-6">
                                        <input type="file" name="userfile" class="form-control" >
                                    </div>
                                </div>
                                <input type="hidden" class="form-control" vaue="<?php echo $blog->blog_id; ?>" name="id" >
                                <input type="hidden" class="form-control" value="<?php echo $blog->blog_img; ?>" name="old_img" >
                                <div class="form-group">
                                    <label  class="col-sm-3 control-label">Kata Kunci</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="key" value="<?php echo $blog->kata_kunci; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="controls col-sm-12">
                                        <center>
                                            <button class="btn btn-primary" type="submit">Update</button>
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
