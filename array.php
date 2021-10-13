<?php

$pakaian = (object)[
	'nama' => 'kameja' ,
	'ukuran' => 'L' ,
	'harga' => 100000,
	'warna' => [
		'polos' => 'putih' ,
		'merek' => 'novear' ,
			]
	
];

$perabotan = (object)[
	'nama' => 'ricecooker' ,
	'ukuran' => '2 kilo' ,
	'harga' => 250000,
	'warna' => [
		'polos' => 'putih' ,
		'merek' => 'maspion' ,
			]
	
];
// cara mengetahui object multidimensi
echo "<pre>";
echo "<pre>";
print_r($pakaian);
print_r($perabotan);
echo "<pre>";
echo "<pre>";

?>