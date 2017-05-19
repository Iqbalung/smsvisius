<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Cek Ongkir TIKI, JNE, POS INDONESIA</title>
	<link rel="stylesheet" href="http://v4-alpha.getbootstrap.com/dist/css/bootstrap.min.css" type="text/css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" type="text/javascript"></script>
	<style type="text/css">
	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }
	</style>
</head>
<body>
<br>
<?php echo form_open('curl/get_ongkir'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12 col-sm-12">
			<h1 style="text-align:center;">Cek Ongkir TIKI, JNE, POS INDONESIA</h1>
			<br><br>
			<?php echo $this->session->flashdata('message'); ?>
			<div class="col-md-4 col-sm-12">
		      <label for='weight'>Berat Barang Kiriman (gram)</label>
		      <input type='text' name='weight' id='weight' required class='form-control form-control-sm' placeholder='Ketik Angka Saja' ><br>
			</div>
		</div>

		<div class="col-md-12 col-sm-12">
			
			<div class="col-md-6 col-sm-6">
				<?php
					$province_ori = json_decode(GetProv(), TRUE);
					echo "<select name='prov_origin' required class='form-control form-control-sm' id='prov_origin'>";
						echo "<option value=''>Pilih Provinsi...!!!</option>";
			        for ($i=1; $i < count($province_ori['rajaongkir']['results']); $i++) {
			          echo "<option value='".$province_ori['rajaongkir']['results'][$i]['province_id']."' class='jne tiki pos all' >".$province_ori['rajaongkir']['results'][$i]['province']."</option>";
			        }
			        echo "</select>";
				?>
			</div>

			<div class="col-md-6 col-sm-6">
				<?php
					$city_ori = json_decode(GetCity(), TRUE);
					echo "<select name='city_origin' required class='form-control form-control-sm' id='city_origin'>";
					echo "<option class='' selected>Pilih Kota Asal...!!!</option>";
			      	for ($x=1; $x < count($city_ori['rajaongkir']['results']); $x++) {
			        	echo "<option value='".$city_ori['rajaongkir']['results'][$x]['city_id']."' class='". $city_ori['rajaongkir']['results'][$x]['province_id']."' >".$city_ori['rajaongkir']['results'][$x]['type']." ".$city_ori['rajaongkir']['results'][$x]['city_name']."</option>";
			      	}
			      	echo "</select>";
				?>			
			</div>
		</div>

		<div class="col-md-12 col-sm-12"><br>
			
			<div class="col-md-6 col-sm-6">
				<?php
					$province_ori = json_decode(GetProv(), TRUE);
					echo "<select name='prov_destination' required class='form-control form-control-sm' id='prov_destination'>";
						echo "<option value=''>Pilih Provinsi...!!!</option>";
			        for ($i=1; $i < count($province_ori['rajaongkir']['results']); $i++) {
			          echo "<option value='".$province_ori['rajaongkir']['results'][$i]['province_id']."' class='jne tiki pos all' >".$province_ori['rajaongkir']['results'][$i]['province']."</option>";
			        }
			        echo "</select>";
				?>
			</div>

			<div class="col-md-6 col-sm-6">
				<?php
					$city_ori = json_decode(GetCity(), TRUE);
					echo "<select name='city_destination' required class='form-control form-control-sm' id='city_destination'>";
					echo "<option class='' selected>Pilih Kota Tujuan...!!!</option>";
			      	for ($x=1; $x < count($city_ori['rajaongkir']['results']); $x++) {
			        	echo "<option value='".$city_ori['rajaongkir']['results'][$x]['city_id']."' class='". $city_ori['rajaongkir']['results'][$x]['province_id']."' >".$city_ori['rajaongkir']['results'][$x]['type']." ".$city_ori['rajaongkir']['results'][$x]['city_name']."</option>";
			      	}
			      	echo "</select>";
				?>			
			</div>
			<div class="col-md-6 col-sm-6">
			<br>
				<input type='submit' class='btn btn-info-outline' value='Cek Ongkir'>
			<br><br>
			</div>
		</div>
	</div>
</div>
<?php echo form_close(); ?>
</body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://raw.githubusercontent.com/tuupola/jquery_chained/master/jquery.chained.min.js"></script>
<script>
	$('#city_origin').chained('#prov_origin');
	$('#city_destination').chained('#prov_destination');
	$(".alert").alert();
</script>