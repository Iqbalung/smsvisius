


<?php
 
        $host="localhost";  //diisi nama host apache
        $user="root";       //diisi username apache, default root
        $db="shop";   //nama database yang anda buat
 
        $con = mysqli_connect("localhost","root","","shop");


 
 
 


 //mengambil variabel yang dikirim oleh index.php
 $order=$_REQUEST['order_id'];
 $status=$_REQUEST['status_code'];

 
 if($status==200){
	 mysqli_query($con,"Update invoices set status=3 where id = $order");
	 mysqli_close($con);


 }
    
?>
 
<?php
include('config.php');
?>