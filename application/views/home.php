<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Biner Shop Online</title>

    <!-- Bootstrap Core CSS -->
    

</head>

<body>

   
    <div class="container">
        <!-- Product Menu -->
        <?php $this->load->view('layout/product_menu')?>
        <!-- /.row -->
        <div class="row">
            
                        <!-- body items -->
            <!-- load products from table -->
		      
              <?php foreach ($products as $product ) : ?>
            
                         <div class="col-md-3">
                         <a  class="product-image outline-outward" href="home/add_to_cart/'.$product->pro_id">
                <div class="panel panel-default">
                    <div class="panel-heading">
						
							
						 
                    </div>
                    <div class="panel-body" width="100px">
						<a href="">
						
							<?php
								
								$product_image =['src'	=>'assets/uploads/'.$product->pro_image,
								
								'class'=>'img-responsive',
								'id'=>'g'
								];
								echo img($product_image);
							?>
						</a>
					
                        <p id="t"> <?=  $product->pro_description  ?></p>
                       <p>  <code> Stock:</code> <?=  $product->pro_stock  ?> </p>
					   <?php  if($this->session->userdata('group')	!=	'1'  and $this->session->userdata('group')	!=	'2' ): ?>
                        
                        <ul class="nav nav-tabs navbar-right">
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown">Report <i class="fa fa-exclamation-triangle"></i></a> 
							<ul class="dropdown-menu">
							<li>
							<?=  anchor('home/report/'.$product->pro_id,"I dislike this product",["class'=>'btn  btn-xs"]) ?>
							</li>
							</ul>
						</li> 
						</ul>
						<div class="media-body"><small class="upper"><?=  $product->pro_name  ?> - <?=  $product->pro_title  ?></small>
                                            
                                            <div class="product-detail">
                                              <div class="price-shop">
                                                <ins> <?=  $product->pro_price  ?></ins>
                                              </div>
                                            </div>
                                          </div>
                                          <br>
                                          <?=  anchor('shop/add_to_cart/'.$product->pro_id,'Beli ',['class'=>'btn btn-success  btn-xs','role'=>'button']) ?>
						<?php else:?>
						<?=  anchor('admin/products/edit/'.$product->pro_id,'Edit',['class'=>'btn btn-success btn-xs']) ?>
						<?php  if($this->session->userdata('group')	==	'1' ): ?>
						<?=  anchor('admin/products/delete/'.$product->pro_id,'Delete',['class'=>'btn btn-danger btn-xs',
							'onclick'=>'return confirm(\'Are You Sure ? \')'
						]) ?>
						<?php else:?>
						<?=  anchor('admin/products/delete/','Delete',['class'=>'btn btn-danger btn-xs ','data-toggle'=>'button',
							'onclick'=>'return confirm(\'Sorry You Cant Delete it , Should Be Admin ! \')'
						]) ?>
						<?php endif;?>
						<?php endif;?>
                    </div>
                </div>
            </a>
            </div>  
            
			<?php endforeach; ?>
           
        </div>

				
		
        <!-- /.row -->

        <!-- Features Section -->

        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        

        <hr>

        <!-- Footer -->
        <
    </div>
    <!-- /.container -->

    <!-- jQuery -->
 

</body>

</html>
