<?php

class Belanja { 

public $namaPembeli="Miftah";
public $namaBarang="Shampoo";
public $hargaBarang=90000;
public $jumlahBarang=2;
public $totalBayar;
public $diskon=0.1;
public static $pajak=0.2;
public function totalHarga() : float {
    $subtotal = $this->hargaBarang * $this->jumlahBarang;
    return $subtotal;
}



}
$belanja1 = new Belanja();
echo "Subtotal: " . $belanja1->totalHarga() . "\n";
?>