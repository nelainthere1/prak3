<?php

$judul = $_POST['judul'];
$isi = $_POST['isi'];

$data = $judul . "|" . $isi . "\n";

file_put_contents("post.txt", $data, FILE_APPEND);

echo "Laporan berhasil dibuat! <a href='dashboard.php'>Kembali</a>";

?>