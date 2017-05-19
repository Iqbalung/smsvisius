<div class="woocommerce  push-down-30">
  <div class="breadcrumbs  no-margin">
    <div class="container">
    	<hr>
        <div class="row">
          <div class="col-md-8">
            <table class="shop-table  shop-cart">     
              <tbody>
                <?php 
                  if( $this->cart->total_items() > 0){
                      $i=0;
                      foreach ($this->cart->contents() as $items): 
                      $i++;
                ?>
                <?php endforeach; }?>
              </tbody>
            </table>
          </div>
          <div class="col-md-4">
            <table>
              <tr class="cart-subtotal">  
                <td align="right">
                  <span class="amount"> <?php $this->cart->format_number( $this->cart->total());$tot =$this->cart->total(); ?></span>
                </td>
              </tr>
            </table>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-4">
            <div class="alert alert-success" role="alert"><b>BRI</b><br>1200083728373 <br><b>an. Iqbal Cahyo Gumilar</b></div>
          </div>
          <div class="col-md-4">
            <div class="alert alert-success" role="alert"><b>MANDIRI</b><br>137008282<br><b>an. Iqbal Cahyo Gumilar </div>
          </div>
          <div class="col-md-4">
            <div class="alert alert-success" role="alert"><b>BNI</b><br>90393938<br><b>an. Sodikun</div>
          </div>
          </div><br><br><br>  
            <div class="col-xs-12">
              <h3><span class="light">Your</span> order</h3>
                <table class="shop_table  push-down-30">
                  <tfoot>
                    <tr class="cart-subtotal">
                      <th>Cart Subtotal</th>
                      <td><span class="amount">Rp <?php echo $this->cart->format_number( $items['subtotal'] );?></span></td>
                    </tr>
                    <tr class="shipping">
                      <th>Shipping</th>
                      <td>Rp 
                        <?php if ( ! isset($_POST['shipping'])){
                          $something = FALSE;
                        }else{
                          $something = $_POST['shipping'];
                          list($biaya, $service, $kota, $kurir) = explode(":", $something);
                          echo $this->cart->format_number($biaya);
                        }
                        $tot =$this->cart->total();
                        $tot;
                        $sum1=0;
                        $siap="";
                        $disk_tmp=0;
                       
                        $sum1;
                        $dat['test']=$sum1;
                        ?>
                </div>
              <form action="<?= base_url()?>index.php/checkout_proses/pembayaran" method="post">
              <input type="hidden" name="id" value="<?php $idinvoice = date('YmdHis'); echo $idinvoice;?>">
              <input type="hidden" name="nama" value="<?php echo $this->session->userdata('username');?>">
              <input type="hidden" name="nama" value="<?php echo $this->session->userdata('alamat');?>">
          </td>
            </tr>
            <tr class="total">
              <th><strong>Order Total</strong></th>
              <td>Rp <?php $total = $something + $tot;echo $this->cart->format_number($total); ?></span></strong>
              </td>
            </tr>
            <tr class="total">
              <th><strong></strong></th>
              <td>
                <hr>
                <strong><span class="amount"></span></strong>
                </hr>
              </td>
            </tr>
            <tr class="total">
              <th><strong>Total Yang Harus Dibayar</strong></th>
              <td>
                <strong><span class="amount">Rp <?php echo $this->cart->format_number(($total)); ?><input name="total" type="hidden" value="<?php echo $total; ?>"></span></strong>
              </td>
            </tr>
            <tr class="total">
              <th><strong>Pengiriman</strong></th>
              <td>
                <strong><span class="amount">Kurir :<label name="kurir"><?php echo $kurir;?></label><br>Layanan :<label name="layanan"><?php echo $service;?></label><br>Kota Tujuan :<label name="kota"><?php echo $kota;?></label></span></strong>
              </td>
            </tr>
          </tfoot>
          <tbody>
          <?php 
         
            if( $this->cart->total_items() > 0){
              $i=0;
              foreach ($this->cart->contents() as $items): 
              $i++;
            ?>
            
            <tr class="checkout_table_item">
              <td class="product-name"><?= $items['name'] ?><strong class="product-quantity">× <?= $items['qty'] ?></strong><br>
              
              <td class="product-total"><span class="amount">Rp <?php echo $this->cart->format_number( $items['price'] );?></span></td>
            </tr>
             <?php endforeach; }?>
          </tbody>
        </table>
        <?php
          if ( ! isset($_POST['alamat_lain']))
          {
            $something = FALSE;
          }
          else
          {
            echo "<label> Alamat Lengkap Lokasi Pengiriman </label><textarea name=lengkap class=form-control rows=3 ></textarea>";
          }

         ?>

       </div>

        <!-- Payment methods -->
        <div class="payment">    
          <input type="hidden" name="biaya" value="<?php echo $biaya;?>">       
          <input type="hidden" name="kota" value="">
          <input type="hidden" name="kurir" value="<?php echo $kurir;?>">
          <input type="hidden" name="layanan" value="<?php echo $kota;?>">
          <br>
          <input type="submit" value="Selesaikan Pembelian">
        </form>
        </div>
      </div>
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
</div>
