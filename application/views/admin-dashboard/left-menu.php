<div class="page-wrapper">
    <aside class="sidebar sidebar-default">
        <div class="sidebar-profile">
            <img class="img-circle profile-image" src="<?php echo base_url(); ?>asset/demo/images/profile.jpg">
            <div class="profile-body">
                <h4><?php echo $this->session->userdata('nama');?></h4>
                
            </div>
        </div>
        <nav>
            <h5 class="sidebar-header">Navigation</h5>
            <ul class="nav nav-pills nav-stacked">
                
                <li class="nav-dropdown <?php if($menu == 'dashboard'){ echo "active";} ?> ">
                    <a href="<?php echo base_url(); ?>index.php/admin_olshop/dashboard" title="Dashboards">
                        <i class="fa fa-lg fa-fw fa-home"></i> Dashboards
                    </a>
                </li>
               <!--  <li class="nav-dropdown <?php if($menu == 'blog'){ echo "active";} ?> ">
                    <a href="<?php echo base_url('index.php/admin_olshop/blog'); ?>" >
                        <i class="fa fa-lg fa-fw fa-tags"></i> Blog
                    </a>
                </li> -->
               
               <!--  <li class="nav-dropdown <?php if($menu == 'diskon'){ echo "active open";} ?>" >
                    <a href="#" >
                        <i class="fa fa-lg fa-fw  fa-barcode"></i> Diskon
                    </a>
                    <ul class="nav-sub">
                        <li class="">
                            <a href="<?php echo base_url('index.php/admin_olshop/diskon_basic'); ?>" >
                                <i class="fa fa-fw  fa-money"></i>
                                Diskon Basic
                            </a>
                        </li>
                        <li class="">
                            <a href="diskon_total" title="Level 2.2">
                                <i class="fa fa-fw  fa-money"></i>
                                Diskon Total
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('index.php/admin_olshop/diskon_volume'); S?>">
                                <i class="fa fa-fw  fa-money"></i>
                                Diskon Volume
                            </a>
                        </li>
                    </ul>
                </li> -->
                <li class="nav-dropdown <?php if($menu == 'majalah'){ echo "active";} ?> ">
                    <a href="<?php echo base_url('index.php/admin_olshop/get_all_peserta'); ?>" >
                        <i class="fa fa-lg fa-fw fa-tags"></i>Get Peserta
                    </a>
                </li>
                <!-- <li class="nav-dropdown <?php if($menu == 'sms'){ echo "active";} ?> ">
                    <a href="<?php echo base_url('index.php/admin_olshop/sms'); ?>" >
                        <i class="fa fa-lg fa-fw fa-mobile"></i> SMS Blast
                    </a>
                </li> -->
                 <li class="nav-dropdown <?php if($menu == 'laporan'){ echo "active";} ?> ">
                    <a href="<?php echo base_url('index.php/admin_olshop/laporan'); ?>" >
                        <i class="fa fa-lg fa-fw fa-bookmark-o"></i> Laporan
                    </a>
                </li>
            </ul>
            
            <ul class="nav nav-pills nav-stacked">
                
            </ul>
           
        </nav>
    </aside>