
<?php
$bilangan1 = $_GET['bilangan1'];
$bilangan2 = $_GET['bilangan2'];
$operator = $_GET['operator'];

echo "Bilangan 1 adalah $bilangan1 <br>";
echo "Bilangan 2 adalah $bilangan2 <br>";

if ($operator == 1) {
	$hasil = $bilangan1 + $bilangan2;
	echo "Hasil pertambahan adalah $hasil";
}

elseif ($operator == 2) {
	$hasil = $bilangan1 - $bilangan2;
	echo "Hasil pengurangan adalah $hasil";
}

elseif ($operator == 3) {
	$hasil = $bilangan1 * $bilangan2;
	echo "Hasil perkalian adalah $hasil";
}

elseif ($operator == 4) {
	$hasil = $bilangan1 / $bilangan2;
	echo "Hasil pembagian adalah $hasil";
}
?>
