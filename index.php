<?php
// Pastikan path ini benar sesuai folder kamu
require_once "controller/KendaraanController.php";

$app = new KendaraanController();
$app->index();
?>