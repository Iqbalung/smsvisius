<?php  
$curl = curl_init();


curl_setopt_array($curl, array(
  CURLOPT_URL => "http://api.rajaongkir.com/starter/cost",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "origin=155&destination=$destination&weight=$berat&courier=$courier",
  CURLOPT_HTTPHEADER => array(
    "content-type: application/x-www-form-urlencoded",
    "key: 5f0b2b7dc71dd2bab399fbc0c11eeb43"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  //echo $response;
  $data = json_decode($response, true);
  //echo json_encode($k['rajaongkir']['results']);

  /*
  for ($k=0; $k < count($data['rajaongkir']['results']); $k++){
  

    echo "<li='".$data['rajaongkir']['results'][$k]['code']."'>".$data['rajaongkir']['results'][$k]['service']."</li>";
  	//echo $data['rajaongkir']['results'][$k]['code'];
  }
  */
  //echo $data['rajaongkir']['results']['costs']['service'];
}
?>
<form action="<?php echo base_url()?>index.php/index/final_checkout/" method="post">
<?php echo $data['rajaongkir']['origin_details']['city_name'];?> ke<label name="destinantion" ><?php echo $data['rajaongkir']['destination_details']['city_name'];?> </label> <label name="berat">Berat Keseluruhan<?php echo $berat;?>gram </label> Kurir : <label name="kurir"><?php echo strtoupper($courier); ?></label>

<?php
 for ($k=0; $k < count($data['rajaongkir']['results']); $k++) {
?>
	 <div title="<?php echo strtoupper($data['rajaongkir']['results'][$k]['name']);?>" style="padding:10px">
		 <table class="table table-striped">
			 <tr>
				<th>Pilih Layanan</th>
				 <th>No.</th>
				 <th>Jenis Layanan</th>
				 <th>ETD</th>
				 <th>Tarif</th>
			 </tr>
			
			 <?php
			 for ($l=0; $l < count($data['rajaongkir']['results'][$k]['costs']); $l++) {			 
			 ?>
			 <tr>
					 <td><input type="radio" name="shipping" value="<?php echo $data['rajaongkir']['results'][$k]['costs'][$l]['cost'][0]['value'];?>:<?php echo $data['rajaongkir']['results'][$k]['costs'][$l]['service'];?>:<?php echo $data['rajaongkir']['destination_details']['city_name'];?>:<?php echo strtoupper($courier); ?>" ></td>
				 <td><?php echo $l+1;?></td>
				 <td>
					 <div style="font:bold 16px Arial"><?php echo $data['rajaongkir']['results'][$k]['costs'][$l]['service'];?></div>
					 <div style="font:normal 11px Arial"><?php echo $data['rajaongkir']['results'][$k]['costs'][$l]['description'];?></div>
				 </td>
				 <td align="center">&nbsp;<?php echo $data['rajaongkir']['results'][$k]['costs'][$l]['cost'][0]['etd'];?> days</td>
				 <td align="right">
			 
			  <input type="hidden" name="alamat_lain" value="1" />
			   <label ><?php echo number_format($data['rajaongkir']['results'][$k]['costs'][$l]['cost'][0]['value']);?></label>
			
			 <input type="submit" value="pilih"/></form></td>
			 </tr>
			 <?php
			 }
			 ?>
			 
		 </table>
	 </div>
 <?php
 }
 ?>