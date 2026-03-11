<?php

// 1. Membuat Class sebagai cetakan
class DaftarBuah {
// Properti untuk menyimpan data buah
public $kumpulanBuah;

// Constructor untuk mengisi data saat objek dibuat
public function __construct($data) {
$this->kumpulanBuah = $data;
}

// Method (fungsi) untuk menampilkan buah menggunakan foreach
public function tampilkan() {
foreach ($this->kumpulanBuah as $b) {
echo $b . "
";
}
}
}

// 2. Inisialisasi Data (dari gambar kamu)
$buah = ["Apel", "Jeruk", "Mangga"];

// 3. Membuat Objek dari Class tersebut
$cetakBuah = new DaftarBuah($buah);

// 4. Memanggil method untuk menampilkan hasil
$cetakBuah->tampilkan();

?>

<?php

$data = [
    ["nama"=>"Ani","nilai"=>80],
    ["nama"=>"Sinta","nilai"=>75],
    ["nama"=>"Rina","nilai"=>90]
];

echo "<table border='1'>";
echo "<tr><th>Nama</th><th>Nilai</th></tr>";

foreach($data as $d){
    echo "<tr>";
    echo "<td>".$d["nama"]."</td>";
    echo "<td>".$d["nilai"]."</td>";
    echo "</tr>";
}

echo "</table>";

?>