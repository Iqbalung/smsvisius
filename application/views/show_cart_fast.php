            



<div class="woocommerce  push-down-30">
 
  <div class="container">
  
  <div class="row">
    
  </div>
	<hr>
    <div class="row">

      <div class="col-md-8">
        <h3>Cart</h3>
        
        <table class="shop-table  shop-cart">
          <thead>
            <tr class="cart_table_title">
              <th class="product-remove"></th>
              <th class="product-thumbnail"></th>
              <th class="product-name">Product</th>
              <th class="product-price">Price</th>
              <th class="product-quantity">Quantity</th>
               <th class="product-quantity">Total</th>
              <th class="product-subtotal">Diskon</th>
            </tr>
          </thead>
          <tbody>
          <?php 
            if( $this->cart->total_items() > 0){
              $i=0;
              foreach ($this->cart->contents() as $items): 
              $i++;

            ?>
             <?php
              $b = 0;
              $qty = $items['qty'];

              $kat = $items['kategori'];

              $sum1=0;
             foreach ($diskon as $a){
              
               
               $b = 0;
              
              if($kat==$a->id_kategori){
                if (($a->minim_volume <= $qty) && ($a->minim_volume >= $qty)){
                  $b = $a->diskon;

              
                }
              }
               
            }
            
            ?>
            <tr class="cart_table_item">
              <td class="product-remove">
              <form action="<?= base_url()?>index.php/index/delcart_fast/" method="post">
                <input type="hidden" name="id" value="<?= $items['rowid'] ?>" class="quantity__input">
              <button  type="submit" ><span class="glyphicon  glyphicon-remove"></span></button></td>
              </form>
              <td class="product-thumbnail"><img src="<?php echo base_url() ?>asset/upload/<?= $items['image'] ?>" width="60%"></td>
              <td class="product-name"><a href="http://localhost/organique-html/src/shop.html"><?= $items['name'] ?></a></td>
              <td class="product-price"> Rp <?php echo $this->cart->format_number( $items['price'] );?></td>
              <td class="product-quantity">
                <div class="quantity  js--quantity">
                <form action="<?= base_url()?>index.php/index/increase_fast/" method="post">
                  <input type="submit" value="-" name="in" class="quantity__button  js--minus-one  js--clickable">
                  <input type="hidden" name="id" value="<?= $items['rowid'] ?>" class="quantity__input">
                  <input type="text" name="quantity" value="<?= $items['qty'] ?>" class="quantity__input">
                  <input type="submit" value="+" name="in" class="quantity__button  js--plus-one  js--clickable">
                  <input type="submit" value="Reload" name="in" class="quantity__button  js--plus-one  js--clickable">
                </form>
                </div>
              </td>
              <td class="product-subtotal">Rp <?php echo $this->cart->format_number( $items['subtotal'] );?></td>
              <td class="product-subtotal"><?php echo $b;?>%</td>
            </tr>
           
             <?php  endforeach; }?>
            
          </tbody>
        </table>
        <br><br>
      
        <div class="row"><div ><!-- <p>*)Masukan Kupon Belanja Anda</p> --></div>
        <div class="col-md-3">
        <div class="input-group">


  <input type="text" class="form-control col-md-3" placeholder="Masukan Kode Voucher" /><br>

</div>
</div><div class="col-md-2"> <input type="submit" class="btn btn-danger" value="Validasi"></div>
</div>
 
      
      </div>
      <div class="col-md-4">
        <!-- Your order - table -->
        <h3  class="pull-right"><span class="light">Cart</span> Totals</h3>
        <table class="shop_table  push-down-30">
          <tfoot>
            <tr class="cart-subtotal">
              <th>Cart Subtotal</th>
              <td><span class="amount"> Rp <?php echo $this->cart->format_number( $this->cart->total() ); ?></span></td>
            </tr>
            <tr class="shipping">
              <th>Shipping</th>
              <td>-</td>
            </tr>
            <tr class="shipping">
              <th>Diskon</th>
              <td><b><?=  (isset($b)) ? $b: '0'; ?>%</b></td>
            </tr>
            <hr></hr>+
            <tr class="total">
              <th><strong></strong></th>
              <td>
                <strong><span class="amount">Rp <?php (isset($sum1)) ? $sum1:'0';$tot2=$this->cart->total()*(isset($sum1));$tot3=(($this->cart->total())-($tot2/100)); echo $this->cart->format_number($tot3);?></span></strong>
              </td>
            </tr>
          </tfoot>
        </table>
      </div>
      
    </div>
<div class="col-md-10"></div><a href="<?= base_url() ?>index.php/index/delivery" class="btn btn-warning col-md-2" value="">Checkout</a>
    
<br><br><br><br>
    <hr class="divider">
  </div>

</div>
<div class="wrapper">
<div class="row">
  <div class="col-md-12">
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- test -->
    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-1762934784326172"
         data-ad-slot="6122588643"
         data-ad-format="auto"></ins>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
  </div>
</div>
