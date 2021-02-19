<?php 
/*
$not=2;

if ($not==3) {
	echo "orta geçti";
	
}
if ($not==2) {
	echo "zor geçti";
}
*/
$not=5;
switch ($not) {
	case '5':
		echo "pekiyi";
		break;
	case '4':
		echo "iyi";
		break;
	case '3':
		echo "orta";
		break;
	case '2':
		echo "kötü";
		break;	
			
	default:
		echo "kaldınız...";
		break;
}
 ?>