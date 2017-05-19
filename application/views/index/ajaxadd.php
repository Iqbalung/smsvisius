<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $.post("http://localhost/smsvisius/index.php/index/add_peserta_service",
        {
          nama: "Donald Duck",
          nohp: "090099w9",
          email: "Duckburg",
          kota: "Kota"
        },
        function(error,error_msg){
            alert("Data: " + error + "\nStatus: " + error_msg);
        });
    });
});
</script>
</head>
<body>

<button>Send an HTTP POST request to a page and get the result back</button>

</body>
</html>