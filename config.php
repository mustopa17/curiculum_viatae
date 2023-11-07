<?php
$host = 'localhost';
$user = 'if22';
$pw = '123';
$db = 'database1web';

$konek = mysqli_connect($host, $user, $pw, $db);

if ($konek== false) {
    die("Gagal terhubung ke database: " . mysqli_connect_error());
}
?>
