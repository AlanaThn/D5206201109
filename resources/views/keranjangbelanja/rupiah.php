<?php
//membuat format rupiah dengan PHP
//tutorial www.malasngoding.com

function rupiah($angka){

	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;

}

echo rupiah(1000000);
?>
