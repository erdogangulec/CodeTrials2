<?php 

$dizi=array(4,7,5,3,9,7,6);
$dizi2=array("erdoğan","kamil","güleç");
echo "\$dizi dizideki eleman sayısı:  ".count($dizi);//listenin içindeki eleman sayısını verir.
echo "<br>";
print_r($dizi);

echo "<br>";

sort($dizi);
print_r($dizi);//küçükten büyüğe sıraladı
echo "<br>";

rsort($dizi);//büyükten küçüğe sıraladı
print_r($dizi);
echo "<br>";

echo max($dizi);
echo "<br>";
echo min($dizi);
echo "<br>";
echo in_array(6, $dizi);// ...elemanı var mı?
echo "<br>";
print_r($dizi2);

echo "<br>";
echo implode("ve", $dizi2);//birleştirme
 ?>