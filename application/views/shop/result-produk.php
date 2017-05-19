  <style type="text/css">
  
  </style>
  <div class="container fast-order">
    <div class="row">
      <div class="col-xs-12">
        <h3>Produk</h3>
        <hr>
        <table class="shop-table  shop-cart">
          <thead>
            <tr class="cart_table_title">
              <th class="product-remove"></th>
              <th class="product-thumbnail"></th>
              <th class="product-name">Product</th>     
            </tr>
          </thead>
          <tbody>
            <?php for ($i=0; $i < 4 ; $i++) { ?> 
              <tr class="cart_table_item">
              <td class="product-remove"><span class="glyphicon  glyphicon-remove"></span></td>
              <td class="product-thumbnail"><img src="<?php echo base_url(""); ?>asset/images/dummy/product-cart.jpg"></td>
              <td class="product-name"><a href="http://localhost/organique-html/src/shop.html">Orange Flavoured Raw Cacao Bar</a></td>  
            </tr>
            <?php } ?>            
            <tr class="cart_table_action">
              <td colspan="6" class="actions">
                <div class="col-xs-6 pull-right">
                  <a href="checkout.html" class="btn  btn-primary  pull-right">Proceed to checkout</a>
                  <a href="checkout.html" class="btn  btn-warning  pull-right">Update cart</a>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-xs-12 col-sm-6">
      </div>      
    </div>
    <hr class="divider">
  </div>
