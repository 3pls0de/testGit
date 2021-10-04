<!DOCTYPE html>
<html>
<body>

<?php
$buku1 =  20000;
$buku2 =  30000;
$buku3 =  50000;

$brg_dibeli = "buku3";
$jmlh_beli = 3;
$bayar =  $jmlh_beli * $$brg_dibeli;

echo "barang yang dibeli: " . $brg_dibeli . " Sebanyak: " . $jmlh_beli . "<br>";
echo "harga yang harus dibayarkan sebelum diskon = " . $bayar . "<br>";

switch ($brg_dibeli) {
	case "buku3":
		if ($bayar > 75000) {
			$diskon15 = $bayar * 0.15;
			$diskon20 = $bayar * 0.20;
			if ($diskon20 > $diskon15) {
				$akhirBayar = $bayar - $diskon20;
				echo "mendapatkan diskon 20% :" . $diskon20 . "<br>";
				echo "setelah pengurangan Diskon :" . $akhirBayar . "<br>";
			}else{
				$akhirBayar = $bayar - $diskon15;
				echo "mendapatkan diskon 15% :" . $diskon15 . "<br>";
				echo "setelah pengurangan Diskon :" . $akhirBayar . "<br>";
			}
		}else{
			$akhirBayar = $bayar - $diskon20;
			echo "mendapatkan diskon 20% :" . $diskon20 . "<br>";
			echo "setelah pengurangan Diskon :" . $akhirBayar . "<br>";
		}
		break;
	
	default:
		if ($bayar > 75000) {
			$diskon15 = $bayar * 0.15;
			$akhirBayar = $bayar - $diskon15;
			echo "mendapatkan diskon 15% :" . $diskon15 . "<br>";
			echo "setelah pengurangan Diskon :" . $akhirBayar . "<br>";
		}else{
			echo "tidak dapat diskon, jumlah yang harus dibayarkan adalah = " . $bayar;
		}
		break;
}

?>

</body>
</html>
