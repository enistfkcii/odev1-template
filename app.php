<?php

//0-14 = Çocuk/ 15-24 = Genç/ 25-64 = Yetişkin / 65+ = Yaşlı
$yas=23;
$yasGrubu="";
if ($yas<=14) {
	$yasGrubu = "Cocuk";
	echo $yasGrubu;
}
elseif ($yas>=15 && $yas<=24) {
	$yasGrubu = "Genç";
	echo $yasGrubu;
}
elseif ($yas>=25 && $yas<=64) {
	$yasGrubu = "Yetişkin";
	echo $yasGrubu;
}
elseif ($yas>=65) {
	$yasGrubu = "Yaşlı";
	echo $yasGrubu;
}
 */
