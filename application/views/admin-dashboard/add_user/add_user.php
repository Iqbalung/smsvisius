
            <div class="page-content">
                <div class="page-subheading page-subheading-md">
                    <ol class="breadcrumb">
                        <li class="active"><a href="javascript:;">Tambah Kategori</a></li>
                    </ol>
                </div>
                <div class="container-fluid-md">                    
                    
                    <div class="alert alert-success">
                        <strong>Wellcome!</strong> Admin <?php echo $this->session->userdata('nama'); ?>
                    </div>

                    
                    <div class="panel panel-default">
                        
                        <div class="panel-heading">
                            <h4 class="panel-title">Tambah User</h4>  
                        </div>

                        <div class="panel-body col-md-4">
                            <form role="form" action="<?php echo base_url(); ?>index.php/admin_olshop/add_user" method="POST">
                                <div class="form-group">
                                    <label class="control-label" for="exampleInputText1">Username</label>
                                    <div class="controls">
                                        <input type="text" name="username" class="form-control">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="control-label" for="exampleInputText1">Password </label>
                                    <div class="controls">
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="control-label" for="exampleInputText1">Nama</label>
                                    <div class="controls">
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="control-label" for="exampleInputText1">Email  </label>
                                    <div class="controls">
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </form>
                        </div>
                        <table class="table table-hover">
                            <tr>
                                <th>ID</th>
                                <th>Nama Kategori</th>
                                <th>Action</th>
                                <!-- <th>1</th> -->
                            </tr> 
                            <?php foreach ($admin as  $value) { ?>
                                <tr>
                                    <th><?php echo $value->idlogin; ?></th>
                                    <th><?php echo $value->username; ?></th>
                                    <th> 
                                        <a class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="update" href="updated_user/<?php echo $value->idlogin; ?>"><i class="fa fa-edit"></i></a>
                                       
                                    </th>
                                </tr>
                            <?php } ?>   
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
