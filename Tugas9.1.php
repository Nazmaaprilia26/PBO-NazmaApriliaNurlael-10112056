<?php

// ==================
// CLASS INDUK
// ==================
class Tabungan {
    protected $saldo;

    public function __construct($saldoAwal) {
        $this->saldo = $saldoAwal;
    }

    public function setor($jumlah) {
        if ($jumlah > 0) {
            $this->saldo += $jumlah;
            return true;
        }
        return false;
    }

    public function tarik($jumlah) {
        if ($jumlah > 0 && $jumlah <= $this->saldo) {
            $this->saldo -= $jumlah;
            return true;
        }
        return false;
    }

    public function getSaldo() {
        return $this->saldo;
    }
}


// ==================
// CLASS ANAK
// ==================
class Siswa extends Tabungan {
    private $nama;

    public function __construct($nama, $saldoAwal) {
        parent::__construct($saldoAwal);
        $this->nama = $nama;
    }

    public function tampilSaldo() {
        echo "Nama: {$this->nama} | Saldo: Rp {$this->saldo}\n";
    }

    // ✅ fopen dipakai di sini (poin i)
    public function catatTransaksi($tipe, $jumlah) {
        $file = fopen("transaksi.txt", "a");
        fwrite($file, "{$this->nama} $tipe: $jumlah | Saldo: {$this->saldo}\n");
        fclose($file);
    }
}


// ==================
// ARRAY DATA SISWA
// ==================
$siswa = [
    new Siswa("Siswa 1", 100000),
    new Siswa("Siswa 2", 150000),
    new Siswa("Siswa 3", 200000)
];


// ==================
// LOGIN (AKSES TERBATAS)
// ==================
echo "=== LOGIN SISWA ===\n";
echo "1. Siswa 1\n";
echo "2. Siswa 2\n";
echo "3. Siswa 3\n";
echo "Pilih (1-3): ";

$login = trim(fgets(STDIN)) - 1;

if (!isset($siswa[$login])) {
    echo "Login gagal!\n";
    exit;
}

$currentUser = $siswa[$login];


// ==================
// MENU PROGRAM
// ==================
while (true) {
    echo "\n=== MENU TABUNGAN ===\n";
    echo "1. Lihat Saldo\n";
    echo "2. Setor Uang\n";
    echo "3. Tarik Uang\n";
    echo "4. Keluar\n";
    echo "Pilih: ";

    $pilih = trim(fgets(STDIN));

    switch ($pilih) {
        case 1:
            $currentUser->tampilSaldo();
            break;
        case 2:
            echo "Jumlah setor: ";
            $jumlah = trim(fgets(STDIN));

            if ($currentUser->setor($jumlah)) {
                echo "Setor berhasil!\n";
                $currentUser->catatTransaksi("setor", $jumlah);
            } else {
                echo "Gagal setor!\n";
            }
            break;

        case 3:
            echo "Jumlah tarik: ";
            $jumlah = trim(fgets(STDIN));

            if ($currentUser->tarik($jumlah)) {
                echo "Tarik berhasil!\n";
                $currentUser->catatTransaksi("tarik", $jumlah);
            } else {
                echo "Gagal tarik (saldo kurang / input salah)!\n";
            }
            break;

        case 4:
            echo "Terima kasih!\n";
            exit;

        default:
            echo "Pilihan tidak valid!\n";
    }
}