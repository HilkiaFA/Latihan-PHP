<html>
     <head>
         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         <title>Masukkan Nama Siswa</title>
         <link rel="stylesheet" href="./style2.css"/>
     </head>
     <body>
        <h1>Personal data form</h1>
         <form action="data_dirii.php" method="POST">
             <table align="left">
                 <tr>
                     <td>Nama</td>
                     <td>:</td>
                     <td><input type="text" name="Nama" size="35" required></td>
                 </tr>
<tr>
                     <td>Jenis Kelamin</td>
                     <td>:</td>
                     <td><input type="text" name="tempatlahir" size="35" required></td>
                 </tr>
<tr>
                     <td>Asal Daerah</td>
                     <td>:</td>
                     <td><input type="text" name="umur" size="35" required></td>
                 </tr> 
 
                 <tr>
                     <td>Jurusan</td>
                     <td>:</td>
                     <td><input type="text" name="alamat" size="35" required></td>
                 </tr> 
             </table>
             <input class="add" type="submit" value="Tambah">
            <input type="submit" class="back" onclick="goBack()" value="kembali">
         </form>
     </body>
     <script>
    function goBack() {
        window.history.back();
    }
</script>
 </html>