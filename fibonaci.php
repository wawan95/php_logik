
<?php

$angka_sebelum = 0;
$angka_sekarang = 1;

for ( $i=0; $i<=5; $i++){
	$hasil = $angka_sekarang + $angka_sebelum;
	echo "$hasil";

	$angka_sebelum = $angka_sekarang;
	$angka_sekarang = $hasil;
}

?>
