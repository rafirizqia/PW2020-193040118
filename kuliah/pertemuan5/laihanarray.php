<?php
	// array 1 dimensi
	//$arah = array("Kanan","Kiri");

	//$arah[2] = "Atas";
	//$arah[] = "Bawah";

	//$arah[1] = "Kanan";
	//$arah[0] = "Kiri";

	//echo "Panjang Array = ". count($arah);
	//echo "</br>";
	//print_r($arah);
	//	echo "<br>";

	//for ($i=0; $i <count($arah); $i++) { 
	//	echo "arah= ".$arah[$i];
	//	echo "<br>";
	//}
	//echo "<br>";

	// array multidimensi
	$mahasiswa = array();
	$mahasiswa[0][0]= "193040118";
	$mahasiswa[0][1]= "Rafi Rizqia";
	$mahasiswa[1][0]= "Subang";
	$mahasiswa[1][1]= "089626725961";

	print("<pre>".print_r($mahasiswa,true)."</pre>")


	for ($i=0; $i <= count($mahasiswa) ; $i++) { 
		
	}
?>