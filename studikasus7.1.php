<?php

// CLASS INDUK
class Employee {
    public $nama;
    public $gaji;
    public $lamaKerja;

    function __construct($nama, $gaji, $lamaKerja){
        $this->nama = $nama;
        $this->gaji = $gaji;
        $this->lamaKerja = $lamaKerja;
    }

    function hitungGaji(){
        return $this->gaji;
    }
}

// ================= PROGRAMMER =================
class Programmer extends Employee {

    function hitungGaji(){
        $bonus = 0;

        if($this->lamaKerja < 1){
            $bonus = 0;
        } elseif($this->lamaKerja >= 1 && $this->lamaKerja <= 10){
            $bonus = 0.01 * $this->lamaKerja * $this->gaji;
        } else {
            $bonus = 0.02 * $this->lamaKerja * $this->gaji;
        }

        return $this->gaji + $bonus;
    }
}

// ================= DIREKTUR =================
class Direktur extends Employee {

    function hitungGaji(){
        $bonus = 0.5 * $this->lamaKerja * $this->gaji;
        $tunjangan = 0.1 * $this->lamaKerja * $this->gaji;

        return $this->gaji + $bonus + $tunjangan;
    }
}

// ================= PEGAWAI MINGGUAN =================
class PegawaiMingguan extends Employee {
    public $hargaBarang;
    public $stok;
    public $terjual;

    function __construct($nama, $gaji, $lamaKerja, $hargaBarang, $stok, $terjual){
        parent::__construct($nama, $gaji, $lamaKerja);
        $this->hargaBarang = $hargaBarang;
        $this->stok = $stok;
        $this->terjual = $terjual;
    }

    function hitungGaji(){
        $persen = $this->terjual / $this->stok;

        if($persen > 0.7){
            $bonus = 0.10 * $this->hargaBarang * $this->terjual;
        } else {
            $bonus = 0.03 * $this->hargaBarang * $this->terjual;
        }

        return $this->gaji + $bonus;
    }
}

// ================== DATA ==================
$p1 = new Programmer("Naszma", 5000000, 5);
$d1 = new Direktur("Keonho", 10000000, 12);
$pm1 = new PegawaiMingguan("Wisnu", 2000000, 1, 50000, 100, 80);

// ================== OUTPUT ==================
echo "<h3>Programmer</h3>";
echo "Nama: ".$p1->nama."<br>";
echo "Gaji: ".$p1->hitungGaji()."<br><br>";

echo "<h3>Direktur</h3>";
echo "Nama: ".$d1->nama."<br>";
echo "Gaji: ".$d1->hitungGaji()."<br><br>";

echo "<h3>Pegawai Mingguan</h3>";
echo "Nama: ".$pm1->nama."<br>";
echo "Gaji: ".$pm1->hitungGaji()."<br>";

?>