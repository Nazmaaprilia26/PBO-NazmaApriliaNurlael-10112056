<?php

class BangunRuang{

    public $jenis;
    public $sisi;
    public $jari;
    public $tinggi;

    function __construct($jenis,$sisi,$jari,$tinggi){
        $this->jenis = $jenis;
        $this->sisi = $sisi;
        $this->jari = $jari;
        $this->tinggi = $tinggi;
    }

    function hitungVolume(){

        $phi = 3.14;

        switch($this->jenis){

            case "Bola":
                $volume = 4/3 * $phi * pow($this->jari,3);
            break;

            case "Kerucut":
                $volume = 1/3 * $phi * pow($this->jari,2) * $this->tinggi;
            break;

            case "Limas Segi Empat":
                $volume = 1/3 * pow($this->sisi,2) * $this->tinggi;
            break;

            case "Kubus":
                $volume = pow($this->sisi,3);
            break;

            case "Tabung":
                $volume = $phi * pow($this->jari,2) * $this->tinggi;
            break;

        }

        return $volume;
    }
}

$data = [
    new BangunRuang("Bola",0,7,0),
    new BangunRuang("Kerucut",0,14,10),
    new BangunRuang("Limas Segi Empat",8,0,24),
    new BangunRuang("Kubus",30,0,0),
    new BangunRuang("Tabung",0,7,10)
];

?>

<!DOCTYPE html>
<html>
<head>
<title>Volume Bangun Ruang</title>
<style>
table{
border-collapse:collapse;
width:70%;
}
th,td{
border:1px solid black;
padding:8px;
text-align:center;
}
th{
background:blue;
color:white;
}
</style>
</head>
<body>

<table>
<tr>
<th>Jenis Bangun Ruang</th>
<th>Sisi</th>
<th>Jari-jari</th>
<th>Tinggi</th>
<th>Volume</th>
</tr>

<?php
foreach($data as $b){

echo "<tr>";
echo "<td>$b->jenis</td>";
echo "<td>$b->sisi</td>";
echo "<td>$b->jari</td>";
echo "<td>$b->tinggi</td>";
echo "<td>".$b->hitungVolume()."</td>";
echo "</tr>";

}
?>

</table>

</body>
</html>