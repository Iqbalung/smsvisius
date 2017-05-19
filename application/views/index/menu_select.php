<!-- ============================================== HEADER : END ============================================== -->
<div class="body-content outer-top-xs" id="top-banner-and-menu">
    <div class="container">
	<div class="row">
    <!-- ============================================== SIDEBAR ============================================== -->  
		<div class="col-xs-12 col-sm-12 col-md-3 sidebar">
            
            <!-- ================================== TOP NAVIGATION ================================== -->
			<div class="side-menu animate-dropdown outer-bottom-xs">
				<div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>        
					<nav class="yamm megamenu-horizontal" role="navigation">
						<ul class="nav">
							 <?php foreach ($kategori as $val) { ?>
							<li class="dropdown menu-item">
								<a href="<?= base_url()?>index.php/shop/selected_kategori/<?php echo $val->kat_slug; ?> " class="dropdown-toggle"><?php echo $val->kat_judul; ?> </a>
							</li><!-- /.menu-item -->
							 <?php } ?>
							

			
				</ul><!-- /.menu-item -->
			</nav>
                           
          </div>

		
	


<!-- ============================================== COLOR: END ============================================== -->


        </div>
		
	<!-- /.sidemenu-holder -->
        <!-- ============================================== SIDEBAR : END ============================================== -->

        <!-- ============================================== CONTENT ============================================== -->
        

<!-- ============================================== INFO BOXES : END ============================================== -->