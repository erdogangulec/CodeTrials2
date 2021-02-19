<?php 

$say=0;
$tahmin=3;
$kazan=2;

do{

$sayi=rand(1,5);
		echo $sayi; echo "<br>";
		$say++;
	
} while ($sayi != $tahmin); {
	echo "<br>";
	echo "$sayi Sayınız $say. demenede bulundu"; echo "<br>"; 
		
	if ($say <= $kazan ) {
		
			echo "tebrikler $kazan denemede tahmin ettiniz";
	
	} else {
	
	echo "kaybettiniz çünkü $kazan denemede tahmin edemediniz.";
	}

 }

 ?>