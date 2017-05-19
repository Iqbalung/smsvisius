
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
                  

                    <div class="panel panel-default">
                   
                        <div class="panel-heading">Blog</div>

                        <div class="panel-body">
                            <a class="btn btn-primary" href="from_add_blog">
                                <i class="fa fa-plus"></i> Add Blog
                            </a>
                        </div>

                        <table class="table table-hover">
                            <tr>
                                <th>#</th>
                                <th>TITLE</th>
                                <th>TEXT</th>
                                <th>ACTION</th>
                            </tr>

                            <?php 
                                $i = 1;
                                foreach ($blog as  $value) {    
                                
                            ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo  $value->blog_title; ?></td>
                                    <td><?php echo  substr($value->text, 0,100); ?>...</td>
                                    <td>
                                        <a class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="update" href="form_edit_blog/<?php echo $value->blog_id; ?>"><i class="fa fa-edit"></i></a>
                                        <a class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="delete" href="delete_blog/<?php echo $value->blog_id; ?>"><i class="fa fa-eraser"></i></a>
                                    </td>
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
