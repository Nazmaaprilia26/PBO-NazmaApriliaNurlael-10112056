<?php

class KalkulatorSuhu {

    public $suhu;

    public function __construct($suhu) {
        $this->suhu = $suhu;
    }

    public function cToF() {
        return ($this->suhu * 9/5) + 32;
    }

    public function cToK() {
        return $this->suhu + 273.15;
    }
}

// Membuat objek
$kalkulator = new KalkulatorSuhu(30);

// Output
echo "<pre>";
echo "================= KALKULATOR SUHU =================\n";
echo "Satuan        : Celsius (°C)\n";
echo "---------------------------------------------------\n";
echo "SUHU (°C)     : " . $kalkulator->suhu . "\n";
echo "FAHRENHEIT    : " . $kalkulator->cToF() . "\n";
echo "KELVIN        : " . $kalkulator->cToK() . "\n";
echo "===================================================\n";
echo "</pre>";

?>