<?php
$furniture = ["meja", "kursi", "lemari"];
echo "isi dari " . '$furniture[1]' . " adalah = " . $furniture[1];

$furniture2 = [
	["meja", 80 , "1 M"],
	["kursi", 20, "40 CM"],
	["lemari", 2, "1 M"]
];
echo "<br>";
echo "Furniture " . $furniture2[0][0] . " memiliki tinggi " . $furniture2[0][1] . " CM dan memiliki lebar " . $furniture2[0][2] . "<br>";
echo "Furniture " . $furniture2[1][0] . " memiliki tinggi " . $furniture2[1][1] . " CM dan memiliki lebar " . $furniture2[1][2] . "<br>";
echo "Furniture " . $furniture2[2][0] . " memiliki tinggi " . $furniture2[2][1] . " M dan memiliki lebar " . $furniture2[2][2] . "<br>";
echo "<br> <br>";

$furniture3 = (object)[
	'objek1' => [
		'nama' => 'meja',
		'tinggi' => 80,
		'lebar' => '1 M'
	],
	'objek2' => [
		'nama' => 'kursi',
		'tinggi' => 20,
		'lebar' => '40 CM'
	],
	'objek3' => [
		'nama' => 'lemari',
		'tinggi' => 2,
		'lebar' => '1 M'
	]
];
$furniture3->objek1 = (object)$furniture3->objek1;
$furniture3->objek2 = (object)$furniture3->objek2;
$furniture3->objek3 = (object)$furniture3->objek3;

echo "isi dari object '" . '$furniture3->objek1->nama' . "' adalah = {$furniture3->objek1->nama} <br>";
echo "Furniture {$furniture3->objek1->nama} memiliki tinggi {$furniture3->objek1->tinggi} CM dan memiliki lebar {$furniture3->objek1->lebar}<br>";
echo "Furniture {$furniture3->objek2->nama} memiliki tinggi {$furniture3->objek2->tinggi} CM dan memiliki lebar {$furniture3->objek2->lebar}<br>";
echo "Furniture {$furniture3->objek3->nama} memiliki tinggi {$furniture3->objek3->tinggi} M dan memiliki lebar {$furniture3->objek3->lebar}<br>";


// Pembuktian Tipe
// echo "<pre>";
// print_r($furniture);
// print_r($furniture2);
// print_r($furniture3);
// echo "<pre>";
?>