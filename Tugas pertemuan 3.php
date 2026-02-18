<?php
class PegadaianSyariah {

    var $besarPinjaman;
    var $bunga;
    var $lamaAngsuran;
    var $hariTerlambat;

     
    function totalPinjaman() {
        $total = $this->besarPinjaman + 
                 ($this->besarPinjaman * $this->bunga / 100);
        return $total;
    }

        function angsuranPerBulan() {
        $angsuran = $this->totalPinjaman() / $this->lamaAngsuran;
        return $angsuran;
    }

    
    function denda() {
        $denda = $this->angsuranPerBulan() * 0.0015 * $this->hariTerlambat;
        return $denda;
    }

    
    function totalBayar() {
        $totalBayar = $this->angsuranPerBulan() + $this->denda();
        return $totalBayar;
    }
}


$pegadaian = new PegadaianSyariah();
$pegadaian->besarPinjaman = 1000000;
$pegadaian->bunga = 10;
$pegadaian->lamaAngsuran = 5;
$pegadaian->hariTerlambat = 40;

echo "TOKO PEGADAIAN SYARIAH<br>";
echo "Jl Keadilan No 16<br>";
echo "Telp. 72353459<br><br>";

echo "Program Penghitung Besaran Angsuran Hutang<br><br>";

echo "Besaran Pinjaman : Rp " . $pegadaian->besarPinjaman . "<br>";
echo "Masukan besar bunga (%) : " . $pegadaian->bunga . "<br>";
echo "Total Pinjaman : Rp " . $pegadaian->totalPinjaman() . "<br>";
echo "Lama angsuran (bulan) : " . $pegadaian->lamaAngsuran . "<br>";
echo "Besaran angsuran : Rp " . $pegadaian->angsuranPerBulan() . "<br><br>";

echo "Ketentuan denda keterlambatan 0.15% per hari dari angsuran<br><br>";

echo "Keterlambatan Angsuran (Hari) : " . $pegadaian->hariTerlambat . "<br>";
echo "Denda Keterlambatan : Rp " . $pegadaian->denda() . "<br>";
echo "Besaran Pembayaran : Rp " . $pegadaian->totalBayar() . "<br>";

?>
