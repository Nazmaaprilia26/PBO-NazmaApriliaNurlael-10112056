<?php

class Belanja {

public $namaPembeli;
public $namaBarang;
public $hargaBarang;
public $jumlahBarang;
public $totalBayar;
public $diskon;
public static $pajak=0.2;
public function __construct($namaPembeli, $namaBarang, $hargaBarang, $jumlahBarang) {
    $this->namaPembeli = $namaPembeli;
    $this->namaBarang = $namaBarang;
    $this->hargaBarang = $hargaBarang;
    $this->jumlahBarang = $jumlahBarang;

}


public function totalHarga() {
    $subtotal = $this->hargaBarang * $this->jumlahBarang;
    return $subtotal;
}
}

 $belanja1 = new Belanja("Mingyu", "sabun", 12000, 3);

echo "<pre>";
echo "Nama Pembeli;" . $belanja1->namaPembeli . "\n";
echo "Nama Barang;" . $belanja1->namaBarang . "\n";
echo "harga Barang: Rp " . $belanja1->hargaBarang . "\n";
echo "Jumlah Barang;" . $belanja1->jumlahBarang . "\n";
echo " Diskon: " . ($belanja1->diskon * 100) . "%\n";
echo "Subtotal: Rp " . $belanja1->totalHarga() . "\n";
echo "</pre>";
?>