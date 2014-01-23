<?php
	$nama=$_POST["nama"];
	$v1=$_POST["v1"];
	$v2=$_POST["v2"];
//	echo $nama." v1 = ".$v1.", v2 = ".$v2;
	
	$total = $v1 + $v2;
	echo "v1 = ".$v1."<br />v2 = ".$v2."<br />";
	echo "Jumlah = ".$total;
?>