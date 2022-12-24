<?php
$kon = mysqli_connect('localhost','root','');
$link = mysqli_select_db($kon,'data_diri') or die("could not select database!!");
$query = "INSERT INTO `dtdiri`(`no`, `Nama`, `tempatlahir`, `umur`, `alamat`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]')"
?>