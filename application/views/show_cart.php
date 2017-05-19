
<div class="container">
	<hr>
    <div class="row">

      <div class="col-md-8">
        <h3>Cart</h3>
        <div class="row">
        <table class="table table-reflow">
          <thead>
            <tr class="cart_table_title">
              <th class="col-md-1"></th>
              <th class="col-md-1"></th>
              <th class="col-md-1">Product</th>
              <th class="col-md-2">Price</th>
              <th class="col-md-2">Quantity</th>
              <th class="col-md-2">Total</th>
            </tr>
          </thead>
          <tbody>
          <?php 
            if( $this->cart->total_items() > 0){
              $i=0;
              foreach ($this->cart->contents() as $items): 
              $i++;
            ?>

            <tr>
              <td >
              <form action="<?= base_url()?>index.php/index/delcart/" method="post">
                <input type="hidden" name="id" value="<?= $items['rowid'] ?>" class="quantity__input">
              <button  type="submit" ><span class="glyphicon  glyphicon-remove"></span></button></td>
              </form>
              <td class="product-thumbnail"><img src="<?php echo base_url() ?>asset/upload/<?= $items['image'] ?>" width="100"></td>
              <td class="product-name"><a href="http://localhost/organique-html/src/shop.html"><?= $items['name'] ?></a></td>
              <td class="product-price"> Rp <?php echo $this->cart->format_number( $items['price'] );?></td>
              <td class="product-quantity">
                <div class="quantity  js--quantity">
                <form action="<?= base_url()?>index.php/index/increase" method="post">
                  <input type="submit" value="+" name="in" class="btn btn-success
btn-sm" ><br>
                  
                   <input type="hidden" name="id" value="<?= $items['rowid'] ?>" class="quantity__input">
                  <input type="text" name="quantity" value="<?= $items['qty'] ?>" class="form-control col-md-2" size="2">
                                
 <input type="submit" value="-" name="in" class="btn btn-success btn-sm">
                </form>
                </div>
              </td>
              <td class="product-subtotal">Rp <?php echo $this->cart->format_number( $items['subtotal'] );?></td>
            </tr>
             <?php  endforeach; }?>
            
          </tbody>
        </table>
        <br><br>
      </div>
        <div class="row"><div ><!-- <p>*)Masukan Kupon Belanja Anda</p> --></div>
        <div class="col-md-3">
        <div class="input-group">

<?php 
            $tot =$this->cart->total();
             $tot;
            $sum1=0;
             $siap="";

            $disk_tmp=0;
            
             $sum1;
            $dat['test']=$sum1;

              $this->session->set_userdata($dat);
             $siap;

           
?>
  
  
</div>
</div>
</div>
 
      
      </div>
      <div class="col-md-4">
        <!-- Your order - table -->
        <h3  class="pull-right"><span class="light">Cart</span> Totals</h3>
        <table class="shop_table  push-down-30">
          <tfoot>
            <tr class="cart-subtotal">
              <th>Cart Subtotal</th>
              <td>   <span class="amount">Rp <?php echo $this->cart->format_number( $this->cart->total() ); ?></span></td>
            </tr>
            <tr class="shipping">
              <th>Shipping</th>
              <td>-</td>
            </tr>
            <tr class="shipping">
              <th>Diskon</th>
              <td><b><?= $sum1 ?>%</b></td>
            </tr>
            <hr></hr>+
            <tr class="total">
              <th><strong></strong></th>
              <td>
                <strong><span class="amount">Rp <?php $tot2=$this->cart->total()*$sum1;$tot3=(($this->cart->total())-($tot2/100)); echo $this->cart->format_number( $tot3);?></span></strong>
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
</div><?php
$_SESSION['item'] = $sum1;
$this->session->userdata($sum1);; 
?>
<?php echo $this->session->set_userdata('group'); ?>        