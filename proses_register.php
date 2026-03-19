<?php

$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];

$data = $nama . "|" . $email . "|" . $password . "\n";

file_put_contents("data.txt", $data, FILE_APPEND);

echo "Registrasi berhasil! <a href='login.php'>Login sekarang</a>";

?>