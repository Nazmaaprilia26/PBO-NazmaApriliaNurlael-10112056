<?php
class kendaraan
{
var $jumlahRoda;
var $warna;
var $bahanBakar; 
var $harga;
var $merek;
var $tahunPembuatan;
function statusHarga()
{
if ($this->harga > 50000000) $status = 'Mahal';
else $status = 'Murah';
return $status;
}
function statusBbm1()
{
 if ($this->bahanBakar="premium") {
    return "Bbm Subsidi";
 }
    return "Bbm non subsidi";
}
function hargaBekas()
{
    $hargaBekas = $this->harga*0.9;
    return $hargaBekas;
}

}
$objekKendaraan1 = new kendaraan();
$objekKendaraan1->merek = " Yamaha Mio";//set properti
$objekKendaraan1->harga = "10000000";//set properti
$objekKendaraan1->bahanBakar = "premium";
$objekKendaraan1->tahunPembuatan = 2015; 
$objekKendaraan1->jumlahRoda = 2; 
$objekKendaraan1->warna = "putih"; 

$objekKendaraan2 = new kendaraan();
$objekKendaraan2->merek = "Toyota Avanza";
$objekKendaraan2->harga = 100000000;
$objekKendaraan2->bahanBakar = "Pertamax";
$objekKendaraan2->tahunPembuatan = 2018; 
$objekKendaraan2->jumlahRoda = 4; 
$objekKendaraan2->warna = "pink"; 

echo "Merek: " . $objekKendaraan1->merek . "<br>";
echo "Status Harga: " . $objekKendaraan1->statusHarga() . "<br>";
echo "Status BBM: " . $objekKendaraan1->statusBbm1() . "<br>";
echo "Harga Bekas: " . $objekKendaraan1->hargaBekas() . "<br>";
echo "Jumlah Roda: " . $objekKendaraan1->jumlahRoda . "<br>";
echo "Warna:" . $objekKendaraan1->warna . "<br>";

echo "Merek: " . $objekKendaraan2->merek . "<br>";
echo "Status Harga: " . $objekKendaraan2->statusHarga() . "<br>";
echo "Status BBM: " . $objekKendaraan2->statusBbm1() . "<br>";
echo "Harga Bekas: " . $objekKendaraan2->hargaBekas() . "<br>";
echo "Jumlah Roda: " . $objekKendaraan2->jumlahRoda . "<br>";
echo "Warna:" . $objekKendaraan2->warna . "<br>";

?>