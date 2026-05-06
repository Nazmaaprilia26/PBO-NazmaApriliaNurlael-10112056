<?php

echo"Masukan username: ";
$input_nama = fopen("php://stdin", "r");
$username = trim(fgets($input_nama));

echo "Welcome $username, apakabar?\n";

?>