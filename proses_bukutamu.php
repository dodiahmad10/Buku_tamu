<?php

$nama=$_REQUEST['nama'];
$email=$_REQUEST['email'];
$alamat=$_REQUEST['alamat'];
$pesan=$_REQUEST['pesan'];

require("config.php");
$sql="INSERT INTO bukutamu (id,nama,email,alamat,pesan) VALUES ('','$nama','$email','$alamat','$pesan')";

$query=mysqli_query($conn,$sql);
if($query){
echo "<script>alert('Data Sudah Disimpan');history.go(-1);</script>";
header("location:bukutamu.php");

}else{
echo "<script>alert('Data Gagal Disimpan');history.go(-1);</script>";

}
?>