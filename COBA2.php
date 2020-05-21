
<?php
error_reporting(false);
 session_start();
?>

<form method="post">

<tr>
   <td>Masukkan Nama</td>
   <td>: <input type="text" name="nama"></td>
  </tr>

   <td><input type="submit" name="kirim" value="Kirim"></td>
  </tr>



<?php
 // Ambil data dari session
 if (isset($_SESSION['tmpnama'])) {
  $tmpnama = $_SESSION['tmpnama'];
 }

 $tmpnama[] = $_POST['nama'];

 // Simpan data array yang baru ke session
 $_SESSION['tmpnama'] = $tmpnama;

?>
<br>
<table>
<tr>
   <td>Nama</td>
 </tr>
<?php
   // Ambil data dari session
   if (isset($_SESSION['tmpnama'])) {
    $tmpnama = $_SESSION['tmpnama'];
   }
   // End script ambil data

   // Cetak dengan cara uraikan isi arraynya
   for ($i=0; $i < count($tmpnama); $i++) {
    echo "<tr>";
    echo "<td>".$tmpnama[$i]."</td><td>";
   }
   // End script urai array
   session_destroy();
  ?>
</table>
