<div class="page-wrapper">
    <aside class="sidebar sidebar-default">
        <div class="sidebar-profile">
            <img class="img-circle profile-image" src="<?php echo base_url(); ?>asset/demo/images/profile.jpg">
            <div class="profile-body">
                <h4><?php echo $this->session->userdata('nama');?></h4>
                <div class="sidebar-user-links">
                    <a class="btn btn-link btn-xs" href="pages-profile.html" data-placement="bottom" data-toggle="tooltip" data-original-title="Profile"><i class="fa fa-user"></i></a>
                    <a class="btn btn-link btn-xs" href="javascript:;"       data-placement="bottom" data-toggle="tooltip" data-original-title="Messages"><i class="fa fa-envelope"></i></a>
                    <a class="btn btn-link btn-xs" href="javascript:;"       data-placement="bottom" data-toggle="tooltip" data-original-title="Settings"><i class="fa fa-cog"></i></a>
                    <a class="btn btn-link btn-xs" href="pages-sign-in.html" data-placement="bottom" data-toggle="tooltip" data-original-title="Logout"><i class="fa fa-sign-out"></i></a>
                </div>
            </div>
        </div>
        <nav>
            <h5 class="sidebar-header">Navigation</h5>
            <ul class="nav nav-pills nav-stacked">
                
                <li class="nav-dropdown <?php if($menu == 'dashboard'){ echo "active";} ?> ">
                    <a href="dashboard" title="Dashboards">
                        <i class="fa fa-lg fa-fw fa-home"></i> Dashboards
                    </a>
                </li>
                
                <li class="nav-dropdown <?php if($menu == 'barang'){ echo "active";} ?> ">
                    <a href="barang" title="Dashboards">
                        <i class="fa fa-lg fa-fw fa-suitcase"></i> Barang
                    </a>
                </li>
                <li class="nav-dropdown <?php if($menu == 'kategori'){ echo "active";} ?> ">
                    <a href="kategori" title="Dashboards">
                        <i class="fa fa-lg fa-fw fa-suitcase"></i> Kategori
                    </a>
                </li>
                
                <li class="disabled">
                    <a href="javascript:;" title="Disabled">
                        <i class="fa fa-lg fa-fw fa-th"></i> Disabled
                    </a>
                </li>
            </ul>
            <h5 class="sidebar-header">Labels</h5>
            <ul class="nav nav-pills nav-stacked">
                <li>
                    <a href="javascript:;">
                        <i class="fa fa-fw fa-circle text-danger"></i>
                        Important Tasks
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="fa fa-fw fa-circle text-success"></i>
                        Support
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="fa fa-fw fa-circle text-info"></i>
                        Quotes
                    </a>
                </li>
            </ul>
            <h5 class="sidebar-header">Summary</h5>
            <ul class="sidebar-summary">
                <li>
                    <div class="mini-chart mini-chart-block">
                        <div class="chart-details">
                            <div class="chart-name">Total Sales</div>
                            <div class="chart-value">$261,885</div>
                        </div>
                        <div id="mini-chart-sidebar-1" class="chart pull-right"></div>
                    </div>
                </li>
                <li>
                    <div class="mini-chart mini-chart-block">
                        <div class="chart-details">
                            <div class="chart-name">Total Customers</div>
                            <div class="chart-value">12,491</div>
                        </div>
                        <div id="mini-chart-sidebar-2" class="chart pull-right"></div>
                    </div>
                </li>
            </ul>
        </nav>
    </aside>