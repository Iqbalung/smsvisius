
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
                            <h4 class="panel-title">Edit Barang</h4>  
                        </div>

                        <div class="panel-body">
                            <form ENCTYPE="multipart/form-data" class="form-horizontal form-bordered" role="form" action="<?php echo site_url('admin_olshop/update_barang').'/'.$barang->pro_id ; ?>" method="POST">
                                <div class="form-group">
                                    <label class="control-label col-sm-3">Kode Produk</label>
                                    <div class="controls col-sm-6">
                                        <input type="text" name="kode-produk" class="form-control" value="<?php echo $barang->pro_kode; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3">Nama Produk</label>
                                    <div class="controls col-sm-6">
                                        <input value="<?php echo $barang->pro_name; ?>" type="text" name="nama-produk" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3">Title Produk</label>
                                    <div class="controls col-sm-6">
                                        <input type="text" name="title-produk" value="<?php echo $barang->pro_title; ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3">Deskripsi Produk</label>
                                    <div class="controls col-sm-6">
                                        <textarea name="deskripsi" value="" class="form-control" rows="4" required>
                                            <?php echo stripslashes($barang->pro_description); ?>
                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3">Harga Produk</label>
                                    <div class="controls col-sm-6">
                                        <input type="text" value="<?php echo $barang->pro_price; ?>" name="harga-produk" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3">Stock Produk</label>
                                    <div class="controls col-sm-6">
                                        <input type="text" name="stock-produk" value="<?php echo $barang->pro_stock; ?>" class="form-control" required>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="control-label col-sm-3">Berat Produk</label>
                                    <div class="controls col-sm-6">
                                        <input type="text" name="berat-produk" value="<?php echo $barang->pro_weight; ?>" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3">Gambar Produk</label>
                                    <div class="controls col-sm-6">
                                        <input type="file" name="userfile" class="form-control" value="<?php echo $barang->pro_image; ?>" >
                                    </div>
                                </div>
                                <input type="hidden" name="old-pict" value="<?php echo $barang->pro_image; ?>">
                                <div class="form-group">
                                    <label class="control-label col-sm-3">Kategori Produk</label>
                                    <div class="controls col-sm-6">
                                        <select name="kategori" class="form-control" required>
                                            <?php  foreach ($kategori as $value) { ?>
                                                <option <?php if($value->kat_id == $barang->pro_kategori){echo "selected";} ?> value="<?php echo $value->kat_id; ?>"  > <?php echo $value->kat_judul; ?></option>    
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <!-- <div class="form-group">
                                    <label class="control-label col-sm-3">Sub Kategori</label>
                                    <div class="controls col-sm-6">
                                        <select name="sub-kategori" class="form-control">
                                            <?php foreach ($subkat as  $val) {?>
                                                <option <?php if($val->subkat_id == $barang->pro_subkategori){ echo "selected";} ?> value="<?php echo $val->subkat_id;?>"> <?php echo $val->subkat_judul;?> </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div> -->
                               
                                <div class="form-group">
                                    <label class="control-label col-sm-3">Retail Produk</label>
                                    <div class="controls col-sm-6">
                                        <input type="text" name="retail-produk" class="form-control" value="<?php echo $barang->pro_ritel;?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3">Satuan Produk</label>
                                    <div class="controls col-sm-6">
                                        <input type="text" name="satuan" class="form-control" value="<?php echo $barang->pro_satuan; ?>">
                                    </div>
                                </div>
                               <!--  <div class="form-group">
                                    <label class="control-label col-sm-3">Tag</label>
                                    <div class="controls col-sm-6">
                                        <?php foreach ($tag as $value) { ?>
                                            <label class="checkbox-inline">
                                                <input <?php if($value->idtag == $barang->pro_tag){ echo "checked";} ?> name="tag" type="checkbox" value="<?php echo $value->idtag; ?>">
                                                <?php echo $value->name; ?>
                                            </label>    
                                        <?php } ?>
                                    </div>
                                </div> -->
                              <!--   <div class="form-group">
                                    <label class="control-label col-sm-3">Review Produk</label>
                                    <div class="controls col-sm-6">
                                        <input type="hidden" name="review-produk" class="form-control" value="<?php echo $barang->pro_reivew; ?>">
                                    </div>
                                </div> -->
                                <!-- <div class="form-group">
                                    <label class="control-label col-sm-3">Feature Produk</label>
                                    <div class="controls col-sm-6">
                                        <input type="hideen" name="feature-produk" class="form-control" value="<?php echo $barang->pro_feature; ?>">
                                    </div>
                                </div> -->
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
</pre> -->