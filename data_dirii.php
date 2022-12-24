<?php 
include "db_connect.php"; 
$Nama = $_POST['Nama'];
$tempatlahir = $_POST['tempatlahir'];
$umur = $_POST['umur'];
$alamat = $_POST['alamat']; 
 
$query=mysqli_query($kon, "INSERT INTO dtdiri(Nama, tempatlahir, umur, alamat)
VALUES ('$Nama', '$tempatlahir', '$umur', '$alamat')"); 
 
if($query) {
?>
<script language="JavaScript">
   document.location='index.html'</script> 
<?php 
} 
?>