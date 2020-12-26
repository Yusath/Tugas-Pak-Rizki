<html>
<head>
<title>Penggajian Karyawan</title>
</head>

<body>


<?php
$nama_brg  = $_POST ['a'];
$kode_bar  = $_POST ['b'];
$merk      = $_POST ['c'];
$procie    = $_POST ['d'];
$fitur     = $_POST ['e'];

//MERK Barang
if($merk=='ASUS'){
     $harpok=10000000;
}elseif($merk=='ACER'){
     $harpok=9000000;
}elseif($merk=='LENOVO'){
     $harpok=8000000;
}

//KODE barang
if($kode_bar=="P001"){
     $warna='Putih';
}elseif($kode_bar=="M0001"){
     $warna='Merah';
}elseif($kode_bar="H001"){
     $warna='Hitam';
}

//Harga prosessor
if($procie=="i3"){
     $hartol=$harpok+3000000;
}elseif($procie=="i5"){
     $hartol=$harpok+5000000;
}

?>
***DATA BARANG***
<table border="1">
<tr>
<td>NAMA BARNAG</td><td>:</td><td>LAPTOP</td>
</tr>
<tr>
<td>WARNA</td><td>:</td><td><?php echo $warna;?></td>
</tr>
<tr>
<td>Merk</td><td>:</td><td><?php echo $merk;?></td>
</tr>
<tr>
<td>Prosessor</td><td>:</td><td><?php echo $procie;?></td>
</tr>
<tr>
<td>Fitur</td><td>:</td><td><?php echo $fitur;?></td>
</tr>
<tr>
<td>Total Harga</td><td>:</td><td><?php echo $hartol;?></td>
</tr>
</table>

</body>
</html>