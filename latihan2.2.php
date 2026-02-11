<?php

class Belanja { 

public $namaPembeli;
public $namaBarang;
public $hargaBarang;
public $jumlahBarang;
public $totalBayar;
public $diskon;
public static $pajak=0.2;
public function totalHarga() : float {
    $subtotal = $this->hargaBarang * $this->jumlahBarang;
    return $subtotal;
}



}
$belanja1 = new Belanja();
$belanja1->namaPembeli = "Mingyu";
$belanja1->namaBarang = "sabun";
$belanja1->hargaBarang = 12000;
$belanja1->jumlahBarang = 3;
$belanja1->diskon = 0.1;

$belanja2 = new Belanja();
$belanja2->namaPembeli = "Keonho";
$belanja2->namaBarang = "sikat gigi";
$belanja2->hargaBarang = 15000;
$belanja2->jumlahBarang = 5;
$belanja2->diskon = 0.5;

echo "<pre>";
echo "Nama Pembeli;" . $belanja1->namaPembeli . "\n";
echo "Subtotal: Rp " . $belanja1->totalHarga() . "\n";


echo "Nama Pembeli;" . $belanja2->namaPembeli . "\n";
echo "Subtotal: Rp " . $belanja2->totalHarga() . "\n";
echo "</pre>";
?>