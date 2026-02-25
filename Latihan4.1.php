<?php
function formRupiah($angka) {
    return "Rp " . number_format($angka);
}

class Belanja {
    public $namaPembeli;
    public $namaBarang;
    public $hargaBarang;
    public $jumlahBeli;

    public function hitungSubTotal() {
        return $this->hargaBarang * $this->jumlahBeli;
    }

    public function hitungTotalDenganDiskon($persenDiskon){
        $SubTotal = $this->hitungSubTotal();
        $Diskon = ($persenDiskon / 100) * $SubTotal;
        return $SubTotal - $Diskon;
    }
}

$data =[
    'namaPembeli' => 'Miftah',
    'namaBarang' => 'Mie Ayam',
    'hargaBarang' => '12000',
    'jumlahBeli' => 12,
];

$belanja = new Belanja ();
$belanja->namaPembeli = $data["namaPembeeli"];
$belanja->namaBarang = $data["namaBarang"];
$belanja->hargaBarang = $data["hargaBarang"];
$belanja->jumlahBeli = $data["jumlahBeli"];

echo "<h2> STRUK BELANJA WARUNG A </h2>";
echo "Pembeli " . $belanja->namaPembeli . "<br>";
echo "Barang: " . $belanja->namaBarang . "<br>";
echo "SubTotal: " . formRupiah($belanja->hitungSubTotal()) . "<br>";
echo "Total (Diskon 10%): " . formRupiah($belanja->hitungTotalDenganDiskon(10)) . "<br>";