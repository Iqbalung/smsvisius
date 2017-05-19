</* div class="container">
    <div class="row"><div class="container"> <div class="products-navigation  push-down-15">
  <div class="products-navigation__title">
    <h3><span class="light">Promo</span> Terpanas</h3>
  </div>
</div>
    
	 <?php $i=0;$jumlah_desimal ="0";
$pemisah_desimal =",";
$pemisah_ribuan =".";
foreach ($products_f as $product ) { ?>
        <div class="col-xs-12 col-md-3">
        <div class="divbutton" ">
            <div class="panel panel-primary">
            
                
                <div class="panel-body">
                    
                    <table class="table">
                        <tr>
                            <td >
                               <img alt="#" class="product__image" width="263" height="334" src="<?php echo base_url() ?>asset/upload/<?=  $product->pro_image  ?>">
                            </td>
                        </tr>
                        <tr >
                            <td>
								 
          <a class="products__link" href="">  <?=  $product->pro_name  ?></a><br>
        
        <span class="line-through">Rp.<?php echo number_format(  $product->pro_price, $jumlah_desimal, $pemisah_desimal,$pemisah_ribuan );  ?></span><span class="products__price--widgets">   Rp. <?php echo number_format(  $product->pro_price, $jumlah_desimal, $pemisah_desimal,$pemisah_ribuan );  ?></span><br>
        <span class="glyphicon glyphicon-star  star-on"></span>
        <span class="glyphicon glyphicon-star  star-on"></span>
        <span class="glyphicon glyphicon-star  star-on"></span>
        <span class="glyphicon glyphicon-star  star-on"></span>
        <span class="glyphicon glyphicon-star  star-on"></span>
								
                            </td>
                             </td>
                             
                            <td>
                        </tr >
                        <tr>
                        	<td height="70"><center><a href="index.php/produk_detail/index/<?=  $product->kat_slug  ?>/<?=  $product->pro_slug  ?>"  role="button" class="btn btn-default btn-block">Beli</a></center></td>
                        </tr>
                        
                    </table>
                </div>
                
                   
            </div>
        </div>
         </div>
		<?php }?>
        
        
 