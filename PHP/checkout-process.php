<?php

    $host="localhost";  //diisi nama host apache
    $user="root";       //diisi username apache, default root
    $db="shop";   //nama database yang anda buat
 
    $con = mysqli_connect("localhost","root","","shop");


 
 
 


 //mengambil variabel yang dikirim oleh index.php
 $id = $_POST['id'];
 $kota = $_POST['kota'];
 $biayakirim = $_POST['ongkir'];
 $kurir= $_POST['kurir'];
 $layanan = $_POST['layanan'];
 $tot = $_POST['total'];
	 mysqli_query($con,"Update invoices set kabupaten='$kota', total='$tot', biaya_kirim=$biayakirim, kurir='$kurir', service='$layanan' where id = $id ");
	 mysqli_close($con);
	 
echo $kota;
echo $tot;
echo $id;
echo $biayakirim;

 

if ( ! isset($_POST['total']))
{
    $something = FALSE;
}
else
{

    $biaya = $_POST['total'];
   
  
}

require_once('Veritrans.php');
 //Set Your server key
Veritrans_Config::$serverKey = "VT-server-Yv3uYeBSGfOTrJumkT07WprK";

// Uncomment for production environment
// Veritrans_Config::$isProduction = true;

// Uncomment to enable sanitization
// Veritrans_Config::$isSanitized = true;

// Uncomment to enable 3D-Secure
// Veritrans_Config::$is3ds = true;

// Required
$transaction_details = array(
  'order_id' => rand(),
  'gross_amount' => $biaya, // no decimal allowed for creditcard
  );

// Optional
$item1_details = array(
    'id' => 'a1',
    'price' => $biaya,
    'quantity' => 1,
    'name' => "Total Pebayaran nota"
    );

// Optional


// Optional
$item_details = array ($item1_details);

// Optional
$billing_address = array(
    'first_name'    => "Andri",
    'last_name'     => "Litani",
    'address'       => "Mangga 20",
    'city'          => "Jakarta",
    'postal_code'   => "16602",
    'phone'         => "081122334455",
    'country_code'  => 'IDN'
    );

// Optional
$shipping_address = array(
    'first_name'    => "Obet",
    'last_name'     => "Supriadi",
    'address'       => "Manggis 90",
    'city'          => "Jakarta",
    'postal_code'   => "16601",
    'phone'         => "08113366345",
    'country_code'  => 'IDN'
    );

// Optional
$customer_details = array(
    'first_name'    => "Andri",
    'last_name'     => "Litani",
    'email'         => "andri@litani.com",
    'phone'         => "081122334455",
    'billing_address'  => $billing_address,
    'shipping_address' => $shipping_address
    );

// Fill transaction details
$transaction = array(
    'transaction_details' => $transaction_details,
    'customer_details' => $customer_details,
    'item_details' => $item_details,
    );

try {
  // Redirect to Veritrans VTWeb page
  header('Location: ' . Veritrans_VtWeb::getRedirectionUrl($transaction));
}
catch (Exception $e) {
  echo $e->getMessage();
  if(strpos ($e->getMessage(), "Access denied due to unauthorized")){
      echo "<code>";
      echo "<h4>Please set real server key from sandbox</h4>";
      echo "In file: " . __FILE__;
      echo "<br>";
      echo "<br>";
      echo htmlspecialchars('Veritrans_Config::$serverKey = \'<your server key>\';');
      die();
}

} 


?>
