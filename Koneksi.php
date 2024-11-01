<?php
$mysqli = new mysqli("localhost","root","","penjualan");
if($mysqli->connect_error){
    die("Koneksi gagal : ".$mysqli->connect_error);
}else{
   // echo "Koneksi Berhasil";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    
</body>
</html>