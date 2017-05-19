
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ProteusNet">
    <link rel="icon" type="image/ico" href="images/favicon.png">

    <title>Organique - HTML Template For Organic Shop</title>

    <!-- Custom styles for this template -->
    <!-- build:css stylesheets/main.css -->
    <link href="stylesheets/bootstrap.css" rel="stylesheet">
    <link href="stylesheets/main.css" rel="stylesheet">
    <!-- endbuild -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- Google fonts -->
    <script type="text/javascript">
      WebFontConfig = {
        google: { families: [ 'Arvo:700:latin', 'Open+Sans:400,600,700:latin' ] }
      };
      (function() {
        var wf = document.createElement('script');
        wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
          '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
      })();
    </script>

  </head>
  <body>
 
<br><br>
  <div class="search-mode__overlay"></div>
    
    
    <script data-main="scripts/main" src="bower_components/requirejs/require.js"></script>
    

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-33538073-8', 'proteusthemes.com');
      ga('send', 'pageview');

    </script>
  </body>
</html>
<div class="container">
<br>
<br>
<div class="col-xs-12 col-sm-3 active">
    
  </div>

    <div class="row">
      <!-- <input  type="text" value="155" name="destination" id="destination" disabled="disabled" /> -->
     
      <div class="col-md-12">
       <div class="col-md-6">
          <div class="panel-heading">
            <h3 class="panel-title">Tujuan</h3>
          </div>
          <div class="panel-body">
            <select class="form-control" name="propinsi_tujuan" id="propinsi_tujuan">
            <option value="" selected="" disabled="">Pilih Provinsi</option>
            <?php $this->load->view('rajaongkir/getProvince'); ?>
          </select>
          <br>
          <select class="form-control" name="destination" id="destination">
            <option value="" selected="" disabled="">Pilih Kota</option>
          </select>
          </div>
		   <div class="panel-heading">
            <h3 class="panel-title">Kurir</h3>
          </div>
          <div class="panel-body">
           <?php 
         $sum = 0;
              foreach ($this->cart->contents() as $items): 
              $sum+= $items['weight'];
             
              endforeach; ?>
            <br>
            
            <input type="hidden" name="berat" placeholder="gram" id="berat" value="<?php  echo $sum; ?>" class="form-control">
           
            <select class="form-control" name="courier" id="courier">
              <option value="">Pilih Kurir</option>
              <option value="jne">JNE</option>
              <option value="pos">POS</option>
              <option value="tiki">TIKI</option>
            </select>
          <br>
            <button type="button" onclick="tampil_data('data')" class="btn btn-info">Cek Ongkir</button>
          </div>
       
        <script>
          function tampil_data(act){
                var w = $('#origin').val();
                var x = $('#destination').val();
                var y = $('#berat').val();
                var z = $('#courier').val();

                $.ajax({
                    url: "<?= base_url()?>index.php/rajaongkir/getCost_other",
                    type: "GET",
                    data : {origin: w, destination: x, berat: y, courier: z},
                    success: function (ajaxData){
                        //$('#tombol_export').show();
                        //$('#hasilReport').show();
                        $("#hasil").html(ajaxData);
                    }
                });
            };
        </script>
		  </div><div class="row">
      <div class="col-md-6">
      
         
      </div>

      <div class="col-md-6">
        <div class="">
          <div class="panel-heading">
            <h3 class="panel-title">Hasil</h3>
          </div>
          <div class="panel-body">
            <ol>
              <div id="hasil">
                
              </div>
            </ol>
          </div>
        </div>
      </div>
    </div>

     <!--  <div class="col-xs-6">
        <h3>Cart</h3>
        
        <br><br>
      
        <div class="row"><div ><!-- <p>*)Masukan Kupon Belanja Anda</p> --></div>
        <div class="col-md-3">
        <div class="input-group">
  
  

</div>
</div>
</div>
 
      
      </div> -->
      <div class="col-xs-12 col-sm-6">
      </div>
      
    </div>
       
<!--      <div class="col-xs-12 col-sm-6">
      <hr>
        <table class="shop-table  shop-cart">
          <thead>
            <tr class="cart_table_title">
              <th class="product-remove"></th>
              <th class="product-thumbnail"></th>
              <th class="product-name">Product</th>
              <th class="product-price">Price</th>
              <th class="product-quantity">Quantity</th>
              <th class="product-subtotal">Total</th>
            </tr>
          </thead>
          <tbody>
          <?php 
            if( $this->cart->total_items() > 0){
              $i=0;
              foreach ($this->cart->contents() as $items): 
              $i++;
            ?>
            <tr class="cart_table_item">
              <td class="product-remove"><span class="glyphicon  glyphicon-remove"></span></td>
              <td class="product-thumbnail"><img src="<?php echo base_url() ?>asset/upload/<?= $items['image'] ?>" width="60%"></td>
              <td class="product-name"><a href="http://localhost/organique-html/src/shop.html"><?= $items['name'] ?></a></td>
              <td class="product-price"> Rp <?php echo $this->cart->format_number( $items['price'] );?></td>
              <td class="product-quantity">
                <div class="quantity  js--quantity">
                  <input type="button" value="-" class="quantity__button  js--minus-one  js--clickable">
                  <input type="text" name="quantity" value="<?= $items['qty'] ?>" class="quantity__input">
                  <input type="button" value="+" class="quantity__button  js--plus-one  js--clickable">
                </div>
              </td>
              <td class="product-subtotal">Rp <?php echo $this->cart->format_number( $items['subtotal'] );?></td>
            </tr>
             <?php endforeach; }?>
            
          </tbody>
        </table>
        <!-- Your order - table
        <h3  class="pull-right"><span class="light">Cart</span> Totals</h3>
        <table class="shop_table  push-down-30">
          <tfoot>
            <tr class="cart-subtotal">
              <th>Cart Subtotal</th>
              <td><span class="amount"> Rp <?php echo $this->cart->format_number( $this->cart->total() ); ?></span></td>
            </tr>
            <tr class="shipping">
              <th>Shipping</th>
              <td>  <?php 
           
             if ( ! isset($_POST['shipping']))
{
    $something = FALSE;
}
else
{
    $something = $_POST['shipping'];
    echo $this->cart->format_number($something);
}
            ?>
           
                
              </div></td>
            </tr>
            <tr class="total">
              <th><strong>Order Total</strong></th>
              <td>
                <strong><span class="amount">-</span></strong>
              </td>
            </tr>
          </tfoot>
        </table>

      </div>
    </div>
 -->
    
  </div>
</div>
<br><br>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<script>
$(document).ready(function(){

  $("#propinsi_asal").click(function(){
    $.post("<?php echo base_url(); ?>index.php/rajaongkir/getCity/"+$('#propinsi_asal').val(),function(obj){
      $('#origin').html(obj);
    });
      
  });

  $("#propinsi_tujuan").click(function(){
    $.post("<?php echo base_url(); ?>index.php/rajaongkir/getCity/"+$('#propinsi_tujuan').val(),function(obj){
      $('#destination').html(obj);
    });
      
  });

  /*
  $("#cari").click(function(){
    $.post("<?php echo base_url(); ?>index.php/rajaongkir/getCost/"+$('#origin').val()+'&dest='+$('#destination').val()+'&berat='+$('#berat').val()+'&courier='+$('#courier').val(),function(obj){
      $('#hasil').html(obj);
    });
  });

  */

  
});
</script>