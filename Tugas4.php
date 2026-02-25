<?php
class Mahasiswa {
    public $nama;
    public $kelas;
    public $mataKuliah;
    public $nilai;

    // Constructor
    public function __construct($nama, $kelas, $mataKuliah, $nilai) {
        $this->nama = $nama;
        $this->kelas = $kelas;
        $this->mataKuliah = $mataKuliah;
        $this->nilai = $nilai;
    }

    // Method untuk menentukan kelulusan
    public function cekKelulusan() {
        if ($this->nilai >= 70) {
            return "Lulus Kuis";
        } else {
            return "Tidak Lulus Kuis";
        }
    }

    // Method untuk menampilkan data
    public function tampilkanData() {
        echo "Nama : " . $this->nama . "<br>";
        echo "Kelas : " . $this->kelas . "<br>";
        echo "Mata Kuliah : " . $this->mataKuliah . "<br>";
        echo "Nilai : " . $this->nilai . "<br>";
        echo $this->cekKelulusan();
        echo "<hr>";
    }
}

// Array berisi objek mahasiswa
$daftarMahasiswa = [
    new Mahasiswa("Aditya", "SI 2", "Pemrograman Berorientasi Objek", 80),
    new Mahasiswa("Shinta", "SI 2", "Pemrograman Berorientasi Objek", 75),
    new Mahasiswa("Iceu", "SI 2", "Pemrograman Berorientasi Objek", 55)
];

// Looping untuk menampilkan data
foreach ($daftarMahasiswa as $mhs) {
    $mhs->tampilkanData();
}
?>