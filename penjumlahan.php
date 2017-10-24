<?php
class bilangan {
public $bil1,$bil2;
function set_penjumlahan($bilangan1, $bilangan2){
	$this->bil1 = $bilangan1;
		$this->bil2 = $bilangan2;
		echo "<h1>perhitungan nilai 21 dan 3</h1>";
		echo "||________________________________________________||".'<br>';
	}
	function get_penjumlahan(){
	return $this->bil1 + $this->bil2;
}
}
$penjumlahan1 = new bilangan;
$penjumlahan1->set_penjumlahan(21,3);
echo "hasil penjumlahan: ".$penjumlahan1->get_penjumlahan().'<br>';
?>