<?php
	$bulan = array("Januari",
					"Februari",
					"Maret",
					"April",
					"Mei",
					"Juni",
					"Juli",
					"Agustus",
					"September",
					"Oktober",
					"November",
					"Desember");
	print_r($bulan);

	$angka = array(1,2,3,4,5,6);

	$hasil = array_pop($bulan);
	print_r($bulan);
	echo "<hr>";


	$hasil = array_push($angka, 7,8,9,10);
	print_r($angka);
	echo "<hr>";

	$hasil = rsort($angka);
	print_r($angka);
	echo"<hr>";

	$hasil = sort($angka);
	print_r($angka);
?>