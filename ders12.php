<?php 

$yazi="benim adım erdoğan şemsi paşa pasajı";

echo $yazi;
echo "<br>";

echo strtolower($yazi);// bütün karakterleri küçük harf yaptı.
echo "<br>";

echo strtoupper($yazi);//tüm karakterleri büyük harfe çevirdi.
echo "<br>";

echo ucwords($yazi);//baş harflerini büyük yapıyor.
echo "<br>";
echo ucfirst($yazi);//ilk harf büyütür.
echo "<br>";
echo strlen(utf8_decode($yazi));//karakter sayısını bulur.
echo "<br>";

echo strstr($yazi, "erdoğan");//istediğimiz kelimeden sonrasını yazdırır.
echo "<br>";
echo str_replace(erdoğan, "kamil", $yazi);//bul ve değiştir.
echo "<br>";
echo substr($yazi, 0,30);//aralıktaki karakterleri yazdırıyoruz.
 ?>