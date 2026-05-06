<?php
require_once "model/Kendaraan.php";

class KendaraanController {
    public function index() {
        // Menyiapkan data (biasanya dari database, tapi ini sesuai contoh gambar)
        $kendaraan1 = new Kendaraan("Yamaha Mio", 2, 10000000, "Merah", "Premium");
        $kendaraan2 = new Kendaraan("Toyota Yaris", 4, 160000000, "Merah", "Premium");
        $kendaraan3 = new Kendaraan("Honda Scoopy", 2, 130000000, "Putih", "Premium");
        $kendaraan4 = new Kendaraan("Isuzu Panther", 4, 170000000, "Merah", "Solar");

        $semuaKendaraan = [$kendaraan1, $kendaraan2, $kendaraan3, $kendaraan4];

        // Mengirim data ke view
        require_once "view/KendaraanView.php";
    }
}
?>