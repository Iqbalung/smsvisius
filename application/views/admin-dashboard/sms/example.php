<?php
require_once('smsclass.php'); // panggil class  
ob_start();
$smsusername = 'iqbalung'; // username 
$smspassword = '1rtLS4';     // password 
$apikey      = '5064fd1ffcbf63d735df923daf1edb90';     // key 
// cek curl aktif atau tidak 
if(!function_exists('curl_version'))
{
  echo "Curl belum aktif di server anda .....!, Aktifkan dulu....";
  exit;
 }
if (isset($_POST['sms_create'])) {
	if (($_POST['pesan'] != "") && ($_POST['no_hp'] != "")) {
		$nohp  = $_POST['no_hp'];
		$pesan = $_POST['pesan'];
		$sms = new smsmasking();
		$sms->username = $smsusername;
		$sms->password = $smspassword;
		$sms->apikey   = $apikey;
		$sms->setTo($nohp);
		$sms->setText($pesan);
		
		$sts = $sms->smssend();
		$idreport=explode('|',$sts);
		setcookie("idreport", $idreport[1], time()+3600);
		if (substr($sts,0,1)=='0') {
			echo "<div style='text-align:center'><br />\nBerhasil<br /><br />\n";		
			echo "<div style='text-align:center'><br />\n$sts<br /><br />\n";		
			echo "<a href='index.php'>Kembali Ke Halaman Utama</a><br /><br />\n";
		} else {	
			echo "<div style='text-align:center'><br />\nGagal<br /><br />\n";		
			echo "<div style='text-align:center'><br />\n$sts<br /><br />\n";		
			echo "<a href='index.php'>Kembali Ke Halaman Utama</a><br /><br />\n";
		}
	} else {	
		echo "<div style='text-align:center'><br />\nPesan Atau Tujuan Kosong<br /><br /><br />\n";
		echo "<a href='index.php'>Kembali Ke Halaman Utama</a><br /><br />\n";
	}
} elseif (isset($_POST['sms_ceksaldo'])){
	$sms = new smsmasking();
	$sms->username = $smsusername;
	$sms->password = $smspassword;
	$sms->apikey   = $apikey;
	$sts=$sms->smssaldo();
	echo "<div style='text-align:center'><br />\n$sts<br /><br />\n";		
	echo "<a href='index.php'>Kembali Ke Halaman Utama</a><br /><br />\n";
} elseif (isset($_POST['sms_cekreport'])){
	$sms = new smsmasking();
	if (isset($_COOKIE["idreport"])) {
		$sms->idreport = $_COOKIE["idreport"]; // id hasil output dari kirim sms 
		$sms->apikey   = $apikey;
		$sts=$sms->smsreport();
	} else {
		$sts="Kirim Sms dulu ";
	}	
	echo "<div style='text-align:center'><br />\n$sts<br /><br />\n";		
	echo "<a href='index.php'>Kembali Ke Halaman Utama</a><br /><br />\n";
} else {	
	$no_hp   = "";
	$pesan   = "";
	if (isset($_COOKIE["idreport"])) {
		$idreport= $_COOKIE["idreport"];
	} else {
		$idreport="";
	}	
	echo "<b>Sms Masking Sample API (PHP)</b><br><br>";	
	echo "<form name='submit_form' method='post' action='index.php'>\n";		
  	echo "<table cellpadding='0' cellspacing='0' class='center'>\n<tr>\n";
	echo "<td class='tbl'>No. Handphone </td>\n";
	echo "<td class='tbl'><input type='text' name='no_hp' value='$no_hp' maxlength='13'  class='textbox' style='width:150px;' />";
	echo "</tr>\n<tr>\n";		
	echo "<td valign='top' class='tbl'>Isi pesan<br><br>\n";
	echo "<td class='tbl'><textarea name='pesan' cols='150' rows='3' class='textbox' style='width:350px;'>$pesan</textarea></td>\n";
	echo "</tr>\n<tr>\n";	
	echo "<td class='tbl'>Id Report</td>\n";
	echo "<td class='tbl'><input type='text' name='idreport' disabled='disabled' value='$idreport' maxlength='13'  class='textbox' style='width:150px;' />";
	echo "</tr>\n<tr>\n";		
	echo "<td align='center' colspan='3' class='tbl'>\n";
	echo "<input type='submit' name='sms_create' value='Kirim Sms' class='button'/><input type='submit' name='sms_ceksaldo' value='Cek Saldo' class='button'/><input type='submit' name='sms_cekreport' value='Cek Report' class='button'/>\n</td>\n";
	echo "</tr>\n";	
	echo "</table>\n";
	echo "</form>\n";
}
?>