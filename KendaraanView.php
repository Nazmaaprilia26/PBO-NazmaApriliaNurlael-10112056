<!DOCTYPE html>
<html>
<head>
    <title>Daftar Kendaraan</title>
</head>
<body>
    <h2>DATA KENDARAAN</h2>
    <?php foreach ($semuaKendaraan as $k): ?>
        <p>
            Merek : <?= $k->GetMerek(); ?> <br/>
            Jumlah Roda : <?= $k->GetJumlahRoda(); ?> <br/>
            Harga : <?= number_format($k->GetHarga(), 0, ',', '.'); ?> <br/>
            Warna : <?= $k->GetWarna(); ?> <br/>
            Bahan Bakar : <?= $k->GetBhnBakar(); ?> <br/>
        </p>
        <hr>
    <?php endforeach; ?>
</body>
</html>